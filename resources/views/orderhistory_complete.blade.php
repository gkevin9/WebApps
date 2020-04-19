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

<!-- namipilin detail pesanan start -->
<div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">

                    @if(\Session::has('email'))
                        <table align="center">
                        <tr><td colspan="3"><span>History Order</span></td></tr>
                        <tr>
                        <td colspan="2"><span>Tanggal Transaksi</span></td>
                        <td><span>{{$tgl}}</span></td>
                        </tr>
                        <tr>
                        <td colspan="2"><span>Tipe Pesanan</span></td>
                        @if($status =="Paid")
                            <td><span>Dine in</span></td>
                        @else
                            <td><span>Delivery</span></td>
                        </tr>
                        @endif
                        <tr>
                        <td><h3>Menu</h3></td>
                        <td><h3>Qty</h3></td>
                        <td><h3>Price</h3></td>
                        </tr>
                        @foreach($detail as $key => $data)
                            <tr>    
                            <th><h3>{{$data->name}}</h3></th> 
                            <td><h3>{{$data->qty}}</h3></td>
                            <td><h3>{{$daftarharga[$data->name]}}</h3></td>      
                            </tr> 
                        @endforeach
                        <tr>
                        <td colspan="2"><h3>Total biaya</td></h3>
                        <td><h3>{{$totalsemua}}</td></h3>
                        </tr>
                        </table>
                        <br>
                        <div class="btn btn-dark btn-lg">
                                <a class="glyphicon glyphicon-remove" href="/orderhistory">
                                <h1><b>Back</b></h1>
                                </a>
                        </div>

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