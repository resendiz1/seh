<!DOCTYPE html>
<html lang="es">
<head>
    {{-- @yield('titulo', 'Seguridad e Higiene') --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/tippy.js@6/animations/scale.css" />
    <style>
        body{
            background-color: aliceblue
        }
        a{
            text-decoration: none;
        }
    </style>
    <title>SH</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row " style="background-color: coral">
            <div class="col-3">
                <h1 class="text-white">SeH</h1>
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-3 mt-3">
                        <a class="text-white" href="{{route('menu')}}">Menu</a>
                    </div>
                    <div class="col-3 mt-3">
                        <a class="text-white" href="{{route('menu_p1')}}">Menu Planta 1</a>
                    </div>
                    <div class="col-3 mt-3">
                        <a class="text-white" href="{{route('brigadas_p1')}}">Brigadas P1</a>
                    </div>
                    <div class="col-3 mt-3">
                        <a class="text-white" href="{{route('edit_brigadistas')}}">Editar Brigadistas</a>
                    </div>                    
                    <div class="col-3 mt-3">
                        <a class="text-white" href="{{route('extintores_p1')}}">Extintores p1</a>
                    </div>
                    
                    <div class="col-3 mt-3">
                        <a class="text-white" href="{{route('ficha_extintor')}}">Ficha extintor</a>
                    </div> 
                    
                    <div class="col-3 mt-3">
                        <a class="text-white" href="{{route('edit_extintores')}}">Edit extintor</a>
                    </div>

                    <div class="col-3 mt-3">
                        <a class="text-white" href="{{route('comisiones')}}">Comisiones</a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@yield('contenido')




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>
    <script>



// Tooltips
            tippy('#mantenimiento', {
            content: 'Registrar mantenimiento',
            animation: 'scale',
            });

            tippy('#hidrostatica', {
            content: 'Registrar prueba hidrostatica',
            });
// fin de los tooltips







</script>
</body>
</html>