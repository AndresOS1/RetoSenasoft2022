<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Play</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body class="bg-light bg-gradient">
    {{-- @include('sweetalert::alert') --}}
     <section class="col-12 d-flex flex-column flex-wrap">
             <div class="w-100 d-flex p-2 ">
                     <div class="w-100 border p-4 d-flex flex-row shadow-lg rounded-4 justify-content-between bg-gradient" style="background: purple;">
                          <div class="w-25 d-flex justify-content-center">
                              <section class="w-25 d-flex flex-column align-items-center text-break justify-content-center">
                                   <i class="bi bi-person-circle d-flex w-25  justify-content-center text-white fs-1"></i>
                                   <p class="d-flex text-white">{{$player_card[0][0]}}</p>
                              </section>
                              <section class="" style="width:15%">
                                <section class="w-100 border d-flex justify-content-center rounded-2 shadow-lg bg-white">
                                    <p class="fs-3">8</p>
                                </section>
                              </section>
                          </div>
                          <div class="w-25 d-flex justify-content-center">
                            <section class="w-25 d-flex flex-column align-items-center text-break justify-content-center">
                                <i class="bi bi-person-circle d-flex w-25  justify-content-center text-white fs-1"></i>
                                <p class="d-flex text-white">{{$player_card[1][0]}}</p>
                           </section>
                           <section class="" style="width:15%">
                             <section class="w-100 border d-flex justify-content-center rounded-2 shadow-lg bg-white">
                                 <p class="fs-3">8</p>
                             </section>
                           </section>
                          </div>
                          <div class="w-25 d-flex justify-content-center">
                            <section class="w-25 d-flex flex-column align-items-center text-break justify-content-center">
                                <i class="bi bi-person-circle d-flex w-25 fs-1 justify-content-center text-white"></i>
                                <p class="d-flex text-white">{{$player_card[2][0]}}</p>
                           </section>
                           <section class="" style="width:15%">
                             <section class="w-100 border d-flex justify-content-center rounded-2 shadow-lg bg-white">
                                 <p class="fs-3">8</p>
                             </section>
                           </section>
                          </div>
                          <div class="w-25 d-flex justify-content-center">
                            <section class="w-25 d-flex flex-column align-items-center text-break justify-content-center">
                                <i class="bi bi-person-circle d-flex w-25 fs-1 justify-content-center text-white"></i>
                                <p class="d-flex text-white">{{$player_card[3][0]}}</p>
                           </section>
                           <section class="" style="width:15%">
                             <section class="w-100 border d-flex justify-content-center rounded-2 shadow-lg bg-white">
                                 <p class="fs-3">8</p>
                             </section>
                           </section>
                          </div>
                     </div>
             </div>


             <section class="w-100 d-flex h-auto p-5 justify-content-center gap-5 flex-wrap flex-row "  >
               {{-- @foreach($cartas as $c) --}}
               <div id="zonasDeSoltar" class="col-12 d-flex justify-content-around flex-row h-100">
                <div class="border col d-flex justify-content-center rounded-4" >
                    <div class="zona-de-soltar"style="width: 200px; height:70vh;"  value="">A</div>
                </div>
                
                <div class="border col d-flex justify-content-center rounded-4">
                    <div class="zona-de-soltar" style="width: 200px; height:70vh;" value="">B</div>
                </div>                    
                <div class="border col d-flex justify-content-center rounded-4">
                    <div class="zona-de-soltar" style="width: 200px; height:70vh;" value="">C</div>
                </div>

                <div class="border col d-flex justify-content-center rounded-4">
                    <div class="zona-de-soltar" style="width: 200px; height:70vh;" value="">D</div>
                </div>              
              </div>

              <div  class="col-3 d-flex justify-content-around flex-row h-100 flex-wrap">
               <div class="card p-2 shadow-lg" style="width: 14rem; height:24rem" draggable="true">
                <h5 class="card-title" style="color: purple;">Carta de {{$player_card[0][0]}}</h5>
                <p>{{$player_card[0][1][0]->carta}}</p>
                <img src="{{$player_card[0][1][0]->img_carta}}" class="img-fluid" width="300px" alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="color: purple;">{{$player_card[0][1][0]->modelo}}</h5>
                  <select class="form-select form-select-lg mb-3  jugadorIni" aria-label=".form-select-lg example" name="" id="jugador1" style="font-size:8pt ">
                    <option selected>Seleccione la opcion a comparar</option>
                    <option id="op1-jug1" value="1" class="">
                    <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                        {{-- <p>Cilingraje:</p> --}}
                        <p>{{$player_card[0][1][0]->cilindraje}}</p>
                    </div>
                    </option>
                    <option value="2">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>cilindros :</p> --}}
                            <p>{{$player_card[0][1][0]->cilindros}}</p>
                        </div>
                    </option>
                    <option value="3">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>Potencias:</p> --}}
                            <p>{{$player_card[0][1][0]->potencia}}</p>
                        </div>
                    </option>

                    <option value="4">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>revoluciones:</p> --}}
                            <p>{{$player_card[0][1][0]->revoluciones}}</p>
                        </div>
                    </option>

                    <option value="5">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>peso:</p> --}}
                            <p>{{$player_card[0][1][0]->peso}}</p>
                        </div>
                    </option>


                </select>
                  {{-- <a href="#" class="btn btn-primary" style="background: purple;">Go somewhere</a> --}}
                </div>
              </div>
               <div class="w-100 d-flex ">
                <p></p>
            </div>

            {{-- segunda card /////////////////////////////////////////////////////////////////////////////////////////////////--}}
            <div class="card p-2 shadow-lg" style="width: 14rem; height:24rem" draggable="true">
                <h5 class="card-title" style="color: purple;">Carta de {{$player_card[1][0]}}</h5>
                <p>{{$player_card[0][1][1]->carta}}</p>
                <img src="{{$player_card[0][1][1]->img_carta}}" class="img-fluid"   alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="color: purple;">{{$player_card[0][1][1]->modelo}}</h5>
                  <select class="form-select form-select-lg mb-3 jugadores" aria-label=".form-select-lg example" name="" id="jugador2" style="font-size:8pt ">
                    <option selected>Seleccione la opcion a comparar</option>
                    <option  value="1" class="">
                    <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                        {{-- <p>Cilingraje:</p> --}}
                        <p>{{$player_card[0][1][1]->cilindraje}}</p>
                    </div>
                    </option>
                    <option value="2">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>cilindros :</p> --}}
                            <p>{{$player_card[0][1][1]->cilindros}} </p>
                        </div>
                    </option>
                    <option value="3">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>Potencias:</p> --}}
                            <p>{{$player_card[0][1][1]->potencia}}</p>
                        </div>
                    </option>

                    <option value="4">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>revoluciones:</p> --}}
                            <p>{{$player_card[0][1][1]->revoluciones}}</p>
                        </div>
                    </option>

                    <option value="5">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>peso:</p> --}}
                            <p>{{$player_card[0][1][1]->peso}}</p>
                        </div>
                    </option>


                </select>
                  {{-- <a href="#" class="btn btn-primary" style="background: purple;">Go somewhere</a> --}}
                </div>
              </div>

              {{-- tercera carta //////////////////////////////////////////////////////////////////////////--}}
              <div class="card p-2 shadow-lg" style="width: 14rem; height:24rem" draggable="true">
                <h5 class="card-title " style="color: purple;">Carta de {{$player_card[2][0]}}</h5>
                <p>{{$player_card[0][1][2]->carta}}</p>
                <img src="{{$player_card[0][1][2]->img_carta}}" class="img-fluid"   alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="color: purple;">{{$player_card[0][1][2]->modelo}}</h5>
                  <select class="form-select form-select-lg mb-3 jugadores" aria-label=".form-select-lg example" name="" id="jugador3" style="font-size:8pt ">
                    <option selected>Seleccione la opcion a comparar</option>
                    <option value="1">
                    <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                        {{-- <p>Cilingraje:</p> --}}
                        <p>{{$player_card[0][1][2]->cilindraje}}</p>
                    </div>
                    </option>
                    <option value="2">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>cilindros :</p> --}}
                            <p>{{$player_card[0][1][2]->cilindros}}</p>
                        </div>
                    </option>
                    <option value="3">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>Potencias:</p> --}}
                            <p>{{$player_card[0][1][2]->potencia}}</p>
                        </div>
                    </option>

                    <option value="4">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>revoluciones:</p> --}}
                            <p>{{$player_card[0][1][2]->revoluciones}}</p>
                        </div>
                    </option>

                    <option value="5">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>peso:</p> --}}
                            <p>{{$player_card[0][1][2]->peso}}</p>
                        </div>
                    </option>


                </select>
                  {{-- <a href="#" class="btn btn-primary" style="background: purple;">Go somewhere</a> --}}
                </div>
              </div>
                  
               {{-- @endforeach --}}

            {{-- cuarta carta --}}
            <div class="card p-2 shadow-lg" style="width: 14rem; height:24rem" draggable="true">
                <h5 class="card-title" style="color: purple;">Carta de {{$player_card[3][0]}}</h5>
                <p>{{$player_card[0][1][3]->carta}}</p>
                <img src="{{$player_card[0][1][3]->img_carta}}" class="img-fluid"   alt="...">
                <div class="card-body">
                  <h5 class="card-title" style="color: purple;">{{$player_card[0][1][3]->modelo}}</h5>
                  <select class="form-select form-select-lg mb-3  jugadores" aria-label=".form-select-lg example" name="" id="jugador4" style="font-size:8pt ">
                    <option selected>Seleccione la opcion a comparar</option>
                    <option value="1" class="">
                    <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                        {{-- <p>Cilingraje:</p> --}}
                        <p>{{$player_card[0][1][3]->cilindraje}}</p>
                    </div>
                    </option>
                    <option value="2">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>cilindros :</p> --}}
                            <p>{{$player_card[0][1][3]->cilindros}}</p>
                        </div>
                    </option>
                    <option value="3">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>Potencias:</p> --}}
                            <p>{{$player_card[0][1][3]->potencia}}</p>
                        </div>
                    </option>

                    <option value="4">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>revoluciones:</p> --}}
                            <p>{{$player_card[0][1][3]->revoluciones}}</p>
                        </div>
                    </option>

                    <option value="5">
                        <div class="w-100 d-flex justify-content-between flex-wrap flex-row">
                            {{-- <p>peso:</p> --}}
                            <p>{{$player_card[0][1][3]->peso}}</p>
                        </div>
                    </option>


                </select>
                  {{-- <a href="#" class="btn btn-primary" style="background: purple;">Go somewhere</a> --}}
                </div>
              </div>
                  
            </div>
           
                
                 
             </section>
            
         </section>
     </section>
     
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

    
     <script src="{{asset('js/logica.js')}}"></script>
     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
  </body>
</html>