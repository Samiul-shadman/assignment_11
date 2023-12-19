@extends('layout.app')

@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <h3>Add Product</h3>

                    <form method="post" action="{{ route('store_products') }}">
                        @csrf
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text"  class="form-control" name="name" id="">
                            </div>

                            <div class="form-group">
                                <label for="name">Amount</label>
                                <input type="number"  class="form-control" name="amount" >
                            </div>

                            <div class="form-group">
                                <label for="name">Unit Price</label>
                                <input type="number"  class="form-control" name="unit_price">
                            </div>
                        </div>

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{ route('products') }}">  <button type="button" class="btn btn-primary">Go Back</button> </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
