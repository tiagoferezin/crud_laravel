<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8"/>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CRUD - Laravel</title>

    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"/> -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>

    <link href="https://fonts.googleapis.com/css?family=Fredoka+One" rel="stylesheet"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- Font Awesome -->
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"> -->
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/css/mdb.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.js" integrity="sha256-PtzTX1ftmEmj8YUiAX0wTIQ+ddTAGVt2MiLMsGsAMxM=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" integrity="sha256-u7MY6EG5ass8JhTuxBek18r5YG6pllB9zLqE4vZyTn4=" crossorigin="anonymous"></script>

    @yield('css-view')
</head>

<body>

    <div class="row">

        @include('templates.menu-lateral')

        <main>
            <div class="container-fluid">
                <section id="view-conteudo" style="margin-left: 20px;">
                    @yield('conteudo-view')
                </section>
            </div>
        </main>
    </div>

    <!-- jQuery library -->
    <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script> -->

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.4/js/mdb.min.js"></script>

    <script type="text/javascript">
            // SideNav Button Initialization
            $(".button-collapse").sideNav();
            // SideNav Scrollbar Initialization
            var sideNavScrollbar = document.querySelector('.custom-scrollbar');
            Ps.initialize(sideNavScrollbar);            
        </script>
        @yield('js-view')

    </body>
    </html>