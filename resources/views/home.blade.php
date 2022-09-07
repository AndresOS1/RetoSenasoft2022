@extends('nav')
@section('content')
    <section class="col-12 d-flex justify-content-center align-items-center flex-column " style="height: 100vh;">
        <div class="col-5  h-25 text-break d-flex justify-content-center flex-wrap flex-column">
            <form action="{{route('crearPartida')}}" class="h-25 d-flex" method="POST">
                @csrf
                <button class="btn btn-success w-100 h-100 " >crear partida</button>
            </form>

            <button class="btn btn-success h-25 mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">introducir
                codigo</button>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ingrese el codigo para entrar a la partida</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="w-100">
                        <label for="">introduce el codigo</label>
                        <input class="form-control" type="text" name="" class="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-success">unirse a la partida</button>
                </div>
            </div>
        </div>
    </div>
@endsection
