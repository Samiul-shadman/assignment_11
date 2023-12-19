@extends('layout.app')

@section('content')

<div class="container">
<h3>Products List</h3>
<hr>
    <div class=container>
        <div class="row w-25 m-t-1">
            <a href="{{ route('add_products') }}"><button class="btn btn-primary" > Add Product</button></a>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <th>Products Id</th>
                        <th>Name</th>
                        <th>Amount</th>
                        <th>Price</th>
                        <th>Action</th>
                    </tr>
                    <tbody>
                        @foreach( $products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->name }}</td>
                            <td>{{ $product->amount }}</td>
                            <td>{{ $product->unit_price }}</td>
                            <td>
                                <a href="{{ route('sell_product', $product->id  ) }}"><button class="btn btn-primary" >Sell</button></a>
                                <a href="{{ route('update_product', $product->id ) }}"><button class="btn btn-success" >Update</button></a>                               
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </thead>
            </table>
        </div>
    </div>
</div>


@endsection