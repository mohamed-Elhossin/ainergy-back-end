@extends('adminUI.shared.main')


@section('main')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>

        <img src="{{ asset('img/p1.webp') }}" alt="">
    </div><!-- End Page Title -->
@endsection
