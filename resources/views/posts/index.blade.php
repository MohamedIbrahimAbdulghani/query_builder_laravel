<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>All Posts</title>
    <style>
        .delete_all {
            display: table;
            margin: auto;
        }
        .post {
            text-decoration: none;
            font-size: 20px;
            margin: auto;
            display: table;
            margin-top: 5px;
        }
        .post_body {
            width: 50%;
        }
    </style>
</head>
<body>

    <div class="container-fluid">
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Title</th>
            <th scope="col">Body</th>
            <th scope="col">Pro</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td >{{$post->title}}</td>
                    <td class="post_body">{{$post->body}}</td>
                    <td>
                    <a class="btn btn-secondary" href="{{route('post.edit', $post->id)}}" role="button">Edit</a>
                    <a class="btn btn-danger" href="{{route('post.delete', $post->id)}}" role="button">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>
        <!-- this is to make link to delete all posts from database but will counter id from 0 because used truncate -->
        <?php if(!empty($post)): ?>
            <a class="btn btn-danger delete_all" href="{{route('post.delete.all.truncate', '$post->id')}}" role="button">Delete All Posts</a>
            <a class="post" href="{{route('post.create')}}">Added New Post</a>
        <?php endif; ?>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>


