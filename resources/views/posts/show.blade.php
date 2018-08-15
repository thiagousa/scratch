@extends('layouts.master')

@section('title', 'Show Post')


@section('content')
 
<div class="blog-post">
<h2 class="blog-post-title">{{$post->title}}</h2>
        <p class="blog-post-meta">January 1, 2014 by <a href="#">Mark</a></p>

        <p>{{$post->body}}</p>
        </div><!-- /.blog-post -->

      <nav>
        <ul class="pager">
          <li><a href="#">Previous</a></li>
          <li><a href="#">Next</a></li>
        </ul>
      </nav>
  

@endsection

