<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Font Awesome -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet"
    />
    <!-- MDB -->
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.css"
        rel="stylesheet"
    />

    <title>@yield('title')</title>
</head>
<body class="bg-black">
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="card mt-5 p-4 ">
                <div class="card-header bg-primary text-white"><h4 >Menu</h4></div>
                <div class="card-body">
                    <a href="{{route('designskill.index')}}"><button class="form-control mt-2 p-2 ">Design Skill</button></a>
                    <a href="{{route('codingskill.index')}}"><button class="form-control mt-2 p-2 ">Coding Skill</button></a>
                    <a href="{{route('knowledge.index')}}"><button class="form-control mt-2 p-2 ">Knowledge</button></a>
                    <a href="{{route('blog.index')}}"><button class="form-control mt-2 p-2 ">Blog</button></a>
                    <a href="{{route('category.index')}}"><button class="form-control mt-2 p-2 ">Category</button></a>
                    <a href=""><button class="form-control mt-2 p-2 ">Book_Library</button></a>
                </div>
            </div>
        </div>
        <div class="col-md-9">
                    @yield('content')

        </div>
    </div>
</div>

<script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.10.0/mdb.min.js"
></script>
</body>
</html>
