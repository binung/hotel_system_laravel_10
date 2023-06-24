@extends('layouts.master')
@section('content')
    <style>
        .avatar {
            background-color: #aaa;
            border-radius: 50%;
            color: #fff;
            display: inline-block;
            font-weight: 500;
            height: 38px;
            line-height: 38px;
            margin: -38px 10px 0 0;
            text-align: center;
            text-decoration: none;
            text-transform: uppercase;
            vertical-align: middle;
            width: 38px;
            position: relative;
            white-space: nowrap;
            z-index: 2;
        }
    </style>
    {{-- message --}}
    {!! Toastr::message() !!}
    <div class="page-wrapper">
        <div class="content container-fluid">
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title mt-5">Edit Customer</h3> </div>
                </div>
            </div>
            <form action="{{ route('form/customer/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Customer ID</label>
                                    <input class="form-control" type="text" name="bkg_customer_id" value="{{ $customerEdit->bkg_customer_id }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" value="{{ $customerEdit->name }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Room Type</label>
                                    <select class="form-control" id="sel2" name="room_type">
                                        <option selected value="{{ $customerEdit->room_type }}">{{ $customerEdit->room_type }}</option>
                                        <option value="Single">Single</option>
                                        <option value="Double">Double</option>
                                        <option value="Quad">Quad</option>
                                        <option value="King">King</option>
                                        <option value="Suite">Suite</option>
                                        <option value="Villa">Villa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Total Members</label>
                                    <input class="form-control" type="number" name="total_numbers" value="{{ $customerEdit->total_numbers }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Date</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="date" value="{{ $customerEdit->date }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Time</label>
                                    <div class="time-icon">
                                        <input type="text" class="form-control" id="datetimepicker3" name="time" value="{{ $customerEdit->time }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Arrival Date</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="arrival_date" value="{{ $customerEdit->arrival_date }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Depature Date</label>
                                    <div class="cal-icon">
                                        <input type="text" class="form-control datetimepicker" name="depature_date" value="{{ $customerEdit->depature_date }}">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="{{ $customerEdit->email }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $customerEdit->ph_number }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>File Upload</label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="fileupload">
                                        <input type="hidden" class="form-control" name="hidden_fileupload" value="{{ $customerEdit->fileupload }}">
                                        <a href="profile.html" class="avatar avatar-sm mr-2">
                                            <img class="avatar-img rounded-circle" src="{{ URL::to('/assets/upload/'.$customerEdit->fileupload) }}" alt="{{ $customerEdit->fileupload }}">
                                        </a>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" rows="1.5" id="message" name="message">{{ $customerEdit->message }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary buttonedit">Update</button>
            </form>
        </div>
    </div>
    @section('script')
    <script>
        $(function() {
            $('#datetimepicker3').datetimepicker({
                format: 'LT'
            });
        });
        </script>
    @endsection
@endsection