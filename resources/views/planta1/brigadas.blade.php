@extends('plantilla')
@section('contenido')


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 text-center p-3">
                <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa fa-plus-circle"></i>
                    Nuevo Integrante
                </button>
            </div>
        </div>

{{-- Codigo de maquetacion dle modal --}}
  <!-- Modal -->
  <div class="modal modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-info text-white">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Nuevo integrante</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="row">
                <div class="col-12 text-center">
                    <h2>Planta 1</h2>
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
                <div class="col-6">

                </div>
            </div>
          </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Guardar</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
{{-- Codigo de maquetacion dle modal --}}












        <div class="row shadow-sm mt-5 justify-content-around bg-white">
            <h2 class="mb-4 bg-primary p-2 text-white">Brigada de Primeros Auxilios</h2>



            <div class="col-3 py-4 border m-2">
              <div class="row">
                <div class="col-12  text-center">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtuphMb4mq-EcVWhMVT8FCkv5dqZGgvn_QiA&usqp=CAU" class="img-fluid" alt="">
                </div>
                <div class="col-12 text-center my-2">
                  <h4>Arturo Resendiz López</h4>
                </div>
                <div class="col-12 text-justify">
                  <b>Puesto de trabajo:</b> Encargado de sistemas
                </div>
                <div class="col-12">
                  <b>Número de contacto:</b> 2491725430
                </div>
                <div class="col-6 mt-3">
                  <a href="{{route('edit_brigadistas')}}" class="btn btn-secondary w-100"><i class="fa fa-pencil"></i></a>
                </div>
                <div class="col-6 mt-3">
                  <button class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#delete"><i class="fa fa-eraser"></i></button>
                  <!-- Modal -->
                  <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Eliminar?</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <form action="#">
                                  <div class="row justify-content-center">
                                      <h4>Esta segur@ que desea eliminar a: (name)</h4>
                                      <div class="col-6 text-center mt-4">
                                          <button class="btn btn-danger btn-block w-100">Borrar</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                      </div>
                  </div>
                       {{-- Modal   --}}
                </div>
              </div>
            </div>

        </div>
      

        <br><br>



        <div class="row shadow-sm mt-5 justify-content-center bg-white">
            <h2 class="mb-4 bg-secondary p-2 text-white">Brigada de busqueda y rescate</h2>
            <div class="col-3 py-4 border m-2">
              <div class="row">
                <div class="col-12  text-center">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtuphMb4mq-EcVWhMVT8FCkv5dqZGgvn_QiA&usqp=CAU" class="img-fluid" alt="">
                </div>
                <div class="col-12 text-center my-2">
                  <h4>Arturo Resendiz López</h4>
                </div>
                <div class="col-12 text-justify">
                  <b>Puesto de trabajo:</b> Encargado de sistemas
                </div>
                <div class="col-12">
                  <b>Número de contacto:</b> 2491725430
                </div>
                <div class="col-6 mt-3">
                  <a href="{{route('edit_brigadistas')}}" class="btn btn-secondary w-100"><i class="fa fa-pencil"></i></a>
                </div>
                <div class="col-6 mt-3">
                  <button class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#delete"><i class="fa fa-eraser"></i></button>
                  <!-- Modal -->
                  <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Eliminar?</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <form action="#">
                                  <div class="row justify-content-center">
                                      <h4>Esta segur@ que desea eliminar a: (name)</h4>
                                      <div class="col-6 text-center mt-4">
                                          <button class="btn btn-danger btn-block w-100">Borrar</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                      </div>
                  </div>
                       {{-- Modal   --}}
                </div>
              </div>
            </div>
        </div>
        

        <br><br>







        <div class="row shadow-sm mt-5 justify-content-around bg-white">
            <h2 class="mb-4 bg-success p-2 text-white">Brigada de Prevención y combate de incendios</h2>
            <div class="col-3 py-4 border m-2">
              <div class="row">
                <div class="col-12  text-center">
                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTtuphMb4mq-EcVWhMVT8FCkv5dqZGgvn_QiA&usqp=CAU" class="img-fluid" alt="">
                </div>
                <div class="col-12 text-center my-2">
                  <h4>Arturo Resendiz López</h4>
                </div>
                <div class="col-12 text-justify">
                  <b>Puesto de trabajo:</b> Encargado de sistemas
                </div>
                <div class="col-12">
                  <b>Número de contacto:</b> 2491725430
                </div>
                <div class="col-6 mt-3">
                  <a href="{{route('edit_brigadistas')}}" class="btn btn-secondary w-100"><i class="fa fa-pencil"></i></a>
                </div>
                <div class="col-6 mt-3">
                  <button class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#delete"><i class="fa fa-eraser"></i></button>
                  <!-- Modal -->
                  <div class="modal fade" id="delete" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <h1 class="modal-title fs-5" id="staticBackdropLabel">¿Eliminar?</h1>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                              <form action="#">
                                  <div class="row justify-content-center">
                                      <h4>Esta segur@ que desea eliminar a: (name)</h4>
                                      <div class="col-6 text-center mt-4">
                                          <button class="btn btn-danger btn-block w-100">Borrar</button>
                                      </div>
                                  </div>
                              </form>
                          </div>
                      </div>
                      </div>
                  </div>
                       {{-- Modal   --}}
                </div>
              </div>
            </div>
        </div>









    </div>





@endsection