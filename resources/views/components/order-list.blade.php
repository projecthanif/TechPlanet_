@props(['order'])
<tr>
    <td>{{ $order->id }}</td>
    <td>{{ $order->created_at }}</td>
    <td>{{ $order->customer_id }}</td>
    <td>{{ $order->payment_status }}</td>
    <td>{{ $order->method }}</td>
    <td></td>
</tr>
