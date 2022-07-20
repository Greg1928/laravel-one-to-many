
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>{{$post->title}}</h1>
        </div>
        <div class="card-body">
            <div>
                {{$post->content}}
            </div>
        </div>
        <div class="mb-3">
            <a href="{{route('admin.posts.index')}}" class="btn btn-primary">Show all Posts</a>
        </div>
    </div>
</div>
@endsection

