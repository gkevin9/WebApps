@extends('layout.master')
@section('class')
<li><a href="/">home</a></li>
<li><a href="/order_up">Menu</a></li>
<li><a href="/about">About</a></li>
<li><a class="active"  href="/order">Order</a></li>
@endsection
@section('konten')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>Your Order</h3>
    </div>
    <!-- bradcam_area_end -->

<!-- namipilin pesanan start -->
<div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">

                    @if(\Session::has('email'))
                        
                        @if(\Session::has('status_order')and('order'))
                            <span>Here 's your Order</span>
                                <?php
                                $order_name = session('order_name');
                                $qty = session('order_qty');
                                $a = session('order');
                                ?>

                                <?php
                                $count = count($a[0]); 
                                echo"<table border=1>";
                                for ($x = 0; $x < $count; $x++){
                                    echo"<tr>";
                                    echo "<td>".$a[0][$x]."</td>";
                                    echo "<td>".$a[1][$x]."</td>";
                                    echo"</tr>";
                                } 
                                echo"</table>";
                                ?>
                        
                        <div class="btn btn-dark btn-lg">
                            <a class="glyphicon glyphicon-remove" href="/order_done">
                            <h1><b>Order</b></h1>
                            </a>
                        </div> 
                        @else
                            <span> You got no Orders </span> 

                        @endif
                        
                    
                    @else
                        <span>You got to login to use this feature</span>
                        <div class="btn btn-dark btn-lg">
                            <a class="glyphicon glyphicon-remove" href="/login">
                            <h1><b>Login</b></h1>
                            </a>
                        </div> 
                    @endif    

                    </div>
                </div>
            </div>

            
        </div>
</div>



<!-- nampilin pesanan end -->


@endsection