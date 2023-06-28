{{-- Task - 12 --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Latest Posts</title>
</head>

<body>

    <div class="container mx-5 px-5">
        <h1 class="text-center pt-5">Latest Posts</h1>
        @foreach ($categories as $category)
            <div class="row mx-5 pb-5">
                <div class="col-md-8">
                    <h3 class="py-3">Category: <span >{{ $category->name }}</span></h3>
                    @if ($category->latestPost)
                        <div class="card" style="">
                            <img src="{{ $category->latestPost->thumb }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">{{ $category->latestPost->title }}</h5>
                                <p class="card-text">{{ $category->latestPost->content }}</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    @else
                        <p>No posts found for this category.</p>
                    @endif

                </div>
            </div>
        @endforeach

    </div>





</body>

</html>
