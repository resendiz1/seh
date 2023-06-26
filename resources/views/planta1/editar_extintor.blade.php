@extends('plantilla')

@section('contenido')


<div class="container">


    <form action="#">

        <div class="row mt-3 bg-white shadow-sm p-5 justify-content-center">
            <div class="col-12 text-center mb-4">
                <h2>Editar Extintor Planta 1</h2>
                <a href="{{route('ficha_extintor')}}">
                    <i class="fa fa-arrow-circle-left"></i>
                    <br>
                    Regresar
                </a>
            </div>

            <div class="col-2">
                <div class="form-group">
                    <label for="">Número</label>
                    <input type="number" min="1" class="form-control">
                </div>
            </div>

            <div class="col-5">
                <div class="form-group">
                    <label for="">Ubicación</label>
                    <input type="text" class="form-control">
                </div>
            </div>

            <div class="col-2">
                <div class="form-group">
                    <label for="">Capaidad Kg</label>
                    <input type="number" min="1" class="form-control">
                </div>
            </div>

            <div class="col-3">
                <div class="form-group">
                    <label for="">Agente extintor</label>
                    <input type="text"  class="form-control">
                </div>
            </div>

            <div class="col-4 mt-3">
                <div class="form-group">
                    <label for="">Tipo</label>
                    <input type="text"  class="form-control">
                </div>
            </div>

            
            <div class="col-4 mt-3">
                <div class="form-group">
                    <label for="">Vencimiento por antiguedad</label>
                    <input type="date"  class="form-control">
                </div>
            </div>

            <div class="col-4 mt-3">
                <div class="form-group">
                    <label for="">Estado</label>
                    <input type="text"  class="form-control">
                </div>
            </div>

            <div class="col-5 mt-3">
                <div class="form-group">
                    <label for="">Observaciones</label>
                    <input type="text"  class="form-control">
                </div>
            </div>
            
            <div class="col-4 mt-3">
                <div class="form-group">
                    <label for="">Fecha de fabricación</label>
                    <input type="date"  class="form-control">
                </div>
            </div>



            <div class="col-3 mt-3">
                <div class="form-group">
                    <label for="">Señaletica</label>
                    <input type="text"  class="form-control">
                </div>
            </div>




            <div class="col-4 mt-3">
                <div class="form-group">
                    <label for="">Proxima pruba hidrostatica</label>
                    <input type="text"  class="form-control">
                </div>
            </div>


            <div class="col-4 mt-3">
                <div class="form-group">
                    <label for="">Ultima prueba hidrostatica</label>
                    <input type="date"  class="form-control">
                </div>
            </div>

            <div class="col-4 mt-3">
                <div class="form-group">
                    <label for="">Proxima recarga</label>
                    <input type="date"  class="form-control">
                </div>
            </div>

            <div class="col-4 mt-3">
                <div class="form-group">
                    <label for="">Proximo mantenimiento</label>
                    <input type="date"  class="form-control">
                </div>
            </div>

            <div class="col-4 mt-3">
                <div class="form-group">
                    <label for="">Ultimo mantenimiento</label>
                    <input type="date"  class="form-control">
                </div>
            </div>

            <div class="col-4 mt-3">
                <div class="form-group">
                    <label for="">Ultima recarga</label>
                    <input type="date"  class="form-control">
                </div>
            </div>



            <div class="col-9 mt-5 text-center">
                <button class="btn btn-success w-50">
                    <i class="fa fa-save mx-3"></i>
                    Guardar
                </button>
            </div>
        </div>


    </form>


</div>


@endsection