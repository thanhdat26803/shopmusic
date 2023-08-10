@extends('layouts.frontend')

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="mb-5">
      <div class="containersanpham">
      <div class="img">
            <div class="hello">
                <div class="img--hello__anh">
                    <img src="{{ asset('frontend/img/hero/nhachay.png') }}" style="width: 400px;">
                </div>
            </div>
            <div class="img--luachon">
                <div class="img-luachon-button">
                    <a href="" class="trai">
                        <button class="img--img--luachon__img-luachon-button_bxh">Ranking</button>
                    </a>
                    <a href="{{ route('cart.index') }}" class="phai">
                        <button class="img--img--luachon__img-luachon-button_vip">Buy Pro Account</button>
                    </a>
                </div>
            </div>
            <div class="img--trai">
                <img src="{{ asset('frontend/img/hero/trai.png') }}">
            </div>
            <div class="img--phai">
                <img src="{{ asset('frontend/img/hero/phai.png') }}">
            </div>
    </section>

@endsection
