@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <div class="mt-5">
                            <h4 class="card-title float-left mt-2">Appointments</h4>
                            <a href="{{ route('form/booking/add') }}" class="btn btn-primary float-right veiwbutton ">Add Booking</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-table">
                        <div class="card-body booking_card">
                            <div class="table-responsive">
                                <table class="datatable table table-stripped table table-hover table-center mb-0">
                                    <thead>
                                        <tr>
                                            <th>Booking ID</th>
                                            <th>Name</th>
                                            <th>Room Type</th>
                                            <th>Total Numbers</th>
                                            <th>Date</th>
                                            <th>Time</th>
                                            <th>Arrival Date</th>
                                            <th>Depature Date</th>
                                            <th>Email</th>
                                            <th>Ph.Number</th>
                                            <th>Status</th>
                                            <th class="text-right">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($allBookings as $bookings )
                                        <tr>
                                            <td>{{ $bookings->bkg_id }}</td>
                                            <td>
                                                <h2 class="table-avatar">
                                                <a href="#" class="avatar avatar-sm mr-2">
                                                    <img class="avatar-img rounded-circle" src="{{ URL::to('/assets/upload/'.$bookings->fileupload) }}" alt="{{ $bookings->fileupload }}">
                                                </a>
                                                <a href="#">{{ $bookings->name }}<span>{{ $bookings->bkg_id }}</span></a>
                                                </h2>
                                            </td>
                                            <td>{{ $bookings->room_type }}</td>
                                            <td>{{ $bookings->total_numbers }}</td>
                                            <td>{{ $bookings->date }}</td>
                                            <td>{{ $bookings->time }}</td>
                                            <td>{{ $bookings->arrival_date }}</td>
                                            <td>{{ $bookings->depature_date }}</td>
                                            <td><a href="#" class="__cf_email__" data-cfemail="2652494b4b5f44435448474a66435e474b564a430845494b">{{ $bookings->email }}</a></td>
                                            <td>{{ $bookings->ph_number }}</td>
                                            <td>
                                                <div class="actions"> <a href="#" class="btn btn-sm bg-success-light mr-2">Active</a> </div>
                                            </td>
                                            <td class="text-right">
                                                <div class="dropdown dropdown-action">
                                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                                        <i class="fas fa-ellipsis-v ellipse_color"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="{{ url('form/booking/edit/'.$bookings->bkg_id) }}">
                                                            <i class="fas fa-pencil-alt m-r-5"></i> Edit
                                                        </a>
                                                        <a class="dropdown-item bookingDelete" data-toggle="modal" data-target="#delete_asset" data-id="{{ $bookings->id }}" data-fileupload="{{ $bookings->fileupload }}">
                                                            <i class="fas fa-trash-alt m-r-5"></i> Delete
                                                        </a> 
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Model delete --}}
        <div id="delete_asset" class="modal fade delete-modal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <form action="{{ route('form/booking/delete') }}" method="POST">
                        @csrf
                        <div class="modal-body text-center"> <img src="{{ URL::to('assets/img/sent.png') }}" alt="" width="50" height="46">
                            <h3 class="delete_class">Are you sure want to delete this Asset?</h3>
                            <div class="m-t-20">
                                <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                                <input class="form-control" type="hidden" id="e_id" name="id" value="">
                                <input class="form-control" type="hidden" id="e_fileupload" name="fileupload" value="">
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- End Model delete --}}
        
    </div>
    @section('script')
    {{-- delete model --}}
    <script>
        $(document).on('click','.bookingDelete',function()
        {
            $('#e_id').val($(this).data('id'));
            $('#e_fileupload').val($(this).data('fileupload'));
        });
    </script>
    @endsection
@endsection