@extends('layouts.app')

@section('title','create')

@section('content')
<div class="row">
  <div class="col-lg-6 mx-auto">

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li> {{$error}} </li>
            @endforeach
        </ul>
    </div>
    @endif

  <form method="POST" action="{{ route('posts.store')}}">
    @csrf
        <div class="form-group">
        <label for="post-title">title</label>
        <input type="text" value=" {{ old('title') }} " name="title" class="form-control" id="post-title" aria-describedby="emailHelp" placeholder="title">
        </div>
        <div class="form-group">
        <label for="post-description">description</label>
        <input type="text" value=" {{ old('description') }} " name="description" class="form-control" id="post-description" placeholder="description">
        </div>
        <div class="form-group">
            <label for="post-price">price</label>
            <input type="text" value=" {{ old('price') }} " name="price" class="form-control" id="post-price" placeholder="price">
            </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
</div>
@endsection