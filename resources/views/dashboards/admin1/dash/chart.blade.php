<div class="row">
    <div class="col-xl-3 col-xxl-4">
        <div class="row">
            <div class="col-xl-12 col-sm-6">
                <div class="card text-center">
                    <div class="card-body">
                        <div id="radialChart" class="radialChart"></div>
                        <h2>785</h2>
                        <span class="fs-16 text-black">Available Room Today</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-12 col-sm-6">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h4 class="mb-0">Booked Room Today</h4>
                    </div>
                    <div class="card-body">
                        <div class="progress mb-4" style="height:13px;">
                            <div class="progress-bar gradient-5 progress-animated" style="width: 55%; height:13px;" role="progressbar">
                                <span class="sr-only">45% Complete</span>
                            </div>
                        </div>
                        <div class="progress mb-4" style="height:13px;">
                            <div class="progress-bar gradient-6 progress-animated" style="width: 70%; height:13px;" role="progressbar">
                                <span class="sr-only">45% Complete</span>
                            </div>
                        </div>
                        <div class="progress default-progress" style="height:13px;">
                            <div class="progress-bar gradient-7 progress-animated" style="width: 50%; height:13px;" role="progressbar">
                                <span class="sr-only">45% Complete</span>
                            </div>
                        </div>
                        <div class="d-flex mt-4 progress-bar-legend align-items-center justify-content-between">
                            <div class="d-flex">
                                <span class="marker gradient-5"></span>
                                <div>
                                    <p class="status">Pending</p>
                                    <span class="result">234</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span class="marker gradient-6"></span>
                                <div>
                                    <p class="status">Done</p>
                                    <span class="result">65</span>
                                </div>
                            </div>
                            <div class="d-flex">
                                <span class="marker gradient-7"></span>
                                <div>
                                    <p class="status">Finish</p>
                                    <span class="result">763</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-9 col-xxl-8">
        <div class="card">
            <div class="card-header border-0 d-sm-flex d-block">
                <div class="me-auto mb-sm-0 mb-3">
                    <h4 class="card-title mb-2">Reservation Statistic</h4>
                    <span>Lorem ipsum dolor sit amet</span>
                </div>
                <div class="d-flex justify-content-between">
                    <div class="d-flex me-5">
                        <h3 class="mb-0 me-2">549</h3>
                        <span>Check In</span>
                    </div>
                    <div class="d-flex me-3">
                        <h3 class="mb-0 me-2">327</h3>
                        <span>Check Out</span>
                    </div>
                    <div class="dropdown">
                        <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div id="reservationChart" class="reservationChart"></div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="card">
            <div class="card-body booking-calender  pb-0">
                <input type='text' class="form-control d-none" id='datetimepicker'>
            </div>
            <div class="card-body py-0">
                <div class="d-flex justify-content-between mb-3">
                    <h4 class="card-title">Newest Booking</h4>
                    <a href="javascript:void(0);" class="btn-link">More</a>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-sm-6">
                        <div class="dz-image-bx rounded">
                            <div class="dz-media active me-3">
                                <img class="rounded" src="{{ asset('innap/images/avatar/1.jpg') }}" alt="">
                            </div>
                            <div class="dz-info">
                                <h5>Samantha Humble</h5>
                                <span class="text-primary">October 3th, 2020</span>
                                <div class="d-flex flex-wrap mt-3">
                                    <span class="me-auto pe-3">Room A-21</span>
                                    <span>3-5 Person</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6">
                        <div class="dz-image-bx rounded">
                            <div class="dz-media active me-3">
                                <img class="rounded" src="{{ asset('innap/images/avatar/2.jpg') }}" alt="">
                            </div>
                            <div class="dz-info">
                                <h5>Louise Marquee</h5>
                                <span class="text-primary">October 3th, 2020</span>
                                <div class="d-flex flex-wrap mt-3">
                                    <span class="me-auto pe-3">Room A-21</span>
                                    <span>3-5 Person</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6">
                        <div class="dz-image-bx rounded">
                            <div class="dz-media me-3">
                                <img class="rounded" src="{{ asset('innap/images/avatar/3.jpg') }}" alt="">
                            </div>
                            <div class="dz-info">
                                <h5>Richard Smile</h5>
                                <span class="text-primary">October 3th, 2020</span>
                                <div class="d-flex flex-wrap mt-3">
                                    <span class="me-auto pe-3">Room A-21</span>
                                    <span>3-5 Person</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-sm-6">
                        <div class="dz-image-bx rounded">
                            <div class="dz-media me-3">
                                <img class="rounded" src="{{ asset('innap/images/avatar/4.jpg') }}" alt="">
                            </div>
                            <div class="dz-info">
                                <h5>Bella Yen</h5>
                                <span class="text-primary">October 3th, 2020</span>
                                <div class="d-flex flex-wrap mt-3">
                                    <span class="me-auto pe-3">Room A-21</span>
                                    <span>3-5 Person</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-6">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-6 d-flex align-items-center col-sm-6 mb-sm-0 mb-3">
                                <div class="me-4">
                                    <span class="donut" data-peity='{ "fill": ["var(--primary)", "rgba(246, 246, 246)"],   "innerRadius": 45, "radius": 10}'>6/8</span>
                                </div>
                                <div>
                                    <h2>70%</h2>
                                    <span class="fs-18">Check In</span>
                                </div>
                            </div>
                            <div class="col-xl-6 d-flex align-items-center col-sm-6">
                                <div class="me-4">
                                    <span class="donut" data-peity='{ "fill": ["#FFC368", "rgba(246, 246, 246)"],   "innerRadius": 45, "radius": 10}'>2/8</span>
                                </div>
                                <div>
                                    <h2>30%</h2>
                                    <span class="fs-18">Check Out</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0">
                        <h4 class="card-title">Latest Customer Review</h4>
                        <div class="dropdown">
                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 13C12.5523 13 13 12.5523 13 12C13 11.4477 12.5523 11 12 11C11.4477 11 11 11.4477 11 12C11 12.5523 11.4477 13 12 13Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 6C12.5523 6 13 5.55228 13 5C13 4.44772 12.5523 4 12 4C11.4477 4 11 4.44772 11 5C11 5.55228 11.4477 6 12 6Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M12 20C12.5523 20 13 19.5523 13 19C13 18.4477 12.5523 18 12 18C11.4477 18 11 18.4477 11 19C11 19.5523 11.4477 20 12 20Z" stroke="#575757" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                                <a class="dropdown-item" href="javascript:void(0);">Edit</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body customer-review-bx p-0 dz-scroll loadmore-content" id="customerReviewContent">
                        <div class="dz-review-bx">
                            <img class="dz-media me-4" src="{{ asset('innap/images/avatar/1.jpg') }}" alt="">
                            <div class="dz-info">
                                <div class="dz-name mb-3">
                                    <div>
                                        <h6 class="title mb-1">Ali Muzair</h6>
                                        <span class="date text-black op8">Posted on 26/04/2020, 12:42 AM</span>
                                    </div>
                                    <ul class="star-review">
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="dz-footer">
                                    <p class="text-black op8 mb-sm-0 mb-3 me-4">I have been there many times.Rooms ,Food and Service are excellent.we did lots of Excursions and all the places are from the Hotel reachable. we visited Long Waterfall and  was very helpful and excellent</p>
                                    <a class="review-icon rounded-circle bg-success text-white me-3" href="javascript:void(0);"><i class="far fa-check-circle"></i></a>
                                    <a class="review-icon rounded-circle bg-danger text-white" href="javascript:void(0);"><i class="far fa-times-circle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="dz-review-bx">
                            <img class="dz-media me-4" src="{{ asset('innap/images/avatar/2.jpg') }}" alt="">
                            <div class="dz-info">
                                <div class="dz-name mb-3">
                                    <div>
                                        <h6 class="title mb-1">Keanu Repes</h6>
                                        <span class="date text-black op8">Posted on 26/04/2020, 12:42 AM</span>
                                    </div>
                                    <ul class="star-review">
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="dz-footer">
                                    <p class="text-black op8 mb-sm-0 mb-3 me-4">I have been there many times.Rooms ,Food and Service are excellent.we did lots of Excursions and all the places are from the Hotel reachable. we visited Long Waterfall and  was very helpful and excellent</p>
                                    <a class="review-icon rounded-circle bg-success text-white me-3" href="javascript:void(0);"><i class="far fa-check-circle"></i></a>
                                    <a class="review-icon rounded-circle bg-danger text-white" href="javascript:void(0);"><i class="far fa-times-circle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="dz-review-bx">
                            <img class="dz-media me-4" src="{{ asset('innap/images/avatar/3.jpg') }}" alt="">
                            <div class="dz-info">
                                <div class="dz-name mb-3">
                                    <div>
                                        <h6 class="title mb-1">Chintya Clara</h6>
                                        <span class="date text-black op8">Posted on 26/04/2020, 12:42 AM</span>
                                    </div>
                                    <ul class="star-review">
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="dz-footer">
                                    <p class="text-black op8 mb-sm-0 mb-3 me-4">I have been there many times.Rooms ,Food and Service are excellent.we did lots of Excursions and all the places are from the Hotel reachable. we visited Long Waterfall and  was very helpful and excellent</p>
                                    <a class="review-icon rounded-circle bg-success text-white me-3" href="javascript:void(0);"><i class="far fa-check-circle"></i></a>
                                    <a class="review-icon rounded-circle bg-danger text-white " href="javascript:void(0);"><i class="far fa-times-circle"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="dz-review-bx">
                            <img class="dz-media me-4" src="{{ asset('innap/images/avatar/1.jpg') }}" alt="">
                            <div class="dz-info">
                                <div class="dz-name mb-3">
                                    <div>
                                        <h6 class="title mb-1">Ali Muzair</h6>
                                        <span class="date text-black op8">Posted on 26/04/2020, 12:42 AM</span>
                                    </div>
                                    <ul class="star-review">
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star orange"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>
                                <div class="dz-footer">
                                    <p class="text-black op8 mb-sm-0 mb-3 me-4">I have been there many times.Rooms ,Food and Service are excellent.we did lots of Excursions and all the places are from the Hotel reachable. we visited Long Waterfall and  was very helpful and excellent</p>
                                    <a class="review-icon rounded-circle bg-success text-white me-3" href="javascript:void(0);"><i class="far fa-check-circle"></i></a>
                                    <a class="review-icon rounded-circle bg-danger text-white" href="javascript:void(0);"><i class="far fa-times-circle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer style-1 border-0 pt-0 text-center">
                        <a href="javascript:void(0);" class="dz-load-more fas fa-chevron-down" id="customerReview" rel="ajax/customer-review.html"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>