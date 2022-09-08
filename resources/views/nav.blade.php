<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Play</title>
    <link rel="shortcut icon" href="img/Recurso 1.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
  </head>
  <body style="background-color: purple">
    <section class="col-12 d-flex">
        <nav class="w-100 d-flex flex-wrap justify-content-end bg-success p-2 gap-2 shadow-lg">
             <p class="text-white fs-5">{{Auth()->User()->name}}</p>
             <form action="{{route('logout')}}" method="post">
              @csrf
              <button class="bi bi-person-circle text-white btn"></button>
            </form>

        </nav>
    </section>
    <section class="col">
        @yield('content')
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>