<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <style>
        </style>
    </head>
    <body>
        <br><br>
       <div class="container shadow-lg p-3 mb-5 bg-body rounded">
           <h5><span class="shadow mb-5 rounded">Registro de Usuario</span></h5>
            <form class="row g-3" autocomplete="off" id="form">
                @csrf
                <div class="col-md-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre">
                    <span class="badge text-danger errors-nombre"></span>
                </div>
                <div class="col-md-3">
                    <label for="primer" class="form-label">Primer apellido</label>
                    <input type="text" class="form-control" id="primer" name="primer" placeholder="Ingresa el primer apellido">
                    <span class=" badge text-danger errors-primer"></span>
                </div>
                <div class="col-md-3">
                    <label for="segundo" class="form-label">Segundo apellido</label>
                    <input type="text" class="form-control" id="segundo" name="segundo" placeholder="Ingresa el segundo apellido">
                    <span class="badge text-danger errors-segundo"></span>
                </div>
                <div class="col-md-3">
                    <label for="email" class="form-label">Correo</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="Ingresa un correo">
                    <span class="badge text-danger errors-email"></span>
                </div>
                <div class="col-md-6">
                    <label for="password" class="form-label">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Ingresa el password">
                    <span class="badge text-danger errors-password"></span>
                </div>
                <div class="col-md-6">
                    <label for="confirmarpassword" class="form-label">Confirmar contraseña</label>
                    <input type="password" class="form-control" id="confirmarpassword" name="confirmarpassword" placeholder="Confirma el password">
                    <span class="badge text-danger errors-confirmarpassword"></span>
                </div>
                <div class="col-12">
                    <label for="direccion" class="form-label">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingresa la direccion">
                    <span class="badge text-danger errors-direccion"></span>
                </div>
                <div class="col-md-5">
                    <label for="ciudad" class="form-label">Ciudad</label>
                    <input type="text" class="form-control" id="ciudad" name="ciudad" placeholder="Ingresa el nombre de la ciudad">
                    <span class="badge text-danger errors-ciudad"></span>
                </div>
                <div class="col-md-4">
                    <label for="rol" class="form-label">Rol</label>
                    <select id="rol" name="rol" class="form-select">
                    <option value="">Selecciona un Rol</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Usuario">Usuario</option>
                    </select>
                    <span class="badge text-danger errors-rol"></span>
                </div>
                <div class="col-md-3">
                    <label for="postal" class="form-label">Codigo postal</label>
                    <input type="text" class="form-control" id="postal" name="postal" placeholder="Ingresa un codigo postal">
                    <span class="badge text-danger errors-postal"></span>
                </div>
                <div class="alert alert-success" style="display: none;"></div>
                <div class="col-12">
                    <button type="text" id="btn-enviar" class="btn btn-primary">Aceptar</button>
                </div>
            </form>
       </div>
       <script src="{{asset('js/index.js')}}"></script>
    </body>
</html>
