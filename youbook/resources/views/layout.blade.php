<DOCTYPE html>
<html lang = 'en'>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <title>@yield('title', 'YouBook')</title>
    </head>
    <header>
        <nav class="navbar navbar-expand-lg bg-info-subtle">
            <div class="container-fluid row d-flex justify-content-around align-items-center ">
                <div class="col-1">
                    <a class="navbar-brand" href=""><h2><span class=" text-primary">You</span><span class="text-secondary">Book</span></h2></a>
                </div>
                <div class="col-5 text-end" id="navbarTogglerDemo03">
                    <a class="btn btn-outline-success" href="logout.php">Log out</a>
                </div>
            </div>
        </nav>
    </header>
    <body>
        @yield('content')
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>