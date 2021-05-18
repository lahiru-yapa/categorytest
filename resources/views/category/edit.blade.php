@extends('category.layout')

@section('content')
<div class="row" >
        <div class="col-lg-12 margin-tb">
            <div class="pull-right">
                <h1>category </h1>
            </div>
        </div>
    </div>
<form action="{{route('category.update',$category->id)}}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Category</label>
    <input type="text" class="form-control" name="name" value="{{$category->name}}">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Discription</label>
    <input type="text" class="form-control" name="detail" value="{{$category->detail}}">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
  <a class="btn btn-primary" href="{{route('category.index')}}">Back</a>
</form>
@endsection