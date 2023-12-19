@extends('layout.app')

@section('content')

<div class="container">
    <div class=container>
        <h3>Sales History</h3>
        <hr>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Products Id</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th>Date of Sale</th>
                        
                    </tr>
                    <tbody>
                        @foreach( $sales as $sale)
                        <tr>
                            <td>{{ $sale->id }}</td>
                            <td>{{ $sale->name }}</td>
                            <td>{{ $sale->sale_amount }}</td>
                            <td>{{ $sale->unit_price }}</td>
                            <td>{{ date('d-m-Y h:i:s A', strtotime($sale->sale_date)) }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>


@endsection