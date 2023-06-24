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
                        <h3 class="page-title mt-5">Edit Room</h3> 
                    </div>
                </div>
            </div>
            <form action="{{ route('form/room/update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row formtype">
                            <input class="form-control" type="hidden" name="bkg_room_id" value="{{ $roomEdit->bkg_room_id }}" readonly>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input class="form-control" type="text" name="name" value="{{ $roomEdit->name }}" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Room Type</label>
                                    <select class="form-control" id="sel2" name="room_type">
                                        <option selected value="{{ $roomEdit->room_type }}">{{ $roomEdit->room_type }}</option>
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
                                    <label>AC/NON-AC</label>
                                    <select class="form-control @error('ac_non_ac') is-invalid @enderror" id="ac_non_ac" name="ac_non_ac">
                                        <option selected value="{{ $roomEdit->ac_non_ac }}">{{ $roomEdit->ac_non_ac }}</option>
                                        <option value="AC">AC</option>
                                        <option value="NON-AC">NON-AC</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Food</label>
                                    <select class="form-control @error('food') is-invalid @enderror" id="food" name="food">
                                        <option selected value="{{ $roomEdit->food }}">{{ $roomEdit->food }}</option>
                                        <option value="Free Breakfast">Free Breakfast</option>
                                        <option value="Free Lunch">Free Lunch</option>
                                        <option value="Free Dinner">Free Dinner</option>
                                        <option value="Free Breakfast & Dinner">Free Breakfast & Dinner</option>
                                        <option value="Free Welcome Drink">Free Welcome Drink</option>
                                        <option value="No Free Food">No Free Food</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Bed Count</label>
                                    <select class="form-control @error('bed_count') is-invalid @enderror" id="bed_count" name="bed_count">
                                        <option selected value="{{ $roomEdit->bed_count }}">{{ $roomEdit->bed_count }}</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Charges For cancellation</label>
                                    <select class="form-control @error('charges_for_cancellation') is-invalid @enderror" id="charges_for_cancellation" name="charges_for_cancellation">
                                        <option selected value="{{ $roomEdit->charges_for_cancellation }}">{{ $roomEdit->charges_for_cancellation }}</option>
                                        <option value="Free">Free</option>
                                        <option value="5% Before 24Hours">5% Before 24Hours</option>
                                        <option value="No Cancellation Allow">No Cancellation Allow</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Rent</label>
                                    <input type="text" class="form-control @error('rent') is-invalid @enderror" id="rent" name="rent" value="{{$roomEdit->rent}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Phone Number</label>
                                    <input type="number" class="form-control @error('phone_number') is-invalid @enderror" id="phone_number" name="phone_number" value="{{$roomEdit->phone_number}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>File Upload</label>
                                    <div class="custom-file mb-3">
                                        <input type="file" class="custom-file-input" id="customFile" name="fileupload">
                                        <input type="hidden" class="form-control" name="hidden_fileupload" value="{{ $roomEdit->fileupload }}">
                                        <a href="profile.html" class="avatar avatar-sm mr-2">
                                            <img class="avatar-img rounded-circle" src="{{ URL::to('/assets/upload/'.$roomEdit->fileupload) }}" alt="{{ $roomEdit->fileupload }}">
                                        </a>
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" rows="1.5" id="message" name="message">{{ $roomEdit->message }}</textarea>
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