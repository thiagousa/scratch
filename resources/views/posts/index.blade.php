@extends('layouts.master')

@section('title', 'Page Title')


@section('content')

 
@foreach ($posts as $post)  
<div class="blog-post">
<h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

        <p>{{$post->body}}</p>
        </div><!-- /.blog-post -->

@endforeach 
      <nav>
        <ul class="pager">
          <li><a href="#">Previous</a></li>
          <li><a href="#">Next</a></li>
        </ul>
      </nav>
  

@endsection

