@extends('layouts.app')

@section('title', 'Customers')

@section('content')
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th># of Orders</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->first_name . ' ' . $customer->last_name }}</td>
                        <td>
                            <a href="/customers/{{ $customer->id }}">{{ !empty($orderCountPerCustomer[$customer->id]) ? $orderCountPerCustomer[$customer->id] : 0 }}</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
@endsection
