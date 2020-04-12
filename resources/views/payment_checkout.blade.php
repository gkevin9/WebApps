@extends('layout.master')
@section('class')
<li><a href="/">home</a></li>
<li><a href="/order_up">Menu</a></li>
<li><a href="/about">About</a></li>
<li><a href="/order">Order</a></li>
<li><a class="active" href="/payment">Pay Here</a></li>
@endsection
@section('konten')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>Your Bill</h3>
    </div>
    <!-- bradcam_area_end -->

<!-- namipilin detail pesanan start -->
<div class="best_burgers_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-80">

                    @if(\Session::has('email'))
                        <table>
                        <tr><td><h3>Mohon cek kembali pesanan anda</h3></td></tr>
                        <tr><td></td></tr>
                        <tr><td><h3>Menu Makanan</h3></td> <td><h3>qty</h3></td></tr>
                        @foreach($detail as $key => $data)
                            <tr>    
                            <th><h3>{{$data->name}}</h3></th> 
                            <td><h3>{{$data->qty}}</h3></td>      
                            </tr> 
                        @endforeach  
                        </table>
                        <br>
                        <div class="btn btn-dark btn-lg">
                                <a class="glyphicon glyphicon-remove" href="/pay_done">
                                <h1><b>Pay</b></h1>
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