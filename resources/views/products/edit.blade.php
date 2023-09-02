@extends('master.layout')

@section('content')
<div class="row">
    <div class="col-lg-12 text-center">
        <h2>Edit Product</h2>
        
    </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('products.update',$product->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $product->name }}" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                <textarea class="form-control nicEdit" style="height:150px;resize:none" name="description" placeholder="Description">@php echo $product->description @endphp</textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" value="{{ $product->price }}" class="form-control" placeholder="Price">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="photo" class="form-control" placeholder="photo">
                <img src="/image/{{ $product->photo }}" width="300px">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-5 text-center d-flex align-items-center justify-content-end gap-2">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Cancel</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </div>

</form>
@endsection