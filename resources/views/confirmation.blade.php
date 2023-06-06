@extends('layouts.default')

@section('content')


    <div class="container py-5 main_content">
        <div class="">
            <div class="card card_shadow border-0 col-md-6">
                <div class="card-body">
                    <div class="my-4 px-5">
                        <div class="row my-3">
                            <div class="text-center">
                                <p class="text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="67" height="67"
                                        viewBox="0 0 1024 1024">
                                        <path fill="#7707cf"
                                            d="M512 64a448 448 0 1 1 0 896a448 448 0 0 1 0-896zm-55.808 536.384l-99.52-99.584a38.4 38.4 0 1 0-54.336 54.336l126.72 126.72a38.272 38.272 0 0 0 54.336 0l262.4-262.464a38.4 38.4 0 1 0-54.272-54.336L456.192 600.384z" />
                                    </svg>
                                </p>
                                <h3 class="fw-bold">Confirmation Received</h3>
                                <p class="fs-xsm fw-bold">We’ll notify you when your date has accepted your request</p>
                            </div>
                            <div class="d-grid gap-2 col-6 mx-auto mt-3">
                                <button class="btn purp_border purp_text fw-semibold" type="button">Go to home</button>
                              </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop
