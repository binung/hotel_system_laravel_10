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
                            <h4 class="card-title float-left mt-2">All List Users</h4>
                            <a href="{{ route('form/addroom/page') }}" class="btn btn-primary float-right veiwbutton">Add User</a> 
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
                                            <th>User ID</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>0056</td>
                                            <td>Soeng Souy</td>
                                            <td>soengsouy@gmail.com</td>
                                            <td>09678767867</td>
                                            <td>Active</td>
                                        </tr>
                                        <tr>
                                            <td>0056</td>
                                            <td>Soeng Souy</td>
                                            <td>soengsouy@gmail.com</td>
                                            <td>09678767867</td>
                                            <td>Active</td>
                                        </tr>
                                        <tr>
                                            <td>0056</td>
                                            <td>Soeng Souy</td>
                                            <td>soengsouy@gmail.com</td>
                                            <td>09678767867</td>
                                            <td>Active</td>
                                        </tr>
                                        <tr>
                                            <td>0056</td>
                                            <td>Soeng Souy</td>
                                            <td>soengsouy@gmail.com</td>
                                            <td>09678767867</td>
                                            <td>Active</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    @section('script')
    @endsection
@endsection