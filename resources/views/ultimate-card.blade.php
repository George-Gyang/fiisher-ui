@extends('layouts.default')

@section('content')


    <div class="container py-5 main_content">
        <div class="">
            <div class="card border-0 col-md-6">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold fs-4">Choose a plan</h5>
                    <div class="my-4">
                        <div class="plans_container d-flex justify-content-between">
                            <a href="/basic" class="nav-link">
                                <button class="btn rounded-pill purp_border purp_text">Basic</button>
                            </a>
                            <a href="/popular" class="nav-link">
                                <button class="btn rounded-pillpurp_border purp_text">Popular</button>
                            </a>
                            <a href="/special" class="nav-link">
                                <button class="btn rounded-pill purp_border purp_text">Special</button>
                            </a>
                            <a href="/ultimate" class="nav-link">
                                <button class="btn rounded-pill plans_btn purp_border purp_text">Ultimate</button>
                            </a>
                        </div>
                        <div class="card primary_gradient p-3 mx-2 text-light">
                            <p class="fs-xsm">12 month</p>
                            <p class="fw-bold fs-5">N13,050</p>
                            <p class="fs-xsm">Save 35%</p>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn purp_text purp_border px-4">Back</button>
                        <button type="submit" class="btn purp_bg text-light me-3 px-4">Continue</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
