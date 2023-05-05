<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SCOREKEEPER | SCOREBOARD</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Place favicon.ico in the root directory -->
    @include('layouts.common-css')
</head>

<body>
    @include('layouts.preloader')

    @include('layouts.header')

    <!-- main-area -->

    <main>

        <!-- breadcrumb-area -->
        <section class="breadcrumb-area d-flex align-items-center"
            style="background-image:url(img/slider/slider_img03.jpg); min-height: 350px;">
            <div class="after-bg"><img src="{{ asset('img/bg/before-header-img.png') }}" alt="circle_left"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div style="padding-bottom: 170px;" class="breadcrumb-wrap text-left">
                            <div class="breadcrumb-title">
                                <h2 style="color: #ffffff;">Scoreboard</h2>
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
        <section id="match" class="match-area pb-120">
            <div class="container">
                <div class="row mb-30">
                    <div class="col-lg-12">
                        <div class="live-team">

                            {{-- <img src="img/slider/4822.jpg" alt="left" /> --}}

                            <div style="margin-top: -10px; border-radius: 30px;" class="live-team-box">
                                <div class="row align-items-center text-center">
                                    <div class="col-lg-5">
                                        <div class="live-teams">
                                            <img src="{{ asset('img/matches/australia.png') }}" alt="left" />
                                            <div class="text">

                                                <h4>Australia</h4>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-2">
                                        <div class="match-time text-center">
                                            <h3>VS</h3>
                                            <h5>258/4</h5>
                                            <h5>43:4</h5>
                                            <h5
                                                style="border-radius: 15px; padding-top: 4px; background-color: #fd9c00;">
                                                301</h5>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="live-teams">
                                            <img src="{{ asset('img/matches/sri-lanka.png') }}" alt="left" />
                                            <div class="text">

                                                <h4>Sri Lanka</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- tab-area -->
                            <section style="text-align: center; padding-top: 60px" id="work" class="pt-120 pb-120"
                                {{-- style="background: url(img/slider/4822.jpg) no-repeat;"> --}} <div class="container">
                                <div class="portfolio ">
                                    <div class="row align-items-center mb-30">
                                        <div class="col-lg-12">
                                            <div class="section-title cta-title mb-35">
                                                <h2>SCORE<span>BOARD</span></h2>
                                                <img src="img/bg/circle_left.png" alt="circle left" />
                                            </div>
                                        </div>

                                        <div class="col-lg-12">
                                            <div class="my-masonry">
                                                <div class="button-group filter-button-group ">
                                                    <button class="active tab-btn-cus" data-filter=".batting"><i
                                                            class="fa-solid fa-baseball-bat-ball"></i> BATTING</button>
                                                    <button class="tab-btn-cus" data-filter=".balling"><i
                                                            class="fa-solid fa-baseball"></i></i> BALLING</button>
                                                    <button class="tab-btn-cus" data-filter=".chart"> <i
                                                            class="fa-solid fa-chart-simple"></i> CHART &
                                                        HISTORY</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="grid">
                                        <div class="grid-item batting">
                                            <table class="table">
                                                <thead>
                                                    <tr class="table-light">
                                                        <th scope="col"></th>
                                                        <th scope="col">NAME</th>
                                                        <th scope="col">SATUS</th>
                                                        <th scope="col">R</th>
                                                        <th scope="col">B</th>
                                                        <th scope="col">Rs</th>
                                                        <th scope="col">4s</th>
                                                        <th scope="col">6s</th>
                                                        <th scope="col">TOTAL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-danger">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-danger">OUT</span></td>
                                                        <td>15</td>
                                                        <td>10</td>
                                                        <td>280.00</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>250</td>
                                                    </tr>
                                                    <tr class="table-success">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-success">BAT+</span></td>
                                                        <td>15</td>
                                                        <td>10</td>
                                                        <td>280.00</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>250</td>
                                                    </tr>
                                                    <tr class="table-success">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-success">BAT</span></td>
                                                        <td>15</td>
                                                        <td>10</td>
                                                        <td>280.00</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>250</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="grid-item balling">
                                            <table class="table">
                                                <thead>
                                                    <tr class="table-light">
                                                        <th scope="col"></th>
                                                        <th scope="col">NAME</th>
                                                        <th scope="col">OVER</th>
                                                        <th scope="col">W</th>
                                                        <th scope="col">R</th>
                                                        <th scope="col">4s</th>
                                                        <th scope="col">6s</th>
                                                        <th scope="col">TOTAL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-info">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/game.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td>5</td>
                                                        <td>1</td>
                                                        <td>10</td>
                                                        <td>1</td>
                                                        <td>0</td>
                                                        <td>15</td>
                                                    </tr>
                                                    <tr class="table-info">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/game.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td>4</td>
                                                        <td>1</td>
                                                        <td>10</td>
                                                        <td>1</td>
                                                        <td>0</td>
                                                        <td>15</td>
                                                    </tr>
                                                    <tr class="table-info">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/game.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td>3</td>
                                                        <td>1</td>
                                                        <td>10</td>
                                                        <td>1</td>
                                                        <td>0</td>
                                                        <td>15</td>
                                                    </tr>
                                                    <tr class="table-info">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/game.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td>2</td>
                                                        <td>1</td>
                                                        <td>10</td>
                                                        <td>1</td>
                                                        <td>0</td>
                                                        <td>15</td>
                                                    </tr>
                                                    <tr class="table-info">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/game.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>10</td>
                                                        <td>1</td>
                                                        <td>0</td>
                                                        <td>15</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="grid-item chart">
                                            <h3>SCORE & OVERS</h3>
                                            <canvas style="display: unset !important; width: 800px; height: 400px;" class="chart-cus" id="myChart"></canvas>

                                            <hr>

                                            <h3>1st ROUND</h3>

                                            <h5>BATTING</h5>
                                            <table class="table">
                                                <thead>
                                                    <tr class="table-light">
                                                        <th scope="col"></th>
                                                        <th scope="col">NAME</th>
                                                        <th scope="col">SATUS</th>
                                                        <th scope="col">R</th>
                                                        <th scope="col">B</th>
                                                        <th scope="col">Rs</th>
                                                        <th scope="col">4s</th>
                                                        <th scope="col">6s</th>
                                                        <th scope="col">TOTAL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-danger">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-danger">OUT</span></td>
                                                        <td>15</td>
                                                        <td>10</td>
                                                        <td>280.00</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>250</td>
                                                    </tr>
                                                    <tr class="table-success">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-success">BAT+</span></td>
                                                        <td>15</td>
                                                        <td>10</td>
                                                        <td>280.00</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>250</td>
                                                    </tr>
                                                    <tr class="table-success">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-success">BAT</span></td>
                                                        <td>15</td>
                                                        <td>10</td>
                                                        <td>280.00</td>
                                                        <td>1</td>
                                                        <td>2</td>
                                                        <td>250</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                    <tr class="table-warning">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/cricket.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td><span class="badge bg-warning">PENDING</span></td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                        <td>0</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                            <h5>BALLING</h5>
                                            <table class="table">
                                                <thead>
                                                    <tr class="table-light">
                                                        <th scope="col"></th>
                                                        <th scope="col">NAME</th>
                                                        <th scope="col">OVER</th>
                                                        <th scope="col">W</th>
                                                        <th scope="col">R</th>
                                                        <th scope="col">4s</th>
                                                        <th scope="col">6s</th>
                                                        <th scope="col">TOTAL</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="table-info">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/game.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td>5</td>
                                                        <td>1</td>
                                                        <td>10</td>
                                                        <td>1</td>
                                                        <td>0</td>
                                                        <td>15</td>
                                                    </tr>
                                                    <tr class="table-info">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/game.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td>4</td>
                                                        <td>1</td>
                                                        <td>10</td>
                                                        <td>1</td>
                                                        <td>0</td>
                                                        <td>15</td>
                                                    </tr>
                                                    <tr class="table-info">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/game.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td>3</td>
                                                        <td>1</td>
                                                        <td>10</td>
                                                        <td>1</td>
                                                        <td>0</td>
                                                        <td>15</td>
                                                    </tr>
                                                    <tr class="table-info">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/game.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td>2</td>
                                                        <td>1</td>
                                                        <td>10</td>
                                                        <td>1</td>
                                                        <td>0</td>
                                                        <td>15</td>
                                                    </tr>
                                                    <tr class="table-info">
                                                        <th>
                                                            <div class="text-center">
                                                                <img style="width: 40px;"
                                                                    src="{{ asset('img/matches/game.png') }}"
                                                                    class="rounded" alt="...">
                                                            </div>
                                                        </th>
                                                        <th>Wanidu Hasaraga</th>
                                                        <td>1</td>
                                                        <td>1</td>
                                                        <td>10</td>
                                                        <td>1</td>
                                                        <td>0</td>
                                                        <td>15</td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        </div>

                                    </div>

                                </div>

                            </section>
                            <!-- tab-area-end -->



                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- match-area-end -->

    </main>

    <!-- main-area-end -->
    @include('layouts.footer')


    @include('layouts.common-js')

</body>

</html>
