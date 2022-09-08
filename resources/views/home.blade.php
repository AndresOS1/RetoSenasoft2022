@extends('nav')
@section('content')
@include('sweetalert::alert')
<div class="w-100 d-flex justify-content-center">
    <div class="col-3 h-25 mb-2">
        <img src="img/Recurso 1.png" alt="" class="img-fluid">
    </div>
</div>

    <section class="col-12 d-flex justify-content-center align-items-center flex-column " style=" ">

        <div class="col-5  h-25 text-break d-flex justify-content-center flex-wrap flex-column">

            <form action="{{route('crearPartida')}}" class="h-25 d-flex" method="POST">
                @csrf
                <button class="btn  w-100 h-100 bg-gradient border" style="background-color:#FCA800 " >crear partida</button>
            </form>

            <button class="btn h-25 bg-gradient border mt-2" style="background-color:#FCA800 "data-bs-toggle="modal" data-bs-target="#exampleModal">introducir
            codigo</button>    
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('entorno')}}" method="POST">
                    @csrf
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ingrese el codigo para entrar a la partida</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="w-100">
                            <label for="">introduce el codigo</label>
                            <input class="form-control" type="text" name="password" class="">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button  class="btn btn-success" type="submit">unirse a la partida</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
