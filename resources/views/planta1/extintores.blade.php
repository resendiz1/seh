@extends('plantilla')

@section('contenido')
    <div class="container">


        <div class="row justify-content-center">
            <div class="col-12 text-center p-3">
                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    <i class="fa fa-plus-circle"></i>
                    Nuevo Extintor
                </button>
            </div>
        </div>

            {{-- Codigo de maquetacion dle modal --}}
            <!-- Modal -->
            <div class="modal modal-lg fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header bg-danger text-white">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Nuevo Extintor</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                    <form action="#">

                        <div class="row">
                            <div class="col-12 text-center mb-4">
                                <h2>Planta 1 Extintores</h2>
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




            <div class="row">

                <div class="accordion" id="accordionPanelsStayOpenExample">


                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                          Producción
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
              
                            <div class="row justify-content-around">
                                {{-- Tarjetita de los extintores --}}
                                <div class="col-3 border p-2">
                                    <div class="row justify-content-center">

                                        <div class="col-12 text-center">
                                            <h5>Extintor #100</h5>
                                        </div>

                                        <div class="col-12 text-center">
                                            <img src="https://www.vallen.com.mx/on/demandware.static/-/Sites-vallen-master-catalog/default/dwdf971d84/images/large/C008F01_500_1.jpg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-9 mt-3">
                                            <button class="btn btn-danger btn-sm text-white w-100">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Tarjetita de los extintores --}}

                            </div>

                        </div>
                      </div>
                    </div>


                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                          Materia Prima
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">

                            <div class="row justify-content-around">
                                {{-- Tarjetita de los extintores --}}
                                <div class="col-3 border p-2">
                                    <div class="row justify-content-center">

                                        <div class="col-12 text-center">
                                            <h5>Extintor #100</h5>
                                        </div>

                                        <div class="col-12 text-center">
                                            <img src="https://www.vallen.com.mx/on/demandware.static/-/Sites-vallen-master-catalog/default/dwdf971d84/images/large/C008F01_500_1.jpg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-9 mt-3">
                                            <button class="btn btn-danger btn-sm text-white w-100">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Tarjetita de los extintores --}}

                            </div>


                        </div>
                      </div>
                    </div>


                    <div class="accordion-item">
                      <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                          Producto Terminado
                        </button>
                      </h2>
                      <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
      

                            <div class="row justify-content-around">
                                {{-- Tarjetita de los extintores --}}
                                <div class="col-3 border p-2">
                                    <div class="row justify-content-center">

                                        <div class="col-12 text-center">
                                            <h5>Extintor #100</h5>
                                        </div>

                                        <div class="col-12 text-center">
                                            <img src="https://www.vallen.com.mx/on/demandware.static/-/Sites-vallen-master-catalog/default/dwdf971d84/images/large/C008F01_500_1.jpg" class="img-fluid" alt="">
                                        </div>

                                        <div class="col-9 mt-3">
                                            <button class="btn btn-danger btn-sm text-white w-100">
                                                <i class="fa fa-eye"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                {{-- Tarjetita de los extintores --}}

                            </div>



                        </div>
                      </div>
                    </div>


                  </div>

            </div> <!-- El del row -->












    </div>
@endsection