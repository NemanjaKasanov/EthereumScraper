<div class="col-12">
    @if ($address['success'] == 'true')

    <div class="col-12 mb-4">
        <p class="">Address: <b>{{ $address['address'] }}</b></p>
    </div>

    <div class="col-12 d-flex flex-wrap border-top border-bottom pt-3 pb-3">
        <div class="col-lg-4 col-sm-12">
            <p class=""><small>Tag:</small> <b>{{ $address['tag'] }}</b></p>
        </div>
        <div class="col-lg-4 col-sm-12">
            <p class=""><small>Balance:</small> <b>{{ $address['balance'] }}</b></p>
        </div>
        <div class="col-lg-4 col-sm-12">
            <p class=""><small>Value:</small> <b>{{ $address['value'] }}</b></p>
        </div>
    </div>
    
    @else
    
    <p class="mt-4">Address <i>{{ $address['address'] }}</i> is invalid.</p>
    
    @endif
</div>