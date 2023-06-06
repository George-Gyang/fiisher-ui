@extends('layouts.default')

@section('content')


    <div class="container py-5 main_content">
        <div class="">
            <div class="card card_shadow border-0 col-md-5">
                <div class="card-body">
                    <h5 class="card-title text-center fw-bold fs-4"> Set date and time  for meet</h5>
                    <div class="my-4 px-5">
                        <form class="row g-3">
                            <div class="col-12">
                                <label for="inputEmail4" class="form-label fw-semibold">Date for meet</label>
                                <input type="date" class="form-control bg_ash" value="John" id="inputEmail4">
                            </div>
                            <div class="col-12">
                                <label for="inputPassword4" class="form-label fw-semibold">Time for meet</label>
                                <input type="time" class="form-control bg_ash" value="Doe" id="inputPassword4">
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
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>

@stop
