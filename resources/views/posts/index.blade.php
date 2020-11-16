@extends('layouts.app')

@section('title','list')

@section('content')
<a href="{{ route('posts.create') }}" class="btn btn-success">create</a>

@if(session()->get('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
    </div>
@endif

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
      </tr>
    </thead>
    <tbody>
        @foreach($posts as $post)
      <tr>
        <th scope="row">{{ $post->id }}</th>
        <td>{{ $post->title }}</td>
        <td>{{ $post->description }}</td>
        <td>{{ $post->price }}</td>
        <td class="table-buttons">
            <a href="{{ route('posts.show',$post) }}" class="btn btn-success">DETAY
            </a>
            <a href="{{ route('posts.edit',$post) }}" class="btn btn-primary">DÜZENLE
            </a>
            <form action="{{ route('posts.destroy',$post) }}" method="POST">
                @csrf
                @method('DELETE')
                <button style="display: flex" type="submit" class="btn btn-danger">SİL
                </button>
            </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
@endsection