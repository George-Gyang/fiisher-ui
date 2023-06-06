@extends('layouts.default')

@section('content')


    <div class="container py-5 main_content">
        <div class="d-flex align-items-center">
        </div>
        <div class="empty_box">
            <div><img src="{{ asset('images/empty-box.png') }}" class="img-fluid" alt=""></div>
            <p class="fw-bolder fs-2 text-dark text-center "> You do not have a schedule
                plan yet</p>
            <p class="text-center fs-xsm fw-semibold text-dark">Your match can be invited to join you this date plan.
                You will be notified if your match accepts or declines this plan</p>
            <div class="d-grid gap-2 col-6 mx-auto">
                <button class="btn purp_bg text-light" type="button">Create a Schedule plan</button>
              </div>
        </div>
    </div>

@stop
