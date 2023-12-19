@extends('layout.app')

@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary">
                    <h3>Add Product</h3>

                    <form method="post" action="{{ route('save_sell_product') }}">
                        @csrf
                        
                        <div class="card-body">
                        <!--  -->
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="hidden"  class="form-control" name="id" value="{{ $data->id }}">
                                <input type="text" readonly class="form-control" name="name" value="{{ $data->name }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Unit Price</label>
                                <input type="text" readonly class="form-control" name="unit_price" value="{{ $data->unit_price }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Amount</label>
                                <input type="number" readonly class="form-control" name="amount" value="{{ $data->amount }}">
                            </div>

                            <div class="form-group">
                                <label for="name">Sell Amount</label>
                                <input type="number" class="form-control" name="sell_amount" >
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
