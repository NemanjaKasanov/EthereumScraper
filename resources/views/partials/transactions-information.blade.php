<table class="table table-striped table-hover">
    <thead>
        <tr>
            <th scope="col" colspan="7" class="text-center text-info h4 pb-4">Transactions:</th>
        </tr>
        <tr>
            <th scope="col">Txn Hash</th>
            <th scope="col">Block</th>
            <th scope="col">Date</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Value</th>
            <th scope="col">Txn Fee</th>
        </tr>
    </thead>
    <tbody class="small">

        @foreach ($transactions as $transaction)

            <tr>
                <td>{{ $transaction['blockHash'] }}</td>
                <td>{{ $transaction['blockNumber'] }}</td>
                <td>{{ $transaction['timeStamp'] }}</td>
                <td>{{ $transaction['from'] }}</td>
                <td>{{ $transaction['to'] }}</td>
                <td>{{ $transaction['value'] }}</td>
                <td>{{ $transaction['blockNumber'] }}</td>
            </tr>

        @endforeach

    </tbody>
</table>
