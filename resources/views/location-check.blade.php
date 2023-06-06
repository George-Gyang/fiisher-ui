@extends('layouts.default')

@section('content')


    <div class="container py-5 main_content">
        <div class="">
            <div class="card card_shadow border-0 col-md-5">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold fs-4"> Your 80% match </h5>
                    <div class="my-4 px-5">
                        <div id="carouselExampleCaptions" class="carousel slide">
                            {{-- <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div> --}}
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/restaurant.png') }}" class="img-fluid d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Spring time food</h5>
                                        <p class="fs-xsm">
                                            <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                                                </svg>
                                            </span> C-Line Ewet Housing Estate, Uyo, AKS
                                        </p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/restaurant.png') }}" class="img-fluid d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Spring time food</h5>
                                        <p class="fs-xsm"> <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                                                </svg>
                                            </span> C-Line Ewet Housing Estate, Uyo, AKS</p>
                                    </div>
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/restaurant.png') }}" class="img-fluid d-block w-100"
                                        alt="...">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Spring time food</h5>
                                        <p class="fs-xsm"> <span>
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                    viewBox="0 0 24 24">
                                                    <path fill="currentColor"
                                                        d="M12 11.5A2.5 2.5 0 0 1 9.5 9A2.5 2.5 0 0 1 12 6.5A2.5 2.5 0 0 1 14.5 9a2.5 2.5 0 0 1-2.5 2.5M12 2a7 7 0 0 0-7 7c0 5.25 7 13 7 13s7-7.75 7-13a7 7 0 0 0-7-7Z" />
                                                </svg>
                                            </span> C-Line Ewet Housing Estate, Uyo, AKS</p>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
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

@stop
