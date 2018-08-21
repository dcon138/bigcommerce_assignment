@extends('layouts.app')

@section('title', $customer->first_name . "'s Order History")

@section('content')
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th># of Products</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @if (empty($orders))
                <tr>
                    <td colspan="3">This customer has not submitted any orders.</td>
                </tr>
            @else
                @php($lifeTimeValue = 0)
                @foreach ($orders as $order)
                    @php($lifeTimeValue += $order->total_inc_tax)
                    <tr>
                        <td>{{ format_date($order->date_created) }}</td>
                        <td>{{ $order->items_total }}</td>
                        <td>{{ format_currency($order->total_inc_tax) }}</td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="2">Lifetime Value</td>
                    <td>{{ format_currency($lifeTimeValue) }}</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
