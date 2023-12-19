@extends('layout.app')

@section('content')

    <div class="container">
        <div class="row">
            <h1>Sales</h1>
            <hr>
        </div>
        <div class="row">
            <div class="col">
                <div class="card ">
                    <div class="card-body bg-dark text-white">
                        <h2>Today</h2>              
                        <h5>Revenue: {{ $sales_today->revenue_today }}</h5> 
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card ">
                    <div class="card-body bg-light">
                        <h2>Yesterday</h2>
                        <h5>Revenue: {{ $sales_yesterday->revenue_yesterday }}</h5>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card ">
                    <div class="card-body bg-dark text-white">
                        <h2>This Month</h2>
                        <h5>Revenue: {{ $sales_this_month->revenue_this_month }}</h5>                       
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="card ">
                    <div class="card-body bg-light">
                        <h2>Last Month</h2>                        
                        <h5>Revenue: {{ $sales_last_month->revenue_last_month }}</h5>   
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection