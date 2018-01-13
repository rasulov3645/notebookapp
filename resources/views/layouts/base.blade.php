<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>NoteBook App</title>
    <link href="{{asset('dist/css/main.css')}}" rel="stylesheet" >
    <link href="{{asset('dist/css/bootstrap.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <nav class="navbar  navbar-dark bg-primary">
            <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#navbar-header" aria-controls="navbar-header">
                &#9776;
            </button>
            <div class="collapse navbar-toggleable-xs" id="navbar-header">
                <a class="navbar-brand" href="#">NoteBook App</a>

        </nav>
        <!-- /navbar -->
        <!-- Main component for call to action -->
        @yield('content')
    </div>
    <!-- /container -->

    <script src="{{asset('dist/js/jquery3.min.js')}}"></script>
    <script src="{{asset('dist/js/bootstrap.js')}}"></script>
</body>
</html>
