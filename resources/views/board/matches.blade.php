<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SCOREKEEPER | MATCHES</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{ asset('css/pagination.css') }}">
    @include('layouts.common-css')
</head>

<body>
    @include('layouts.preloader')

    @include('layouts.header')

    <!-- main-area -->
    <main>



        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(img/slider/slider_img02-matches.jpg); background-position: bottom;">
            <div class="after-bg"><img src="{{ asset('img/bg/before-header-img.png') }}" alt="circle_left"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div style="padding-bottom: 30px;" class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2 style="color: #ffc010;">Matches</h2>
                                <div class="breadcrumb-wrap">

                                    {{-- <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Matches</li>
                                    </ol>
                                </nav> --}}
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- breadcrumb-area-end -->

        <!-- match-area -->
        <section id="match" class="match-area pb-90">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="section-title cta-title mb-50 pl-15">
                            <h2>Upcoming <span>Matches</span></h2>
                            <img src="img/bg/circle_left.png" alt="left" />
                        </div>
                    </div>
                </div>
                
                <a href="/scoreboard">
                    <div class="row align-items-center mb-30 vs-match-card">
                        <div class="col-lg-5">
                            <div class="team" style="background-color: #131035;">
                                <img style="width: 150px; padding: 10px;" src="{{ asset('img/matches/australia.png') }}" alt="left" />
                                <div class="text">
                                    <h3>Australia</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="match-time text-center">
                                <h1>VS</h1>
                                <h3 class="card-tag"
                                    style="background-color: rgb(9, 245, 9); padding: 5px; border-radius: 25px;">LIVE
                                </h3>
                                <h3 style="padding-top: 7px">111/5 || 5:2</h3>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="team2" style="background-color: #131035;">
                                <img style="width: 150px; padding: 10px; margin-left: 65%;" src="{{ asset('img/matches/sri-lanka.png') }}"
                                    alt="left" />
                                <div class="text">
                                    <h3>Sri Lanka</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/scoreboard">
                    <div class="row align-items-center mb-30 vs-match-card">
                        <div class="col-lg-5">
                            <div class="team" style="background-color: #131035;">
                                <img style="width: 150px; padding: 10px;" src="{{ asset('img/matches/india.png') }}" alt="left" />
                                <div class="text">
                                    <h3>India</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="match-time text-center">
                                <h1>VS</h1>
                                <h3 class="card-tag"
                                    style="background-color: rgb(9, 245, 9); padding: 5px; border-radius: 25px;">LIVE
                                </h3>
                                <h3 style="padding-top: 7px">201/5 || 25:2</h3>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="team2" style="background-color: #131035;">
                                <img style="width: 150px; padding: 10px; margin-left: 65%;" src="{{ asset('img/matches/pakistan.png') }}"
                                    alt="left" />
                                <div class="text">
                                    <h3>Pakistan</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/scoreboard">
                    <div class="row align-items-center mb-30 vs-match-card">
                        <div class="col-lg-5">
                            <div class="team" style="background-color: #131035;">
                                <img style="width: 150px; padding: 10px;" src="{{ asset('img/matches/australia.png') }}" alt="left" />
                                <div class="text">
                                    <h3>Australia</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="match-time text-center">
                                <h1>VS</h1>
                                <h3 class="card-tag"
                                    style="background-color: rgb(196, 236, 17); padding: 5px; border-radius: 25px;">
                                    PENDING</h3>
                                {{-- <h3>02-02-2023 @ 17:55</h3> --}}
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="team2" style="background-color: #131035;">
                                <img style="width: 150px; padding: 10px; margin-left: 65%;" src="{{ asset('img/matches/united-kingdom.png') }}"
                                    alt="left" />
                                <div class="text">
                                    <h3>United Kingdom</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <a href="/scoreboard">
                    <div class="row align-items-center mb-30 vs-match-card">
                        <div class="col-lg-5">
                            <div class="team" style="background-color: #131035;">
                                <img style="width: 150px; padding: 10px;" src="{{ asset('img/matches/india.png') }}"
                                    alt="left" />
                                <div class="text">
                                    <h3>India</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="match-time text-center">
                                <h1>VS</h1>
                                <h3 class="card-tag"
                                    style="background-color: rgb(21, 223, 230); padding: 5px; border-radius: 25px;">
                                    POSTPOND</h3>
                            </div>
                        </div>
                        <div class="col-lg-5">
                            <div class="team2" style="background-color: #131035;">
                                <img style="width: 150px; padding: 10px; margin-left: 65%;" src="{{ asset('img/matches/ireland.png') }}"
                                    alt="left" />
                                <div class="text">
                                    <h3>Ireland</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>

                <nav aria-label="Page navigation example">
                    <ul class="pagination-cus">

                        <li class="page-item-cus"><a class="page-link" href="#"><i class="fa-solid fa-angles-left"></i></a></li>
                        <li class="page-item-cus"><a class="page-link" href="#"><i class="fa-solid fa-angle-left"></i></a></li>
                        <li class="page-item-cus page-item-cus-selected"><a class="page-link" href="#">1</a></li>
                        <li class="page-item-cus"><a class="page-link" href="#">2</a></li>
                        <li class="page-item-cus"><a class="page-link" href="#">3</a></li>
                        <li class="page-item-cus"><a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a></li>
                        <li class="page-item-cus"><a class="page-link" href="#"><i class="fa-solid fa-angles-right"></i></a></li>

                    </ul>
                </nav>
            </div>


        </section>
        <!-- match-area-end -->

    </main>
    <!-- main-area-end -->
    @include('layouts.footer')


    @include('layouts.common-js')

</body>

</html>
