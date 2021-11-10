@foreach ($transactions as $transaction)

<tr class="text-break">
    <td>
        <a href="#" 
            class="prevent-default text-decoration-none text-info txn-hash-link" 
            data-hash="{{ $transaction['hash'] }}"
            data-tnxIndex="{{ $transaction['transactionIndex'] }}"
            data-blockHash="{{ $transaction['blockHash'] }}"
            data-blockNumber="{{ $transaction['blockNumber'] }}"
            data-timeStamp="{{ $transaction['timeStamp'] }}"
            data-from="{{ $transaction['from'] }}"
            data-to="{{ $transaction['to'] }}"
            data-gasPrice="{{ $transaction['gasPrice'] }}"
            data-gasUsed="{{ $transaction['gasUsed'] }}"
            data-value="{{ $transaction['value'] }}"
        >
            {{ $transaction['hash'] }}
        </a>
    </td>
    <td>
        {{ $transaction['blockNumber'] }}
    </td>
    <td class="text-break">
        {{ \App\Http\Controllers\TransactionsController::timestampToDateTimeString($transaction['timeStamp']) }}
    </td>
    <td class="font-weight-bold">
        {{ \App\Http\Controllers\TransactionsController::convertNumberToEther($transaction['value']) }} Ether
    </td>
    <td class="font-weight-bold">
        ${{ number_format(\App\Http\Controllers\TransactionsController::convertNumberToEther($transaction['value']) * $ether_price ) }}
    </td>
    <td>
        {{ \App\Http\Controllers\TransactionsController::convertNumberToEther($transaction['gasUsed']) * \App\Http\Controllers\TransactionsController::convertNumberToEther($transaction['gasPrice']) }}
    </td>
</tr>

@endforeach
