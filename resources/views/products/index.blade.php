@extends('master.layout')

@section('content')
<div class="row justify-content-center ">
    <div class="col-lg-12 d-flex align-items-center justify-content-between">
        <h2>Laravel Product CRUD with Image Upload </h2>
        <a class="btn btn-success" href="{{ route('products.create') }}"> <i class="fa fa-plus"></i>&nbsp;&nbsp;Create New Product</a>

    </div>
</div>

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif

<table class="text-center table table-bordered">
    <tr>
        <th>No</th>
        <th>Image</th>
        <th>Name</th>
        <th>Description</th>
        <th>price</th>
        <th colspan="3">Action</th>
    </tr>
    @foreach ($products as $product)
    <tr>
        <td>{{ ++$i }}</td>
        <td><img src="/image/{{ $product->photo }}" style="width: 50px;height: 50px; "></td>
        <td>{{ $product->name }}</td>
        <td>@php echo $product->description @endphp</td>
        <td>{{ $product->price }}</td>
        <td>
            <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                <a class="btn btn-info" href="{{ route('products.show',$product->id) }}">
                    <i class="fa fa-eye text-white"></i>
                </a>

                <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">
                    <i class="fa fa-pencil text-white"></i>
                </a>

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">
                    <i class="fa fa-trash text-white"></i>
                </button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{!! $products->links() !!}
@endsection