@extends('layout.master')
@section('class')
<li><a href="/">home</a></li>
<li><a href="/order_up">Menu</a></li>
<li><a href="/order">Order</a></li>
<li><a href="/payment">Pay Here</a></li>
<li><a href="/delivery">Delivery</a></li>
<li><a href="/orderhistory">Order History</a></li>
<li><a class="active" href="/view_favorite">Favorite</a></li>
@endsection
@section('konten')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>Your Favorite</h3>
    </div>
    <!-- bradcam_area_end -->

<!-- namipilin pesanan start -->
<div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">
                    <script>
                        var msg = '{{Session::get('alert')}}';
                        var exist = '{{Session::has('alert')}}';
                        if(exist){
                            alert(msg);
                        }
                    </script>
                    @if(\Session::has('email'))
                        @if($count>0)
                            <span>Here's your favorite menu</span>
                                
                            <?php
                                echo"<table>";
                                echo"<tr><th colspan = '2'><h3>Menu</h3> <hr></th>";
                                echo "<br>";
                                for ($i=0; $i<$count; $i++){
                                    echo"<tr>";
                                    echo "<td><h3>".$list_menu[$i]["name"]."</h3></td>";
                                    echo "<form action='/delete_favorite' method='GET'>";
                                    echo "<input type='hidden' name='id_favorite' value=".$list_menu[$i]["id_favorite"].">";
                                    echo "<td><input class='btn btn-outline-warning' type='submit' value='Delete'></td></form>";
                                    echo "</tr>";
                                    echo "<tr>";
                                    echo "<td></td>";
                                    echo "<td><form action='/add_favorite_to_order' method='GET'>";
                                    csrf_token();
                                    echo "<input type='hidden' name='nama' value='".$list_menu[$i]["name"]."'>
                                    <input type='number' class='count' name='qty' value='1'>";
                                    echo '<input class="boxed-btn3" type="submit" value="Order">';
                                    echo "</form>";
                                    echo "</td>";
                                    echo"</tr>";
                                } 
                                echo"</table>";
                                ?>
                            
                        @else
                            <span> You don't add favorite yet</span> 
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