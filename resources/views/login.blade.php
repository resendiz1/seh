@extends('plantilla')

@section('contenido')
    

<div class="container">
    <div class="row justify-content-center mt-4">
        <div class="col-md-8 col-sm-12">
            <h3 class="text-center">Acceso a SEH</h3>
            <div class="row justify-content-center">
                <div class="col-5 shadow-sm p-4">
                    <div class="form-group">
                        <label for="">Usuario</label>
                        <input type="text" class="form-control">
                    </div>
                    
                    <div class="form-group mt-2">
                        <label for="">Contraseña</label>
                        <input type="password" class="form-control">
                    </div>
                    
                    <div class="form-group mt-4 text-center">
                        <button class="btn btn-success btn-sm">
                            Entrar
                        </button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection