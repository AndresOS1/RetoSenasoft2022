<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
        <!-- Font Icon -->
        <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

        <!-- Main css -->
        <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body style="background-color: purple">
    @include('sweetalert::alert')
        <div class="main pt-4">

         <!-- Sign up form -->
         <form class="signup" action="{{route('Register')}}" method="POST">
            @csrf
             <div class="container">
                 <div class="signup-content ">
                     <div class="signup-form">
                         <h2 class="form-title">Registro</h2>
                         <form method="POST" class="register-form" id="register-form">
                             <div class="form-group">
                                 <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                 <input type="text" name="name" id="name" placeholder="Nombre"/>
                             </div>
                             <div class="form-group">
                                 <label for="email"><i class="zmdi zmdi-email"></i></label>
                                 <input type="email" name="email" id="email" placeholder="Email"/>
                             </div>
                             <div class="form-group">
                                 <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                 <input type="password" name="password" id="pass" placeholder="Contraseña"/>
                             </div>

                             <div class="form-group">
                                 <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                 <label for="agree-term" class="label-agree-term"><span><span></span></span>Acepto los terminos y<a href="#" class="term-service"> los servicios</a></label>
                             </div>
                             <div class="form-group form-button">
                                 <input type="submit" name="signup" id="signup" class="form-submit" value="Register" style="background:purple;"/>
                             </div>
                         </form>
                     </div>
                     <div class="signup-image">
                         <figure><img src="img/Recurso 1.png" alt="sing up image"></figure>
                         
                     </div>
                 </div>
             </div>
            </form>
 
         <!-- Sing in  Form -->
         
         {{-- <div class="col-8 m-auto">
            <section class="w-100 border shadow-lg d-flex h-5 rounded-5 bg-white">
                <article class="w-50 h-100 ">
                    <img src="img/carro.jpg" alt="" class="img-fluid rounded-5">
                </article>
                <article class="w-50 h-100 p-2 rounded">
                     <form action="{{route('Login')}}" class="w-100 h-100" method="POST">
                        @csrf
                        <div class="w-100">
                            <h1 class="text-success">Login</h1>
                        </div>
                         <div class="w-100">
                            <input type="text" class="form-control w-100 rounded-5" name="email">
                            <label for="" class="text-success px-3">Ingrese email.</label>
                         </div>
                         <div class="w-100 mt-3">
                            <input type="text" class="form-control w-100 rounded-5" name="password" >
                            <label for=""class="text-success px-3">Password.</label>
                         </div>
                         <a href="{{route('verRegister')}}" class="nav-link px-3" >no te has registrado? Registrate</a>
                         <div class="w-100 mt-3">
                            <button class="btn btn-success w-100 rounded-5">Entrar</button>
                         </div>
                     </form>
                </article>
            </section>
         </div> --}}
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>