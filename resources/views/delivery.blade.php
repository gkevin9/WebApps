@extends('layout.master')
@section('class')
<li><a href="/">home</a></li>
<li><a href="/order_up">Menu</a></li>
<li><a href="/order">Order</a></li>
<li><a href="/payment">Pay Here</a></li>
<li><a class="active" href="/delivery">Delivery</a></li>
<li><a href="/orderhistory">Order History</a></li>
<li><a href="/view_favorite">Favorite</a></li>
@endsection
@section('konten')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>Delivery System</h3>
    </div>
    <!-- bradcam_area_end -->

<!-- namipilin pesanan start -->
<div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">

                    @if(\Session::has('email'))
                        @if(\Session::has('delivery_status'))
                            @if(\Session('kecamatan')=='Andir')
                            <?php $time=5;?>
                            @elseif(\Session('kecamatan')=='Astana Anyar')
                            <?php $time=7;?>
                            @elseif(\Session('kecamatan')=='Cicendo')
                            <?php $time=10;?>
                            @elseif(\Session('kecamatan')=='Regol')
                            <?php $time=8;?>
                            @elseif(\Session('kecamatan')=='Sumur Bandung')
                            <?php $time=5;?>
                            @endif
                            <span>Your Order will come in <?php echo $time?> minute</span>
                                <div class="btn btn-dark btn-lg">
                                    <a class="glyphicon glyphicon-remove" href="/delivery_done">
                                    <h1><b>Complete Delivery</b></h1>
                                    </a>
                                </div> 

                        @else 
                            @if($count>0)
                                <table>
                                @foreach($bill as $key => $data)
                                    <tr>    
                                    <?php $id_order = $data->id_order;?>
                                  <th><h3>Pesanan : {{$data->id_order}}</h3></th> 
                                    <td> 
                                    <form action="/address" method="GET">
                                        <?php
                                        echo"<input type='hidden' name='id_order' value=".$id_order.">";
                                        echo"<input class='boxed-btn3' type='submit' value='Deliver'>";
                                        ?>
                                  </form>
                                    </td>      
                                    </tr>
                                
                                @endforeach  
                                </table>
                            @else
                             <span>You have no order to deliver, make an order first</span>
                                    <div class="btn btn-dark btn-lg">
                                    <a class="glyphicon glyphicon-remove" href="/order_up">
                                    <h1><b>Order</b></h1>
                                    </a>
                                    </div> 
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