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
                        <a href="match-info" class="nav-link profile_nav ">
                            <p class="fw-semibold fs-4">Match Characteristics</p>
                        </a>
                    </div>
                    <div class="ro">
                        <div class="col-md-10">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label fw-semibold">First Name</label>
                                    <input type="text" class="form-control" value="John" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label fw-semibold">Last Name</label>
                                    <input type="text" class="form-control" value="Doe" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label fw-semibold">Nickname</label>
                                    <input type="text" class="form-control" value="Johnny" id="inputCity">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label fw-semibold">Occupation</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Financial Analyst</option>
                                        <option>Accountant</option>
                                        <option>Doctor</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputCity" class="form-label fw-semibold">Date of Birth</label>
                                    <input type="date" class="form-control" value="02-03-1988" id="inputCity">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label fw-semibold">Sex</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="floatingTextarea2" class="fw-semibold">Brief Bio</label>
                                    <p class="fs-xsm text_ash">Give a brief description of yourself</p>
                                    <div class="form-floating">
                                        <textarea class="form-control"
                                            placeholder="Hi there, I'm John. I'm a financial
                                        analyst by profession and I love my job. I enjoy analyzing market trends and helping my clients make 
                                        informed decisions. When I'm not crunching numbers, I like to unwind by playing soccer or going for a 
                                        jog. I'm a big foodie and I love trying out new restaurants and cuisines. I'm looking for someone who is
                                         independent, has a good sense of humor, and is passionate about their work or hobbies. Let's chat and see
                                          where things go!"
                                            style="height: 100px" id="floatingTextarea2"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="floatingTextarea3" class="fw-semibold">Address</label>
                                    <p class="fs-xsm text_ash">Your address is not visible to your matches</p>
                                    <div class="form-floating">
                                        <textarea class="form-control" aria-valuetext="" placeholder="25, Nkemba Street, Uyo" id="floatingTextarea3"
                                            style="height: 100px"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label fw-semibold">State</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Akwa Ibom State</option>
                                        <option>Adamawa State</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label fw-semibold">Local Govt. Origin*</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Ikono</option>
                                        <option>Ikot Ikpene</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label fw-semibold">City</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Uyo</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label fw-semibold">Status</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Single</option>
                                        <option>Complicated</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label fw-semibold">Nationality</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Nigerian</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label fw-semibold">Religion</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Christianity</option>
                                        <option>Islam</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label fw-semibold">Educational Level*</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>MA Accounting</option>
                                        <option>Bsc Software Engineering</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label fw-semibold">Genotype</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>AA</option>
                                        <option>AS</option>
                                    </select>
                                </div>
                                <div>
                                    <p class="fw-semibold">Others</p>
                                    <div class="d-md-flex justify-content-between">
                                        <div class="me-2">
                                            <label for="inputPassword4" class="form-label fw-semibold">Height</label>
                                            <input type="text" class="form-control" value="6ft"
                                                id="inputPassword4">
                                        </div>
                                        <div class="me-2">
                                            <label for="inputPassword4" class="form-label fw-semibold">Weight</label>
                                            <input type="text" class="form-control" value="70kg"
                                                id="inputPassword4">
                                        </div>
                                        <div class="me-2">
                                            <label for="inputState" class="form-label fw-semibold">Skin Color</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Chocolate</option>
                                                <option>AS</option>
                                            </select>
                                        </div>
                                        <div class="me-2">
                                            <label for="inputState" class="form-label fw-semibold">Hair Color</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Dark</option>
                                                <option>AS</option>
                                            </select>
                                        </div>
                                        <div class="me-2">
                                            <label for="inputState" class="form-label fw-semibold">Face Shape</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Rounded with beards</option>
                                                <option>AS</option>
                                            </select>
                                        </div>
                                        <div>
                                            <label for="inputState" class="form-label fw-semibold">Hair Style</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Dreaded</option>
                                                <option>AS</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="d-md-flex my-3">
                                        <div class="me-3">
                                            <label for="inputState" class="form-label fw-semibold">Hair Style</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Dreaded</option>
                                                <option>AS</option>
                                            </select>
                                        </div>
                                        <div>
                                            <div class="d-block mb-2">
                                                <label class="fw-semibold">Hobbies</label>
                                            </div>
                                            <button class="btn m-1 mt-md-0 text-dark btn-outline-secondary">Playin Soccer
                                                X</button>
                                            <button class="btn m-1 mt-md-0 text-dark btn-outline-secondary">
                                                Playing table tennis X</button>
                                            <button class="btn m-1 mt-md-0 text-dark btn-outline-secondary">Running
                                                Marathon X</button>
                                            <button class="btn m-1 mt-md-0 text-dark btn-outline-secondary">Weight Lifting
                                                X</button>
                                        </div>
                                    </div>
                                    <div class="d-md-flex">
                                        <div class="me-2">
                                            <label for="inputState" class="form-label fw-semibold">Piercing</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Multiple ear-piercing</option>
                                                <option>Single ear-piercing</option>
                                            </select>
                                        </div>
                                        <div class="me-2">
                                            <label for="inputState" class="form-label fw-semibold">Tatoos</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>No</option>
                                                <option>Yes</option>
                                            </select>
                                        </div>
                                        <div class="me-2">
                                            <label for="inputState" class="form-label fw-semibold">Smoking</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>None Smoker</option>
                                                <option>AS</option>
                                            </select>
                                        </div>
                                        <div class="me-2">
                                            <label for="inputState" class="form-label fw-semibold">Kids</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>None</option>
                                                <option>AS</option>
                                            </select>
                                        </div>
                                        <div class="me-2">
                                            <label for="inputState" class="form-label fw-semibold">Body size</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Slim</option>
                                                <option>Macho</option>
                                            </select>
                                        </div>
                                        <div class="me-2">
                                            <label for="inputState" class="form-label fw-semibold">Lip color</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Red</option>
                                                <option>Brown</option>
                                            </select>
                                        </div>
                                        <div class="me-2">
                                            <label for="inputState" class="form-label fw-semibold">Nose shape</label>
                                            <select id="inputState" class="form-select">
                                                <option selected>Small</option>
                                                <option>Wide</option>
                                            </select>
                                        </div>
                                    </div>
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
