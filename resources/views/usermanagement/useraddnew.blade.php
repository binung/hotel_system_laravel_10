@extends('layouts.master')
@section('content')
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Add New User</h3>
                    </div>
                </div>
            </div>
            <form action="{{ route('form/booking/save') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Full Name</label>
                                    <input type="text" class="form-control @error('total_numbers') is-invalid @enderror"name="total_numbers" value="{{ old('total_numbers') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control @error('date') is-invalid @enderror"name="date" value="{{ old('date') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control @error('time') is-invalid @enderror" id="datetimepicker3" name="time" value="{{ old('time') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Role Name</label>
                                    <input type="text" class="form-control @error('arrival_date') is-invalid @enderror" name="arrival_date" value="{{ old('arrival_date') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Position</label>
                                    <input type="text" class="form-control @error('depature_date') is-invalid @enderror" name="depature_date" value="{{ old('depature_date') }}"> 
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Department</label>
                                    <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="password" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Confirm Password</label>
                                    <input type="password" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Profile Image</label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input @error('fileupload') is-invalid @enderror" id="customFile" name="fileupload" value="{{ old('fileupload') }}">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit1">Create New User</button>
            </form>
        </div>
    </div>
    @section('script')
    
    @endsection
    
@endsection