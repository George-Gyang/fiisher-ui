@extends('layouts.default')

@section('content')


    <div class="container py-5 main_content">
        <div class="d-flex align-items-center">
        </div>
        <div class="empty_box">
            <div><img src="{{ asset('images/empty-box.png') }}" class="img-fluid" alt=""></div>
            <p class="fw-bolder fs-2 text-dark text-center ">Nothing to see yet</p>
            <p class="text-center fw-semibold text-dark">We'll Notify of your match here</p>
        </div>
    </div>

@stop
