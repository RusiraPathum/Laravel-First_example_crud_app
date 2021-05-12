<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

<section class="container mt-5">

    @if(\Illuminate\Support\Facades\Session::has('post_created'))
        <div class="alert alert-success" role="alert">
            {{\Illuminate\Support\Facades\Session::get('post_created')}}}
        </div>
    @endif
    <form action="{{route('post.create')}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="email">Post Title</label>
            <input type="text" class="form-control" placeholder="Enter Post Title" name="title" id="title">
        </div>
        <div class="form-group">
            <label for="pwd">Post Description</label>
            <textarea class="form-control" placeholder="Enter Post Description" name="body" id="body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Add Post</button>
    </form>
</section>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
