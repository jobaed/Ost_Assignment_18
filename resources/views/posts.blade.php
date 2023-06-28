{{-- Task - 9 --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Posts</title>
</head>

<body>

    <div class="container m-5 p-5">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Content</th>
                    <th scope="col">Category</th>
                    <th scope="col">Thumb</th>
                </tr>
            </thead>
            @foreach ($posts as $post)
                <tbody>
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->content }}</td>
                        <td> {{ $post->category->name }}</td>
                        <td> <img src="{{ $post->thumb }}" class="img-thumbnail" alt="{{ $post->thumb }}"></td>
                    </tr>
                </tbody>
            @endforeach
    
        </table>
    </div>

   



</body>

</html>
