@extends('layouts.master')

@section('title', 'List Post')


@section('content')

 
@foreach ($posts as $post)  
<div class="blog-post">
<a href="{{'posts/'.$post->id}}"><h2 class="blog-post-title">{{$post->title}}</h2></a>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>
        </div><!-- /.blog-post -->

@endforeach 
      <nav>
        <ul class="pager">
          <li><a href="#">Previous</a></li>
          <li><a href="#">Next</a></li>
        </ul>
      </nav>
  

@endsection

