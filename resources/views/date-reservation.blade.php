@extends('layouts.default')

@section('content')
    <div class="container py-5 main_content">
        <div class="">
            <div>
                <h4 class="text-dark fw-bold mb-3">Make reservations for your date</h4>
            </div>
            <div class="col-md-8">
                <form class="row g-3">
                    <div class="col-md-6">
                        <label for="inputState" class="form-label fw-semibold">Type of reservation</label>
                        <select id="inputState" class="form-select">
                            <option selected>Food</option>
                            <option>Adamawa State</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label fw-semibold">Food Option</label>
                        <select id="inputState" class="form-select">
                            <option selected>Jollof rice with Grilled Fish</option>
                            <option>...</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label fw-semibold">Choice of drink</label>
                        <select id="inputState" class="form-select">
                            <option selected>Non-alcohol</option>
                            <option>Ghanian</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="inputState" class="form-label fw-semibold">Type of Drink</label>
                        <select id="inputState" class="form-select">
                            <option selected>Smoothie</option>
                            <option>Ice Cream</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="floatingTextarea3" class="fw-semibold mb-3">Special food/drink order</label>
                        <div class="form-floating">
                            <textarea class="form-control" aria-valuetext="" placeholder="Enter special order" id="floatingTextarea3"
                                style="height: 100px"></textarea>
                        </div>
                    </div>
                    <div class="col-12 mt-5">
                        <button type="submit" class="btn purp_bg text-light me-3 px-4">Submit</button>
                        <button type="submit" class="btn purp_text purp_border px-4">Cancel</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
@stop
