@extends('layout.master')
@section('class')
<li><a href="/">home</a></li>
<li><a href="/order_up">Menu</a></li>
<li><a href="/about">About</a></li>
<li><a href="/order">Order</a></li>
<li><a class="active"  href="/payment">Pay Here</a></li>
@endsection

@section('konten')
    <!-- bradcam_area_start -->
    <div class="bradcam_area breadcam_bg overlay">
        <h3>Thank You for your Payment</h3>
    </div>
    <!-- bradcam_area_end -->

@endsection