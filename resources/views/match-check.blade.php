@extends('layouts.default')

@section('content')


    <div class="container py-5 main_content">
        <div class="">
            <div class="card card_shadow border-0 col-md-5">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold fs-4"> Your 80% match </h5>
                    <div class="my-4 px-5">
                        <div id="carouselExampleIndicators" class="carousel slide">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <img src="{{ asset('images/lady-img.png') }}" class="img-fluid d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/lady-img.png') }}" class="img-fluid d-block w-100"
                                        alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="{{ asset('images/lady-img.png') }}" class="img-fluid d-block w-100"
                                        alt="...">
                                </div>
                            </div>
                        </div>
                        <div class="text-center my-3">
                            <p class="fw-bold fs-5">Prisca Johnson <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="green"
                                            d="m8.6 22.5l-1.9-3.2l-3.6-.8l.35-3.7L1 12l2.45-2.8l-.35-3.7l3.6-.8l1.9-3.2L12 2.95l3.4-1.45l1.9 3.2l3.6.8l-.35 3.7L23 12l-2.45 2.8l.35 3.7l-3.6.8l-1.9 3.2l-3.4-1.45l-3.4 1.45Zm2.35-6.95L16.6 9.9l-1.4-1.45l-4.25 4.25l-2.15-2.1L7.4 12l3.55 3.55Z" />
                                    </svg>
                                </span>
                            </p>
                            <p>25years</p>
                            <select id="inputState" class="form-elect fs-xsm border-0">
                                <option selected>Uyo, Nigeria</option>
                                <option>IK</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-6">
                        <div class="d-grid gap-2">
                            <button class="btn purp_border purp_text" type="button">Wait for 100% match</button>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="d-grid gap-2">
                            <button class="btn purp_bg text-light" type="button">Proceed with match</button>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
