@extends('layouts.app')

@section('title','show'.$post->title)

@section('content')

<div class="card">
    <div class="card-body">
      <h3> {{ $post->title }} </h3>
      <p> {{ $post->description }}  </p>
      <p> {{ $post->price }}  </p>
    </div>
  </div>

@endsection