@extends('master.layout')

@section('content')
<div class="container justify-content-center align-items-center">
    <div class="row">

        <div class="col-lg-12 mb-5 d-flex justify-content-between">

            <h2>Show Product</h2>
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>

    </div>

     

    <div class="row">
    <div class="col-xs-18 col-sm-6 col-md-3">
                <div class="thumbnail">
                    <img src="/image/{{ $product->photo }}" width="500px" alt="">
                    <div class="caption">
                        <h4> {{ $product->name }}</h4>
                        <p>@php echo $product->description @endphp</p>
                        <p><strong>Price: </strong> {{ $product->price }}$</p>
                       </div>
                </div>
            </div>
       

    </div>
    </div>

@endsection