@extends('layouts.master')

@section('title')
   Laravel Shopping Cart
@endsection

@section('content')
   <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
            <img src="https://img.buzzfeed.com/buzzfeed-static/static/enhanced/webdr02/2013/7/31/12/grid-cell-12788-1375287846-44.jpg" alt="...">
            <div class="caption">
                <h3>Product Title</h3>
                <p class="description">lorem akjskfkdsaj a fjkadsjfldjafjdslafjdflk d lkafjdafjdslkfjslaj kaljfkdjfdsi</p>
                <div class="clearfix">
                  <div class="pull-left price">$12</div>
                  <a href="#" class="btn btn-success pull-right" role="button">Add to Cart</a>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection