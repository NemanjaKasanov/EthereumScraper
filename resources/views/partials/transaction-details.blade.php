<div class="col-12 text-break">
    <p>
        <b>Tnx Hash:</b>
        <br />
        {{ $transaction['hash'] }}
    </p>
    <p>
        <b>Tnx Index:</b> {{ $transaction['transactionIndex'] }}
    </p>
    <p>
        <b>Block Hash:</b>
        <br />
        {{ $transaction['blockHash'] }}
    </p>
    <p>
        <b>From:</b>
        <br />
        {{ $transaction['from'] }}
    </p>
    <p>
        <b>To:</b>
        <br />
        {{ $transaction['to'] }}
    </p>
    <hr />
    <p>
        <b>Block:</b> {{ $transaction['blockNumber'] }}
    </p>
    <p>
        <b>Date:</b> {{ $transaction['timestamp'] }}
    </p>
    <p>
        <b>Tnx Fee:</b> {{ $transaction['tnxFee'] }}
    </p>
    <p class="text-info h4">
        Value: <b>{{ $transaction['value'] }} ETH</b>
    </p>
    <p class="text-info h4">
        Price: <b>${{ number_format($transaction['value'] * \App\Models\Ethereum::getEtherPriceInDollars()) }}</b>
    </p>
</div>
