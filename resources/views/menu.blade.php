@extends('layout.master')
@section('class')

<li><a href="/">home</a></li>
<li><a class="active" href="/order_up">Menu</a></li>
<li><a href="/order">Order</a></li>
<li><a href="/payment">Pay Here</a></li>
<li><a href="/delivery">Delivery</a></li>
<li><a href="/orderhistory">Order History</a></li>

@endsection
@section('konten')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>Menu</h3>
    </div>
    <!-- bradcam_area_end -->

    <!-- best_burgers_area_start  -->
    <div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <script>
                    var msg = '{{Session::get('alert')}}';
                    var exist = '{{Session::has('alert')}}';
                    if(exist){
                        alert(msg);
                    }
                </script>
                    <div class="section_title text-center mb-80">
                        <span>Burger Menu</span>
                        <h3>Best Ever Burgers</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                    
                    <div class="col-xl-6 col-md-6 col-lg-6">
                        <div class="single_delicious d-flex align-items-center">
                            <div class="thumb">
                                <img src="storage/img/burger/1.png" alt="">
                            </div>
                            
                            <div class="info">
                                <h3>Beefy Burgers</h3>
                                <p>Great way to make your business appear trust and relevant.</p>
                                <span>Rp. 50000</span>
                                @if(\Session::has('email'))
                                <form action="/choose" method="GET">
                                <div class="qty mt-5">
                                <input type="hidden" name="nama" value="Beefy Burgers">
                                <input type="number" class="count" name="qty" value="1">
                                </div>
                                <br>
                                <input class="boxed-btn3" type="submit" value="Order">
                                </form>
                                @else
                                @endif

                            </div>
                            
                        </div>
                        
                    </div>
                
                  
                <div class="col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="storage/img/burger/2.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Burger Boys</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>Rp. 40000</span>
                            @if(\Session::has('email'))
                            <form action="/choose" method="GET">
                                <div class="qty mt-5">
                                <input type="hidden" name="nama" value="Burger Boys">
                                <input type="number" class="count" name="qty" value="1">
                                </div>
                                <br>
                                <input class="boxed-btn3" type="submit" value="Order">
                            </form>
                            @else
                            @endif
                        </div>
                    </div>
                      
                </div>

                
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="storage/img/burger/3.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Burger Bizz</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>Rp. 50000</span>
                            @if(\Session::has('email'))
                            <form action="/choose" method="GET">
                                <div class="qty mt-5">
                                <input type="hidden" name="nama" value="Burger Bizz">
                                <input type="number" class="count" name="qty" value="1">
                                </div>
                                <br>
                                <input class="boxed-btn3" type="submit" value="Order">
                            </form>
                            @else
                            @endif
                        </div>
                    </div>
                </div>

                
                <div class="col-xl-6 col-md-6 col-lg-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="storage/img/burger/4.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Crackles Burger</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>Rp. 55000</span>
                            @if(\Session::has('email'))
                            <form action="/choose" method="GET">
                                <div class="qty mt-5">
                                <input type="hidden" name="nama" value="Crackles Burger">
                                <input type="number" class="count" name="qty" value="1">
                                </div>
                                <br>
                                <input class="boxed-btn3" type="submit" value="Order">
                            </form>
                            @else
                            @endif
                        </div>
                    </div>
                
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="storage/img/burger/5.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Bull Burger</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>Rp. 56000</span>
                            @if(\Session::has('email'))
                            <form action="/choose" method="GET">
                                <div class="qty mt-5">
                                <input type="hidden" name="nama" value="Bull Burger">
                                <input type="number" class="count" name="qty" value="1">
                                </div>
                                <br>
                                <input class="boxed-btn3" type="submit" value="Order">
                            </form>
                            @else
                            @endif
                        </div>
                    </div>
                
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="storage/img/burger/6.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Rocket Burger</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>Rp. 50000</span>
                            @if(\Session::has('email'))
                            <form action="/choose" method="GET">
                                <div class="qty mt-5">
                                <input type="hidden" name="nama" value="Rocket Burger">
                                <input type="number" class="count" name="qty" value="1">
                                </div>
                                <br>
                                <input class="boxed-btn3" type="submit" value="Order">
                            </form>
                            @else
                            @endif
                        </div>
                    </div>
                
                </div>

                
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="storage/img/burger/7.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Smokin Burger</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>Rp. 50000</span>
                            @if(\Session::has('email'))
                            <form action="/choose" method="GET">
                                <div class="qty mt-5">
                                <input type="hidden" name="nama" value="Smokin Burger">
                                <input type="number" class="count" name="qty" value="1">
                                </div>
                                <br>
                                <input class="boxed-btn3" type="submit" value="Order">
                            </form>
                            @else
                            @endif
                        </div>
                    </div>
                
                </div>
                
                <div class="col-lg-6 col-md-6">
                    <div class="single_delicious d-flex align-items-center">
                        <div class="thumb">
                            <img src="storage/img/burger/8.png" alt="">
                        </div>
                        <div class="info">
                            <h3>Delish Burger</h3>
                            <p>Great way to make your business appear trust and relevant.</p>
                            <span>Rp. 50000</span>
                            @if(\Session::has('email'))
                            <form action="/choose" method="GET">
                                <div class="qty mt-5">
                                <input type="hidden" name="nama" value="Delish Burger">
                                <input type="number" class="count" name="qty" value="1">
                                </div>
                                <br>
                                <input class="boxed-btn3" type="submit" value="Order">
                            </form>
                            @else
                            @endif
                        </div>
                    </div>
                
                </div>
                
            </div>

            @if(\Session::has('email'))

            <div class="btn btn-dark btn-lg">
                <a class="glyphicon glyphicon-remove" href="/order">
              <h1><b>SEE ORDER</b></h1>
               </a>
            </div> 
            @else
            @endif
        </div>
    </div>
    <!-- best_burgers_area_end  -->

    <!-- features_room_startt -->
    <div class="Burger_President_area">
            <div class="Burger_President_here">
                <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="storage/img/burgers/1.png" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span>$20</span>
                                <h3>The Burger President</h3>
                                <p>Great way to make your business appear trust <br> and relevant.</p>
                                <form action="/choose" method="GET">
                                <div class="qty mt-5">
                                <input type="hidden" name="nama" value="Burger President">
                                <input type="number" class="count" name="qty" value="1">
                                </div>
                                <br>
                                <input class="boxed-btn3" type="submit" value="Order">
                                </form>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="single_Burger_President">
                    <div class="room_thumb">
                        <img src="storage/img/burgers/2.png" alt="">
                        <div class="room_heading d-flex justify-content-between align-items-center">
                            <div class="room_heading_inner">
                                <span>$20</span>
                                <h3>The Burger Presidentena</h3>
                                <p>Great way to make your business appear trust <br> and relevant.</p>
                                <form action="/choose" method="GET">
                                <div class="qty mt-5">
                                <input type="hidden" name="nama" value="The Burger Presidentena">
                                <input type="number" class="count" name="qty" value="1">
                                </div>
                                <br>
                                <input class="boxed-btn3" type="submit" value="Order">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
    </div>
    <!-- features_room_end -->


    <!-- instragram_area_start -->
    <div class="instragram_area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="storage/img/instragram/1.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="storage/img/instragram/2.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="storage/img/instragram/3.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="single_instagram">
                    <img src="storage/img/instragram/4.png" alt="">
                    <div class="ovrelay">
                        <a href="#">
                            <i class="fa fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- instragram_area_end -->

@endsection