@extends('layouts.header')
@section('content')
    <div class="container">       
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        <a href="/table" class="btn btn-warning">Show Blogs</a><br><br>
        <form action="{{ route('save-blog')}}" method="POST">
            @csrf
            <div class="form-group">
              <label>Post Name</label>
              <input type="text" class="form-control" name="post_name" placeholder="Post Name">
            </div>
            <div class="form-group">
              <label>Post Description</label>
              <input type="text" class="form-control" name="post_description" placeholder="Post Description">
            </div>
            <div class="form-group">
                <label>Post Author</label>
                <input type="text" class="form-control" name="post_author"  placeholder="Post Author">
              </div>
              <div class="form-group">
                <label>Post Created</label>
                <input type="text" class="form-control" name="post_created" placeholder="Post Created">
              </div> <br><br>
              <button class="btn btn-primary">Save Blog</button>
          </form>
    </div>
@endsection