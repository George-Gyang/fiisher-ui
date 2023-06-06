@extends('layouts.default')

@section('content')

    <div>
        <div class="container-fluid">
            <div class="container py-5 main_content">
                <div class="d-flex align-items-center">
                    <p class="h6 fw-semibold mb-0 fs-2 text-dark me-3">Update Profile</p>
                    <div class="position-relative">
                        <div class="d-flex">
                            <button class=" border border-end-0 rounded-start-pill purp_bg px-5 py-3"></button>
                            <button class=" btn-light border-0 rounded-0 rounded-end-circle px-4 py-3"></button>
                        </div>
                        <p class="text-light position-absolute top-50 start-50 translate-middle text-nowrap fw-semibold">65%
                            Comp<span class="purp_text">lete</span></p>
                    </div>
                </div>
                <div class="my-3">
                    <div class="d-flex">
                        <div class="px-1">
                            <div class="margin_auto position-relative">
                                <img src="{{ asset('images/profile3.png') }}" alt="" class="img-fluid mx-auto">
                                <a href="" class="nav-link">
                                    <div class="photo_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16">
                                            <path fill="#fff" fill-rule="evenodd"
                                                d="M13 2.5H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5ZM3 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H3Zm9 9.857L9.5 8l-2.476 2.83L5.5 9L4 10.8V12h8v-1.143ZM6.5 8a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <p class="fs-sm text-secondary my-2">Click edit icon to change photo</p>
                        </div>
                        <div class="px-1">
                            <div class="margin_auto position-relative">
                                <img src="{{ asset('images/profile2.png') }}" alt="" class="img-fluid mx-auto">
                                <a href="" class="nav-link">
                                    <div class="photo_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 16 16">
                                            <path fill="#fff" fill-rule="evenodd"
                                                d="M13 2.5H3a.5.5 0 0 0-.5.5v10a.5.5 0 0 0 .5.5h10a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5ZM3 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2H3Zm9 9.857L9.5 8l-2.476 2.83L5.5 9L4 10.8V12h8v-1.143ZM6.5 8a1.5 1.5 0 1 0 0-3a1.5 1.5 0 0 0 0 3Z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <p class="fs-sm text-secondary my-2">Click edit icon to change photo</p>
                        </div>
                        <div class="px-1">
                            <div class="margin_auto position-relative">
                                <img src="{{ asset('images/profile1.png') }}" alt="" class="img-fluid mx-auto">
                                <a href="" class="nav-link">
                                    <div class="photo_icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            viewBox="0 0 24 24">
                                            <path fill="white"
                                                d="M9.5 15.584V8.416a.5.5 0 0 1 .77-.42l5.576 3.583a.5.5 0 0 1 0 .842l-5.576 3.584a.5.5 0 0 1-.77-.42Z" />
                                            <path fill="white"
                                                d="M1 12C1 5.925 5.925 1 12 1s11 4.925 11 11s-4.925 11-11 11S1 18.075 1 12Zm11-9.5A9.5 9.5 0 0 0 2.5 12a9.5 9.5 0 0 0 9.5 9.5a9.5 9.5 0 0 0 9.5-9.5A9.5 9.5 0 0 0 12 2.5Z" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                            <p class="fs-sm text-secondary my-2">Click edit icon to change video</p>
                        </div>
                        <div class="px-1">
                            <div class="margin_auto position-relative">
                                <div class="bg-light add_icon">
                                    <p class="bg-light mb-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35"
                                            viewBox="0 0 20 20">
                                            <path fill="#999"
                                                d="M11 9V5H9v4H5v2h4v4h2v-4h4V9h-4zm-1 11a10 10 0 1 1 0-20a10 10 0 0 1 0 20z" />
                                        </svg>
                                    </p>
                                </div>
                            </div>
                            <p class="fs-sm text-secondary my-2">Click edit icon to change video</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between">
                        <a href="/" class="nav-link profile_nav active">
                            <p class="fw-semibold fs-4">Profile Information</p>
                        </a>
                        <a href="/contact-info" class="nav-link profile_nav ">
                            <p class="fw-semibold fs-4">Contact Information</p>
                        </a>
                        <a href="/match-info" class="nav-link profile_nav ">
                            <p class="fw-semibold fs-4">Match Characteristics</p>
                        </a>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label fw-semibold">Phone Number</label>
                                    <input type="text" class="form-control" value="08056143209" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label fw-semibold">Email Address</label>
                                    <input type="email" class="form-control" value="johndoe235@gmail.com" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label fw-semibold">Contact Address</label>
                                    <input type="text" class="form-control" value="25, Nkemba Street, Uyo" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label fw-semibold">Facebook</label>
                                    <input type="text" class="form-control" value="John Doe" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label fw-semibold">Instagram</label>
                                    <input type="text" class="form-control" value="@john_doe" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label fw-semibold">Twitter</label>
                                    <input type="text" class="form-control" value="@johndoe" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label fw-semibold">LinkedIn</label>
                                    <input type="text" class="form-control" value="John Doe" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label fw-semibold">Website</label>
                                    <input type="text" class="form-control" value="www.bridgas.com" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label fw-semibold">Next of Kin</label>
                                    <input type="text" class="form-control" value="James Doe" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label fw-semibold">Next of Kin Relationship</label>
                                    <input type="text" class="form-control" value="Brother" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label fw-semibold">Next of Kin Contact</label>
                                    <input type="text" class="form-control" value="09038769840" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label fw-semibold">Next of Kin Address</label>
                                    <input type="text" class="form-control" value="25, Nkemba Street, Uyo, AKS." id="inputPassword4">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn purp_bg text-light me-3 px-4">Update</button>
                                    <button type="submit" class="btn purp_text purp_border px-4">Clear All</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
