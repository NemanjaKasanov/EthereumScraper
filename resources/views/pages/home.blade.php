@extends('layout')

@section('title')
    Ethereum Scraper
@endsection

@section('description')
    Ethereum Scraper App
@endsection

@section('keywords')
    ethereum, Ethereum, scraper, Scraper
@endsection

@section('css')

@endsection

@section('content')

    <div class="col-12 m-5 d-flex justify-content-center">
        <div class="col-lg-8 col-sm-12">

            <p class="h1 mb-5 text-info">Ethereum Scraper</p>

            <div class="col-12" id="address-information">
                
            </div>
        
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('assets/js/main.js') }}"></script>
@endsection
