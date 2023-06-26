@extends('plantilla')

@section('contenido')


    <div class="container">
        
        <div class="row justify-content-center">
            <div class="col-12 text-center mt-4">
                <h1>Extintor #100</h1>
            </div>
        </div>

        <div class="row justify-content-center">
            
            <div class="col-4 text-center mt-4">
                <img src="https://www.vallen.com.mx/on/demandware.static/-/Sites-vallen-master-catalog/default/dwdf971d84/images/large/C008F01_500_1.jpg" class="img-fluid" alt="">
                <div class="row justify-content-center">
                    <div class="col-2 mt-2">
                        <button class="btn btn-success" id="mantenimiento">
                            <i class="fa fa-screwdriver-wrench"></i>
                        </button>
                    </div>
                    <div class="col-2 mt-2">
                        <button class="btn btn-info" id="hidrostatica">
                            <i class="fa fa-screwdriver-wrench"></i>
                        </button>
                    </div>
                    <div class="col-2 mt-2">
                        <button class="btn btn-danger">
                            <i class="fa fa-home"></i>
                        </button>
                    </div>
                    <div class="col-2 mt-2">
                        <button class="btn btn-info">
                            <i class="fa fa-check" tooltip="Esto es un tootltip" ></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-8 mt-5">
                <div class="row">

                    <div class="col-12 mt-3">
                        <span> <b> Ubicacion: </b> Producto terminado</span>
                    </div>


                    <div class="col-12 mt-3">
                        <span> <b> Capacidad (kg): </b> 3Kg</span>
                    </div>

                    
                    <div class="col-12 mt-3">
                        <span> <b> Agente Extintor: </b> Agua Ardiente </span>
                    </div>

                    <div class="col-12 mt-3">
                        <span> <b> Tipo: </b> Tipo a <sup>3</sup> </span>
                    </div>

                    <div class="col-12 mt-3">
                        <span> <b> Ultima recarga: </b> 20/06/2023 </span>
                    </div>

                    <div class="col-12 mt-3">
                        <span> <b> Ultimo mantenimiento: </b> 20/06/2023 </span>
                    </div>

                    <div class="col-12 mt-3">
                        <span> <b> Proximo mantenimiento: </b> 20/06/2023 </span>
                    </div>

                    <div class="col-12 mt-3">
                        <span> <b> Proxima recarga: </b> 20/06/2023 </span>
                    </div>

                    <div class="col-12 mt-3">
                        <span> <b> Ultima prueba hidrostatica: </b> 20/06/2023 </span>
                    </div>

                    <div class="col-12 mt-3">
                        <span> <b> Proxima prueba hidrostatica: </b> 20/06/2023 </span>
                    </div>
                    
                    <div class="col-12 mt-3">
                        <span> <b> Señalitica: </b> Yes I Do :P </span>
                    </div>
                    
                    <div class="col-12 mt-3">
                        <span> <b> Fecha de fabricación: </b> 20/06/2023 </span>
                    </div>
                    
                    <div class="col-12 mt-3">
                        <span> <b> Vencimiento por antiguedad: </b> 20/06/2023 </span>
                    </div>

                    <div class="col-12 mt-3">
                        <span> <b> Estado: </b> De Mexico </span>
                    </div>

                    <div class="col-12 mt-3">
                        <span> <b>Observaciones: </b> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore facilis officia tempora temporibus minima architecto labore unde soluta beatae numquam! Voluptatem vel veniam eum voluptas corporis repellat, praesentium consequuntur illum? </span>
                    </div>



                </div>
            </div>
        </div>

    </div>

    
@endsection