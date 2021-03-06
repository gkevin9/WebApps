@extends('layout.master')
@section('class')
<li><a href="/">home</a></li>
<li><a href="/order_up">Menu</a></li>
<li><a href="/order">Order</a></li>
<li><a href="/payment">Pay Here</a></li>
<li><a href="/delivery">Delivery</a></li>
<li><a class="active" href="/orderhistory">Order History</a></li>
<li><a href="/view_favorite">Favorite</a></li>

@endsection
@section('konten')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>Your History</h3>
    </div>
    <!-- bradcam_area_end -->

<!-- namipilin pesanan start -->
<div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">

                    @if(\Session::has('email'))
                        @if($count>0)
                            <table>
                            @foreach($bill as $key => $data)
                                <tr>    
                                <?php $id_order = $data->id_order;?>
                                <th><h3>Pesanan : {{$data->id_order}}</h3></th>
                                <td rowspan="2"> 
                                <form action="/orderhistory_view" method="GET">
                                    <?php
                                        echo"<input type='hidden' name='id_order' value=".$id_order.">";
                                        echo"<input type='hidden' name='status' value=".$data->status.">";
                                        echo"<input class='boxed-btn3' type='submit' value='View'>";
                                    ?>
                                </form>
                                </td>      
                                </tr>
                                <tr>
                                    <td><h4>Tanggal Pesanan : {{$data->created_at}}</h4></td>
                                </tr>
                                
                            @endforeach  
                            </table>
                        @else
                            <span>You don't have history</span>
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