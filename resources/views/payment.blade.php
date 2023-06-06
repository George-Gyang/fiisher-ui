@extends('layouts.default')

@section('content')


    <div class="container py-5 main_content">
        <div class="">
            <h3 class="text-dark fw-bold my-3"> My Payments</h3>
            <div class="row">
                <div class="card card_shadow border-0 col-md-10">
                    <div class="card-body px-md-5">
                        <table class="table table-responsive-md table-hover">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">Status</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Description</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 24 24">
                                                <path fill="#de4841"
                                                    d="M12 10a2 2 0 0 0-2 2a2 2 0 0 0 2 2c1.11 0 2-.89 2-2a2 2 0 0 0-2-2Z" />
                                            </svg></span> Declined</td>
                                    <td>₦5,000</td>
                                    <td>28 April 2023</td>
                                    <td> a date with Cynthia</td>
                                </tr>
                                <tr>
                                    <td><span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 24 24">
                                                <path fill="#66bd50"
                                                    d="M12 10a2 2 0 0 0-2 2a2 2 0 0 0 2 2c1.11 0 2-.89 2-2a2 2 0 0 0-2-2Z" />
                                            </svg></span> Success</td>
                                    <td>₦5,000</td>
                                    <td>28 April 2023</td>
                                    <td>Purchased Premium feature</td>
                                </tr>
                                <tr>
                                    <td><span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 24 24">
                                                <path fill="#66bd50"
                                                    d="M12 10a2 2 0 0 0-2 2a2 2 0 0 0 2 2c1.11 0 2-.89 2-2a2 2 0 0 0-2-2Z" />
                                            </svg></span> Success</td>
                                    <td>₦5,000</td>
                                    <td>28 April 2023</td>
                                    <td>Purchased Premium feature</td>
                                </tr>
                                <tr>
                                    <td> <span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 24 24">
                                                <path fill="#ebbc46"
                                                    d="M12 10a2 2 0 0 0-2 2a2 2 0 0 0 2 2c1.11 0 2-.89 2-2a2 2 0 0 0-2-2Z" />
                                            </svg></span> Pending</td>
                                    <td>₦5,000</td>
                                    <td>28 April 2023</td>
                                    <td>Booked a date</td>
                                </tr>
                                <tr>
                                    <td> <span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 24 24">
                                                <path fill="#de4841"
                                                    d="M12 10a2 2 0 0 0-2 2a2 2 0 0 0 2 2c1.11 0 2-.89 2-2a2 2 0 0 0-2-2Z" />
                                            </svg></span> Declined</td>
                                    <td>₦5,000</td>
                                    <td>28 April 2023</td>
                                    <td> a date with Cynthia</td>
                                </tr>
                                <tr>
                                    <td><span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 24 24">
                                                <path fill="#66bd50"
                                                    d="M12 10a2 2 0 0 0-2 2a2 2 0 0 0 2 2c1.11 0 2-.89 2-2a2 2 0 0 0-2-2Z" />
                                            </svg></span> Success</td>
                                    <td>₦5,000</td>
                                    <td>28 April 2023</td>
                                    <td>Purchased Premium feature</td>
                                </tr>
                                <tr>
                                    <td><span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 24 24">
                                                <path fill="#66bd50"
                                                    d="M12 10a2 2 0 0 0-2 2a2 2 0 0 0 2 2c1.11 0 2-.89 2-2a2 2 0 0 0-2-2Z" />
                                            </svg></span> Success</td>
                                    <td>₦5,000</td>
                                    <td>28 April 2023</td>
                                    <td>Purchased Premium feature</td>
                                </tr>
                                <tr>
                                    <td> <span><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40"
                                                viewBox="0 0 24 24">
                                                <path fill="#ebbc46"
                                                    d="M12 10a2 2 0 0 0-2 2a2 2 0 0 0 2 2c1.11 0 2-.89 2-2a2 2 0 0 0-2-2Z" />
                                            </svg></span> Pending</td>
                                    <td>₦5,000</td>
                                    <td>28 April 2023</td>
                                    <td>Booked a date</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
