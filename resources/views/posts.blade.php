<?php
use Illuminate\Support\Facades\Session;
?>

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Posts</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<section class="container mt-5">
    <h1>All Posts</h1> <a href="/add-post" class="btn btn-info">Add New</a>

    @if(Session::has('post_deleted'))
        <div class="mb-3 mt-3 alert alert-success" role="alert">
            {{Session::get('post_deleted')}}
        </div>
    @endif
    <table class="table table-hover">
        <thead>
        <tr>
            <th>ID</th>
            <th>Post Title</th>
            <th>Post Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td><a href="/posts/{{$post->id}}" class="btn btn-success">Details</a></td>
                    <td><a href="/edit-post/{{$post->id}}" class="btn btn-secondary">Edit</a></td>
                    <td><a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach

        </tbody>
    </table>

</section>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
