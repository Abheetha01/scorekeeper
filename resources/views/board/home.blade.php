<!DOCTYPE html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>SCOREKEEPER</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

		@include('layouts.common-css')

    </head>
    <body style="overflow: hidden;">
        @include('layouts.preloader')
        
        @include('layouts.header')
    
        <!-- main-area -->
        <main>
             
           <!-- slider-area -->
            <section id="home" class="slider-area slider-four fix p-relative">
               
                <div class="slider-active">
				<div class="single-slider slider-bg d-flex align-items-center" style="background: url(img/slider/slider_img02.jpg) no-repeat;background-size: cover; background-position: center top;">
                    <div class="after-bg"><img src="{{ asset('img/bg/before-header-img.png') }}" alt="circle_left"></div>
                        <div class="container">
                           <div class="row justify-content-center pt-50 text-center">                                
                            </div>
                        </div>
                    </div>
                   
                    </div>
                    
               
            </section>
            <!-- slider-area-end -->
            
              <!-- testimonial-area -->
            <section class="testimonial-area p-relative pt-120 pb-40" style="">
                <div class="container">
                      <div class="row align-items-center">
                         <div class="col-lg-12">
                                   <div class="section-title cta-title mb-50 pl-15" id="today-matches-section" style="margin-bottom: 20px;">    
                                       <h2>Today <span>Matches</span></h2>	
                                       <img src="img/bg/circle_left.png" alt="left"/>
                                    </div>
                                    <a class="link-custom" href="/matches"><h4>VIEW ALL <i class="fa-solid fa-angles-right"></i></h4></a>
                            </div>
                    </div>
                    <div class="macthe-active">
                                <a href="/scoreboard"> <div style="cursor: pointer" class="macthe-box macthe-box2">
                                    <div class="row align-items-center">
                                     <div class="col-lg-5">
                                        <div class="team">
                                            <img style="width: 180px" src="{{ asset('img/matches/m-11.png') }}" alt="left"/>
                                            <div class="text">
                                                <h2>PHARAOH IN EGYPT</h2>
                                            </div>
                                         </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="match-time text-center">
                                                <h1>VS</h1>
                                               <h3 class="card-tag" style="background-color: rgb(9, 245, 9); padding: 5px; border-radius: 25px;">LIVE</h3>
                                               <h3 style="padding-top: 7px">111/5 || 5:2</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                        <div class="team2">
                                            <img style="width: 180px" src="{{ asset('img/matches/m-12.png') }}" alt="left"/>
                                            <div class="text">
                                               <h2>WHOLF IN NORTH</h2>
                                            </div>
                                         </div>
                                        </div>
                                
                                </div>
                            </div></a>
                         <div class="macthe-box macthe-box2">
                                    <div class="row align-items-center">
                                     <div class="col-lg-5">
                                        <div class="team">
                                            <img style="width: 180px" src="img/matches/m-11.png" alt="left"/>
                                            <div class="text">
                                               
                                                <h4>11:30</h4>
                                                 <span>1st  October 2021</span>
                                            </div>
                                         </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="match-time text-center">
                                                <h1>VS</h1>
                                                <h3 class="card-tag" style="background-color: rgb(21, 223, 230); padding: 5px; border-radius: 25px;">POSTPOND</h3>
                                               {{-- <h3>02-02-2023 @ 17:55</h3> --}}
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                        <div class="team2">
                                            <img style="width: 180px" src="img/matches/m-12.png" alt="left"/>
                                            <div class="text">
                                                <h4>11:30</h4>
                                                 <span>1st  October 2021</span>
                                            </div>
                                         </div>
                                        </div>
                                
                                </div>
                            </div>
                         <div class="macthe-box macthe-box2">
                                    <div class="row align-items-center">
                                     <div class="col-lg-5">
                                        <div class="team">
                                            <img style="width: 180px" src="img/matches/m-11.png" alt="left"/>
                                            <div class="text">
                                                 <h2>PHARAOH</h2>
                                                 {{-- <span>1st  October 2021</span> --}}
                                            </div>
                                         </div>
                                        </div>
                                        <div class="col-lg-2">
                                            <div class="match-time text-center">
                                                <h1>VS</h1>
                                                <h3 class="card-tag" style="background-color: rgb(196, 236, 17); padding: 5px; border-radius: 25px;">PENDING</h3>
                                               <h3>02-02-2023 @ 17:55</h3>
                                            </div>
                                        </div>
                                        <div class="col-lg-5">
                                        <div class="team2">
                                            <img style="width: 180px" src="img/matches/m-12.png" alt="left"/>
                                            <div class="text">
                                               <h2>WOLF</h2>
                                                 {{-- <span>1st  October 2021</span> --}}
                                            </div>
                                         </div>
                                        </div>
                                
                                </div>
                            </div>
                        </div>
                </div>
            </section>
            <!-- testimonial-area-end -->
          
        </main>
        <!-- main-area-end -->
        @include('layouts.footer')


		@include('layouts.common-js')
    </body>
</html>