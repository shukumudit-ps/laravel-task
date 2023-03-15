@extends('layouts.header')
@section('content')
@if(session()->has('message'))
<div class="alert alert-success">
{{ session()->get('message') }}
</div>
@endif

    <div class="container">
        <a href="{{ route('post')}}" class="btn btn-warning">Create blogs</a><br><br>
    <table class="table table-hover ">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Post Name</th>
            <th scope="col">Post Description</th>
            <th scope="col">Post Author</th>
            <th scope="col">Post Created</th>
          </tr>
        </thead>
    
        <tbody>
            <?php $counter = 1; ?>
            @foreach ($Post as $posts)
            <tr>
                <td>{{$counter}}</td>
                <td>{{$posts->post_name}}</td>
                <td>{{$posts->post_description}}</td>
                <td>{{$posts->post_author}}</td>
                <td>{{$posts->post_created}}</td>
              </tr>
              <?php   $counter++; ?>
            @endforeach
        </tbody>
      </table>
    </div>
@endsection