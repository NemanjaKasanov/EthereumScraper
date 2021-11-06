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
        <div class="col-lg-8 col-sm-12" id="page-content-wrapper">

            <p class="h1 mb-5 text-info">Ethereum Scraper</p>

            {{-- Form elements --}}

            <div class="col-12 text-center p-5 h2" id="loading-icon-container">
                <lord-icon
                    src="https://cdn.lordicon.com/ulhdumaq.json"
                    trigger="loop"
                    colors="primary:#121331,secondary:#08a88a"
                    style="width:250px;height:250px">
                </lord-icon>
                <p class="h3 text-info">Loading...</p>
            </div>

            <div class="col-12" id="address-information">

                {{-- Address wallet information --}}
                
            </div>
        
        </div>
    </div>

@endsection

@section('js')
    <script src="{{ asset('assets/js/loading.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
@endsection
