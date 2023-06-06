  @extends('layouts.default')

  @section('content')


      <div class="container py-5 main_content">
          <div class="">
              <div class="card border-0 col-md-6" >
                  <div class="card-body">
                      <h5 class="card-title text-center fw-bold fs-4">We’ve found 80% match <img src="{{ asset('images/heart-icon.png') }}" class="img-fluid png" alt=""></h5>
                      <div class="position-relative my-3">
                          <div class="outer_circle m-auto ">
                              <div class="inner_circle position-absolute top-50 start-50 translate-middle">
                                <div class="m-4 rounded-circle">
                                    <img src="{{ asset('images/profile1.png') }}" class="img-fluid" alt="">
                                </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-12">
                          <button type="submit" class="btn purp_text purp_border px-4">I'll wwait for 100% match</button>
                          <button type="submit" class="btn purp_bg text-light me-3 px-4">Proceed with match</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

  @stop
