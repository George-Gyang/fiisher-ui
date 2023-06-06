@extends('layouts.default')

@section('content')


    <div class="container py-5 main_content">
        <div class="">
            <div class="row">
                <div class="card card_shadow border-0 col-md-8">
                    <div class="card-body">
                        <h5 class="card-title text-center fw-bold fs-4"> invite a Date</h5>
                        <div class="row">
                            <form class="row g-3">
                                <div class="col-md-6">
                                    <label for="inputEmail4" class="form-label fw-semibold">Date for meet</label>
                                    <input type="date" class="form-control bg_ash" value="John" id="inputEmail4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label fw-semibold">Time for meet</label>
                                    <input type="time" class="form-control bg_ash" value="Doe" id="inputPassword4">
                                </div>
                                <div class="col-md-6">
                                    <label for="inputState" class="form-label fw-semibold">Venue for meet</label>
                                    <select id="inputState" class="form-select bg_ash">
                                        <option selected>Select Restaurant</option>
                                        <option>Ikot Ikpene</option>
                                    </select>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputPassword4" class="form-label fw-semibold">Location for meet</label>
                                    <input type="text" class="form-control bg_ash"
                                        value="C-line Ewet Housing Estate, Uyo" id="inputPassword4">
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
                <div class="col-md-3">
                    <div>
                        <div class=" ms-3 list-group">
                            <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">
                                <span class="d-inline-block me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 256 256">
                                        <path fill="currentColor"
                                            d="M128 24a104 104 0 1 0 104 104A104.11 104.11 0 0 0 128 24Zm-26.37 144h52.74C149 186.34 140 202.87 128 215.89c-12-13.02-21-29.55-26.37-47.89ZM98 152a145.72 145.72 0 0 1 0-48h60a145.72 145.72 0 0 1 0 48Zm-58-24a87.61 87.61 0 0 1 3.33-24h38.46a161.79 161.79 0 0 0 0 48H43.33A87.61 87.61 0 0 1 40 128Zm114.37-40h-52.74C107 69.66 116 53.13 128 40.11c12 13.02 21 29.55 26.37 47.89Zm19.84 16h38.46a88.15 88.15 0 0 1 0 48h-38.46a161.79 161.79 0 0 0 0-48Zm32.16-16h-35.43a142.39 142.39 0 0 0-20.26-45a88.37 88.37 0 0 1 55.69 45ZM105.32 43a142.39 142.39 0 0 0-20.26 45H49.63a88.37 88.37 0 0 1 55.69-45ZM49.63 168h35.43a142.39 142.39 0 0 0 20.26 45a88.37 88.37 0 0 1-55.69-45Zm101.05 45a142.39 142.39 0 0 0 20.26-45h35.43a88.37 88.37 0 0 1-55.69 45Z" />
                                    </svg></span> Date History</a>
                            <a href="#" class="list-group-item list-group-item-action border-0">
                                <span class="d-inline-block me-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                        viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M19 6.5h-3v-1a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v1H5a3 3 0 0 0-3 3v9a3 3 0 0 0 3 3h14a3 3 0 0 0 3-3v-9a3 3 0 0 0-3-3Zm-9-1a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v1h-4Zm10 13a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V13a21.71 21.71 0 0 0 8 1.53A21.75 21.75 0 0 0 20 13Zm0-7.69a19.89 19.89 0 0 1-16 0V9.5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1Z" />
                                    </svg>
                                </span> Reminder
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0">
                                <span class="d-inline-block me-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 256 256"><path fill="currentColor" d="M239.2 97.29a16 16 0 0 0-13.81-11L166 81.17l-23.28-55.36a15.95 15.95 0 0 0-29.44 0L90.07 81.17l-59.46 5.15a16 16 0 0 0-9.11 28.06l45.11 39.42l-13.52 58.54a16 16 0 0 0 23.84 17.34l51-31l51.11 31a16 16 0 0 0 23.84-17.34l-13.51-58.6l45.1-39.36a16 16 0 0 0 4.73-17.09Zm-15.22 5l-45.1 39.36a16 16 0 0 0-5.08 15.71L187.35 216l-51.07-31a15.9 15.9 0 0 0-16.54 0l-51 31l13.46-58.6a16 16 0 0 0-5.08-15.71L32 102.35a.37.37 0 0 1 0-.09l59.44-5.14a16 16 0 0 0 13.35-9.75L128 32.08l23.2 55.29a16 16 0 0 0 13.35 9.75l59.45 5.14v.07Z"/></svg>
                                </span> Feedback
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0">
                                <span class="d-inline-block me-3"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M16.5 2.25a3.25 3.25 0 0 0-3.2 3.824L8.57 9.386a.757.757 0 0 0-.068.053a3.25 3.25 0 1 0 0 5.121a.755.755 0 0 0 .068.054l4.73 3.312a3.25 3.25 0 1 0 .617-1.4l-4.479-3.135c.2-.422.312-.893.312-1.391s-.112-.97-.312-1.391l4.48-3.136A3.25 3.25 0 1 0 16.5 2.25ZM14.75 5.5a1.75 1.75 0 1 1 3.5 0a1.75 1.75 0 0 1-3.5 0ZM6.5 10.25a1.75 1.75 0 1 0 0 3.5a1.75 1.75 0 0 0 0-3.5Zm10 6.5a1.75 1.75 0 1 0 0 3.5a1.75 1.75 0 0 0 0-3.5Z" clip-rule="evenodd"/></svg>
                                </span> share Plan
                            </a>
                            <a href="#" class="list-group-item list-group-item-action border-0">
                                <span class="d-inline-block me-3"><svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 3v2m0 16v-8m0-8h12l-2 4l2 4H8m0-8v8"/></svg>
                                </span> Report
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
