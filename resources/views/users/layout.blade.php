<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Prueba Web</title>

    {!! Html::style('/assets/css/bootstrap.min.css') !!}

    <!-- Fonts -->
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.10/css/jquery.dataTables.min.css">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:300,700' rel='stylesheet' type='text/css'>

</head>
<body>

<nav class="navbar navbar-default" style="background: #337AB7">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="navbar-header">
                    <a class="navbar-brand" href="https://about.me/julianhernandez19" style="color: white" target="_blank">Julian Hernandez</a>
                </div>
            </div>
        </div>
    </div>
</nav>



@yield('content')


<!-- Scripts -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="//cdn.datatables.net/1.10.10/js/jquery.dataTables.min.js"></script>
    {!! Html::script('/assets/js/help.js') !!}
</body>
</html>