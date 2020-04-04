@extends('layout.master')
@section('class')
<li><a href="/">home</a></li>
<li><a href="/order_up">Menu</a></li>
<li><a href="/about">About</a></li>
<li><a class="active" href="/order">Order</a></li>
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

                    @if(\Session::has('status_order'))
                        <span>Here 's your Order</span>

                        @if(\Session::has('order'))
                            <?php
                            $order_name = session('order_name');
                            $qty = session('order_qty');
                            $a = session('order');
                            // echo $order[0][0];
                            // echo $order[1][0];
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
                        


                        @endif    
                        
                    @else
                        <span> You got no Orders </span>  
                    @endif
                    </div>
                </div>
            </div>

            <div class="btn btn-dark btn-lg">
                <a class="glyphicon glyphicon-remove" href="/order_done">
                    <h1><b>Order</b></h1>
                </a>
            </div>
        </div>
</div>



<!-- nampilin pesanan end -->


@endsection