@extends('layouts.default')

@section('content')


    <div class="container py-5 main_content">
        <div class="">
            <div class="card border-0 col-md-6">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold fs-4">Request for a march <img src="{{ asset('images/heart-icon.png') }}" class="img-fluid png" alt=""></h5>
                    <div class="position-relative my-3 match">
                        <div class=" position-absolute top-50 start-50 translate-middle rounded-circle">
                            <img src="{{ asset('images/profile3.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn purp_text purp_border px-4">Back to home</button>
                        <button type="submit" class="btn purp_bg text-light me-3 px-4">Requst fo rematch</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
