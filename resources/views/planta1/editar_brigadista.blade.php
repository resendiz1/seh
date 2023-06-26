@extends('plantilla')

@section('contenido')
    <div class="container">
    
            <form action="#">
                <div class="row mt-5  justify-content-center">
                    <div class="col-6 shadow-sm p-4 bg-white">
                        <div class="row justify-content-center">
                            
                        <div class="col-12 text-center">
                            <h2>Planta 1</h2>
                            <h4>Editando Brigadista</h4>
                            <a href="{{route('brigadas_p1')}}">
                                <i class="fa fa-arrow-circle-left"></i>
                                <br>
                                Regresar
                            </a>
                        </div>
        
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Nombre completo</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Puesto de trabajo</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-group">
                                <label for="">Número de contacto</label>
                                <input type="text" class="form-control">
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="form-group">
                                <label for="">Brigada a la que pertenecera</label>
                                <select class="form-select" aria-label="Default select example">
                                    <option selected>Selecciona una brigada</option>
                                    <option value="Evaluación de inmuebles">Evaluación de inmuebles</option>
                                    <option value="Primeros Auxilios">Primeros Auxilios</option>
                                    <option value="Prevención y combate de incendios">Prevención y combate de incendios</option>
                                    <option value="Brigada de comunicación">Brigada de comunicación</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6 mt-5 text-center">
                            <button class="btn btn-success">
                                <i class="fa fa-save mx-2"></i>
                                Guardar Cambios
                            </button>
                        </div>
                    </div>
            </div>  
              </form>
    </div>
@endsection