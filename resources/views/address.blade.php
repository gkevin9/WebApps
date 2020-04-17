@extends('layout.master')
@section('class')
<li><a href="/">home</a></li>
<li><a href="/order_up">Menu</a></li>
<li><a href="/order">Order</a></li>
<li><a href="/payment">Pay Here</a></li>
<li><a class="active" href="/delivery">Delivery</a></li>
<li><a href="/orderhistory">Order History</a></li>
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

                    <span>Where is your address : </span>
                    <form action="/delivery_process" method="GET">
                                   
                    <div class="form-group">
                        <label for="alamat">Alamat </label>
                        <input class="form-control form-control-lg" name='alamat' 
                        type="text" placeholder="Masukan nama jalan dan nomer tujuan">
                    </div>

                    <div class="form-group">
                        <label for="kecamatan">Kecamatan</label>
                        <select class="form-control" name='kecamatan' id="kecamatan">
                        <option>Andir</option>
                        <option>Astana Anyar</option>
                        <option>Cicendo</option>
                        <option>Regol</option>
                        <option>Sumur Bandung</option>
                        </select>
                    </div>

                    <?php
                        $id_order=$_GET['id_order'];
                        session()->put('order_delivery',$id_order); 
                    ?>

                    <input class='boxed-btn3' type='submit' value='Deliver'>
                                
                    </form>

                    </div>
                </div>
            </div>

            
        </div>
</div>



<!-- nampilin pesanan end -->


@endsection