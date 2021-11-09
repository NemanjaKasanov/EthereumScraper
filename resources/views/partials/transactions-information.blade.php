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