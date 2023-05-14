@extends('layout.admin')
@section('title','Dashboard')
@section('dash','Dashboard')
@section('table','ORNOTSHOP')
@section('contend')
<div class="row">
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon bg-info elevation-1"><i class="fas fa-user"></i></span>

            <div class="info-box-content">
                @php
                $count = DB::table('users')->count();
                @endphp
                <span class="info-box-text">Users</span>
                <span class="info-box-number">
                    {{ $count }}
                </span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box">
            <span class="info-box-icon  bg-red elevation-1"><i class="fas fa-shopping-bag"></i></span>

            <div class="info-box-content">
                @php
                $count = DB::table('produks')->count();
                @endphp
                <span class="info-box-text">Produk</span>
                <span class="info-box-number">
                    {{ $count }}
                </span>
            </div>
        </div>
    </div>
    <div class="clearfix hidden-md-up"></div>

    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1">
                <i class="fas fa-wallet"></i></span>
            <div class="info-box-content">
                @php
                $count = DB::table('metode_pembayarans')->count();
                @endphp
                <span class="info-box-text">Wallet</span>
                <span class="info-box-number">{{ $count }}</span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1">
                <i class="fas fa-list-ol"></i>
            </span>
            @php
            $count = DB::table('kategoris')->count();
            @endphp
            <div class="info-box-content">
                <span class="info-box-text">Kategori</span>
                <span class="info-box-number">{{ $count }}</span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-warning elevation-1">
                <img src="./brand.png" class="w-full" alt="">
            </span>
            @php
            $count = DB::table('mereks')->count();
            @endphp
            <div class="info-box-content">
                <span class="info-box-text">Merek</span>
                <span class="info-box-number">{{ $count }}</span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1">
                <img src="./order.png" class="w-full" alt="">
            </span>
            @php
            $count = DB::table('orders')->count();
            @endphp
            <div class="info-box-content">
                <span class="info-box-text">Order</span>
                <span class="info-box-number">{{ $count }}</span>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-6 col-md-3">
        <div class="info-box mb-3">
            <span class="info-box-icon bg-red elevation-1">
                <img src="./pembayaran.png" class="w-full" alt="">
            </span>
            @php
            $count = DB::table('pembayarans')->count();
            @endphp
            <div class="info-box-content">
                <span class="info-box-text">Pembayaran</span>
                <span class="info-box-number">{{ $count }}</span>
            </div>
        </div>
    </div>
</div>
@section('header','Dashboard')
@section('aktif','Dashboard')
@endsection
