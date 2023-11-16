<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>All Posts</title>
</head>
<style>
    .btn-primary {
        display: block;
        margin: auto;
    }
    a {
    text-decoration: none;
    font-size: 20px;
    margin: auto;
    display: table;
}

</style>
<body>
        <div class="container-fluid">
        <h1>Create New Post</h1>


<form action="{{route('post.insert')}}" method="POST">
    @csrf
    <input type="text" name="title" placeholder="Enter Title" class="form-control mb-2" >
    <input type="text" name="body" placeholder="Enter Body"  class="form-control mb-2">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="index">Show All Posts</a>
</form>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


