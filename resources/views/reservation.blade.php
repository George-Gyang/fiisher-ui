@extends('layouts.default')

@section('content')


    <div class="container py-5 main_content">
        <div class="">
            <div class="card card_shadow border-0 col-md-6">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold fs-4"> Restaurant Reservation details</h5>
                    <div class="my-4 px-5">
                        <div class="card border-0 card_shadow py-4 px-2">
                            <p class="fs-xsm mb-0 text-center"> 
                                <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#a098ff" d="M7 11h2v2H7zm0 4h2v2H7zm4-4h2v2h-2zm0 4h2v2h-2zm4-4h2v2h-2zm0 4h2v2h-2z"/><path fill="#a098ff" d="M5 22h14c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2h-2V2h-2v2H9V2H7v2H5c-1.103 0-2 .897-2 2v14c0 1.103.897 2 2 2zM19 8l.001 12H5V8h14z"/></svg></span>
                                Dinner date with Prisca
                            </p>
                            <hr>
                            <p class="fw-semibold text-center mb-0">Saturday 02, June 15, 2023 at 6:00PM</p>
                            <hr>
                            <div class="d-flex align-items-center">
                                <div>
                                    <img src="{{ asset('images/restaurant-icon.png') }}" class="img-fluid rounded" alt="">
                                </div>
                                <div class="ms-2">
                                    <p class="fs-xs mb-0 fw-semibold">Spring Time Foods</p>
                                    <p class="fs-xs mb-0">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                viewBox="0 0 24 24">
                                                <path fill="currentColor"
                                                    d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                                            </svg>
                                        </span>
                                        C-Line Ewet Housing Estate, Uyo, AKS</p>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn rounded-pill purp_bg fs-xsm text-light">Edit</button>
                            </div>
                        </div>
                        <div class="my-2">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" >
                            <label class="form-check-label ms-2 fs-xsm" for="flexCheckChecked">
                                I accept that all details herein are in compliance with me. For enquiries <a href="">Learn more</a>
                            </label>
                        </div>
                        <div class="row my-3">
                            <div class="col-6">
                                <div class="d-grid gap-2">
                                    <button class="btn purp_border purp_text" type="button">Back</button>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="d-grid gap-2">
                                    <button class="btn purp_bg text-light" type="button">Continue</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop
