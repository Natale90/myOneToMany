<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>test print one-to-many</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
    </head>
    <body>


        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>
                        home
                    </h2>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul>

                        @foreach ($posts as $post)
                            <li>
                                Post Title: <strong>{{ $post -> title }}</strong>
                            </li>

                            <p>
                                Post Content: <strong>{{ $post -> text }}</strong>
                            </p>

                            <p>
                                Tag Name:<strong> {{ $post -> tag -> name}} </strong> <br>
                                Tag description:<strong> {{ $post -> tag -> description }} </strong>
                            </p>

                            <p>
                                Like: {{ $post -> detail -> like }}
                            </p>

                            <p>
                                Argument: {{ $post -> detail -> argument }}
                            </p>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>

    </body>
</html>
