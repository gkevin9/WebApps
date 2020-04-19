@extends('layout.master')
@section('class')
<li><a href="/">home</a></li>
<li><a href="/order_up">Menu</a></li>
<li><a class="active" href="/order">Order</a></li>
<li><a href="/payment">Pay Here</a></li>
<li><a href="/delivery">Delivery</a></li>
<li><a href="/orderhistory">Order History</a></li>
<li><a href="/view_favorite">Favorite</a></li>
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
                        
                        @if(\Session::has('status_order'))
                            @if(\Session::has('order'))
                            <span>Here 's your Order</span>
                                <?php
                                $order_name = session('order_name');
                                $qty = session('order_qty');
                                $a = session('order');
                                ?>

                                <?php
                                $i=0;
                                echo"<table>";
                                echo"<tr><th><h3>Menu</h3> <hr></th>
                                    <th><h3>Qty</h3> <hr></th></tr>";
                                foreach($a as $data)
                                {   
                                    $menu=array_keys($data);
                                    echo"<tr>";
                                    echo "<td><h3>".$menu[0]."</h3></td>";
                                    echo "<td><h3>".$data[$menu[0]]."</h3></td>";
                                    echo "<td> <form action='/cancel' method='GET'>
                                    <input type='hidden' name='posisi' value=".$i.">
                                    <input class='btn btn-outline-warning' type='submit' value='Cancel'>
                                    </form>
                                    </td>";
                                    echo"</tr>";
                                    $i+=1;
                                } 
                                echo"</table>";
                                ?>

                                <div class="btn btn-dark btn-lg">
                                <a class="glyphicon glyphicon-remove" href="/order_done">
                                <h1><b>Order</b></h1>
                                </a>
                                </div>
                            
                            @else
                            <span> You don't Order yet</span> 
                            @endif    

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