@extends('layouts.master')

@section('title', 'Create Post')


@section('content')

<form method="POST" action="/posts">
    @csrf
<div class="form-group">
    <label for="Title"> Title</label>
    <input type="text" class="form-control" id="title" name='title'>
      </div>
      <div class="form-group">
        <label for="Body">Body</label>
        <textarea class="form-control" id="body" rows="3"  name='body'></textarea>
      </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

  

@endsection

