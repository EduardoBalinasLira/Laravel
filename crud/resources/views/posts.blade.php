<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
    <section class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">All Posts</div>
                    @if(Session::has('post_delete'))
                        <div class="alert alert-success" role="alert">
                            {{Session::get('post_delete')}}
                        </div>               
                    @endif
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Post title</th>
                                    <th>Post body</th>
                                    <th>Action</th>
                                </tr>

                            </thead>

                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td> {{$post->title}} </td>
                                        <td> {{$post->body}} </td>
                                        <td>
                                            <a href="/posts/{{$post->id}}" class="btn btn-success">View</a>
                                            <a href="/edit-post/{{$post->id}}" class="btn btn-info">Edit</a>
                                            <a href="/delete-post/{{$post->id}}" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
</body>
</html>