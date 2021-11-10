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

        <div class="col-12 mb-5 d-flex justify-content-between">
            <div>
                <p class="h1 text-info">Ethereum Scraper</p>
            </div>
            <div>
                <a href="#" class="text-info h1 prevent-default" id="info-icon">
                    <i class="fa fa-info-circle"></i>
                </a>
            </div>
        </div>

        <div class="col-12">
            <p class="">
                Current Ethereum Price:
                <b>${{ number_format(\App\Models\Ethereum::getEtherPriceInDollars()) }}</b>
            </p>
        </div>

        @include('partials.form')

        @include('partials.loading')

        <div class="col-12" id="data-containers">
            <div class="col-12 mb-5" id="address-information">

                {{-- Address wallet information display --}}

            </div>

            <div class="col-12 mb-5" id="">
                <input type="hidden" id="get-total-transactions" vlaue="1" />
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col" colspan="4" class="pb-3 text-info h4">Transactions (total: <span id="total-transactions" data-total="111"></span>)</th>
                            <th scope="col" colspan="2" class="">
                                <div class="col-12 d-flex justify-content-end align-items-center">
                                    <div class="form-group">
                                        <label for="per-page">Rows per page:</label>
                                        <select class="form-control" id="per-page">
                                            <option value="10">10</option>
                                            <option value="20" selected>20</option>
                                            <option value="50">50</option>
                                        </select>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th scope="col">Txn Hash</th>
                            <th scope="col">Block</th>
                            <th scope="col">Date</th>
                            <th scope="col">Value</th>
                            <th scope="col">Price</th>
                            <th scope="col">Txn Fee</th>
                        </tr>
                    </thead>
                    <tbody class="small word-wrap" id="transactions-information">

                        {{-- Transactions infromation table rows display --}}

                    </tbody>
                </table>

                <div class="col-12 text-center h3">
                    <p class="p-4">
                        <a href="#" class="prevent-default text-decoration-none text-info p-3 pagination-arrow" data-direction="first">
                            <i class="fa fa-angle-double-left" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="prevent-default text-decoration-none text-info p-3 pagination-arrow" data-direction="prev">
                            <i class="fa fa-chevron-left" aria-hidden="true"></i>
                        </a>
                        <a href="#" class="prevent-default text-decoration-none text-info p-3">
                            <span id="page-number" data-page="1">1</span>
                        </a>
                        <a href="#" class="prevent-default text-decoration-none text-info p-3 pagination-arrow" data-direction="next">
                            <i class="fa fa-chevron-right" aria-hidden="true"></i>
                        </a>
                    </p>
                </div>
            </div>

        </div>

        <div class="col-12 text-center" id="coin-animation">
            <lord-icon src="https://cdn.lordicon.com/qhviklyi.json" trigger="loop" colors="primary:#121331,secondary:#9ce5f4" style="width:250px;height:250px">
            </lord-icon>
        </div>

    </div>
</div>

@endsection

@section('js')
<script src="{{ asset('assets/js/modal.js') }}"></script>
<script src="{{ asset('assets/js/loading.js') }}"></script>
<script src="{{ asset('assets/js/pagination.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<script src="https://cdn.lordicon.com/libs/mssddfmo/lord-icon-2.1.0.js"></script>
@endsection
