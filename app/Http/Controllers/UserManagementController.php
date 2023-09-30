<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;

class UserManagementController extends Controller
{
    /** user list */
    public function userList()
    {
        return view('usermanagement.listuser');
    }

    /** add neew users */
    public function userAddNew()
    {
        return view('usermanagement.useraddnew');
    }

    /** edit record */
    public function userView($user_id)
    {
        $userData = User::where('user_id',$user_id)->first();
        return view('usermanagement.useredit',compact('userData'));
    }

    /** update record */
    public function userUpdate(Request $request)
    {
        DB::beginTransaction();
        try {
            $updateRecord = [
                'name'         => $request->name,
                'email'        => $request->email,
                'phone_number' => $request->phone_number,
                'position'     => $request->position,
                'department'   => $request->department,
            ];

            User::where('user_id',$request->user_id)->update($updateRecord);
        
            DB::commit();
            Toastr::success('Updated record successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Update record fail :)','Error');
            return redirect()->back();
        }
    }

    /** delete record */
    public function userDelete($id)
    {
        try {

            $deleteRecord = User::find($id);
            $deleteRecord->delete();
            Toastr::success('User deleted successfully :)','Success');
            return redirect()->back();
        
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('User delete fail :)','Error');
            return redirect()->back();
        }
    }

    /** get users data */
    public function getUsersData(Request $request)
    {
        $draw            = $request->get('draw');
        $start           = $request->get("start");
        $rowPerPage      = $request->get("length"); // total number of rows per page
        $columnIndex_arr = $request->get('order');
        $columnName_arr  = $request->get('columns');
        $order_arr       = $request->get('order');
        $search_arr      = $request->get('search');

        $columnIndex     = $columnIndex_arr[0]['column']; // Column index
        $columnName      = $columnName_arr[$columnIndex]['data']; // Column name
        $columnSortOrder = $order_arr[0]['dir']; // asc or desc
        $searchValue     = $search_arr['value']; // Search value

        $users =  DB::table('users');
        $totalRecords = $users->count();

        $totalRecordsWithFilter = $users->where(function ($query) use ($searchValue) {
            $query->where('name', 'like', '%' . $searchValue . '%');
            $query->orWhere('email', 'like', '%' . $searchValue . '%');
            $query->orWhere('position', 'like', '%' . $searchValue . '%');
            $query->orWhere('phone_number', 'like', '%' . $searchValue . '%');
            $query->orWhere('status', 'like', '%' . $searchValue . '%');
        })->count();

        if ($columnName == 'name') {
            $columnName = 'name';
        }
        $records = $users->orderBy($columnName, $columnSortOrder)
            ->where(function ($query) use ($searchValue) {
                $query->where('name', 'like', '%' . $searchValue . '%');
                $query->orWhere('email', 'like', '%' . $searchValue . '%');
                $query->orWhere('position', 'like', '%' . $searchValue . '%');
                $query->orWhere('phone_number', 'like', '%' . $searchValue . '%');
                $query->orWhere('status', 'like', '%' . $searchValue . '%');
            })
            ->skip($start)
            ->take($rowPerPage)
            ->get();
        $data_arr = [];
        
        foreach ($records as $key => $record) {
            $modify = '
                <td class="text-right">
                    <div class="dropdown dropdown-action">
                        <a href="" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                            <i class="fas fa-ellipsis-v ellipse_color"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="'.url('users/add/edit/'.$record->user_id).'">
                                <i class="fas fa-pencil-alt m-r-5"></i> Edit
                            </a>
                            <a class="dropdown-item" href="'.url('users/delete/'.$record->id).'">
                            <i class="fas fa-trash-alt m-r-5"></i> Delete
                        </a>
                        </div>
                    </div>
                </td>
            ';
            $data_arr [] = [
                "user_id"      => $record->user_id,
                "name"         => $record->name,
                "email"        => $record->email,
                "position"     => $record->position,
                "phone_number" => $record->phone_number,
                "status"       => $record->status, 
                "modify"       => $modify, 
            ];
        }

        

        $response = [
            "draw"                 => intval($draw),
            "iTotalRecords"        => $totalRecords,
            "iTotalDisplayRecords" => $totalRecordsWithFilter,
            "aaData"               => $data_arr
        ];
        return response()->json($response);
    }
}
