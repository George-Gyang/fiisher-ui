@extends('layouts.default')

@section('content')


    <div class="container py-5 main_content">
        <div class="">
            <div class="row">
                <div class="card card_shadow border-0 col-md-9">
                    <div class="card-body px-5">
                        <h5 class="card-title text-center fw-bold fs-4">We would love to hear from you
                            Get in touch</h5>
                        <div class="row">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label fw-semibold">Your full name</label>
                                    <input type="text" class="form-control bg_ash" value="John" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label fw-semibold">Your Email address</label>
                                    <input type="email" class="form-control bg_ash" value="@johndoe" id="inputPassword4">
                                </div>
                                <div class="col-12">
                                    <label for="inputPassword4" class="form-label fw-semibold">Subject</label>
                                    <p class="fs-xsm text_ash">A title for your feedback</p>
                                    <input type="email" class="form-control bg_ash" value="@johndoe" id="inputPassword4">
                                </div>
                                <div class="col-12">
                                    <label for="floatingTextarea3" class="fw-semibold">What can you say about
                                        Fiishers?</label>
                                    <p class="fs-xsm text_ash">Your feedback would help us provide you with improved
                                        services</p>
                                    <div class="form-floating">
                                        <textarea class="form-control bg_ash" aria-valuetext="" placeholder="25, Nkemba Street, Uyo" id="floatingTextarea3"
                                            style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <p class="fw-semibold"> How would you rate Fiishers?</p>
                                    <div class="d-flex">
                                        <div class="me-2">
                                            <a class="text-center" href="">
                                                <div class="emojis"> <img src="{{ asset('images/emoji/vpoor.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </a>
                                            <p class="fs-xsm">Very Poor</p>
                                        </div>
                                        <div class="me-2">
                                            <a class="text-center" href="">
                                                <div class="emojis"> <img src="{{ asset('images/emoji/poor.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </a>
                                            <p class="fs-xsm">Poor</p>
                                        </div>
                                        <div class="me-2">
                                            <a class="text-center" href="">
                                                <div class="emojis"> <img src="{{ asset('images/emoji/fair.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </a>
                                            <p class="fs-xsm">Fair</p>
                                        </div>
                                        <div class="me-2">
                                            <a class="text-center" href="">
                                                <div class="emojis"> <img src="{{ asset('images/emoji/good.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </a>
                                            <p class="fs-xsm">Good</p>
                                        </div>
                                        <div class="me-2">
                                            <a class="text-center" href="">
                                                <div class="emojis"> <img src="{{ asset('images/emoji/vgood.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </a>
                                            <p class="fs-xsm">Very Good</p>
                                        </div>
                                        <div class="me-2">
                                            <a class="text-center" href="">
                                                <div class="emojis"> <img src="{{ asset('images/emoji/excellent.png') }}" class="img-fluid"
                                                        alt="">
                                                </div>
                                            </a>
                                            <p class="fs-xsm">Excellent</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="d-grid gap-2 col-6 mx-auto">
                                        <button class="btn purp_bg text-light rounded-pill primary_gradient"
                                            type="button">Send Message <span><svg xmlns="http://www.w3.org/2000/svg"
                                                    width="20" height="20" viewBox="0 0 24 24">
                                                    <path fill="white" d="m2 21l21-9L2 3v7l15 2l-15 2v7Z" />
                                                </svg></span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
