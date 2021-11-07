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

    <div class="row m-5 d-flex justify-content-center">
        <div class="col-lg-10 col-sm-12" id="page-content-wrapper">

            <p class="h1 mb-5 text-info">Ethereum Scraper</p>

            @include('partials.form')

            @include('partials.loading')

            <div class="col-12" id="data-containers">
                <div class="col-12 mb-5" id="address-information">
                    {{-- Address wallet information display --}}
                </div>
    
                <div class="col-12 mb-5" id="transactions-information">
                    {{-- Transactions associated with the address display --}}
                </div>
            </div>
        
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('assets/js/loading.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
@endsection
