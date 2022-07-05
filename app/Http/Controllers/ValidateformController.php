<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Response;
use Illuminate\Support\Facades\Validator;

class ValidateformController extends Controller
{
    public function guardarDatos(Request $request){

        $campos = [
            "nombre"=>"required",
            "primer"=>"required",
            "segundo"=>"required",
            "email"=>"required|email",
            "password"=>"required",
            "confirmarpassword"=>"required|same:password",
            "direccion"=>"required",
            "ciudad"=>"required",
            "rol"=>"required",
            "postal"=>"required|digits:5",
        ];

        $mensajes =[
            "nombre.required"=>"El nombre es requerido",
            "primer.required"=>"El primer apellido es requerido",
            "segundo.required"=>"El segundo apellido es requerido",
            "email.required"=>"El correo electronico es requerido",
            'email.email'=>'El formato de su correo electronico es invalido',
            "password.required"=>"La contraseña es requerida",
            "confirmarpassword.required"=>"Es necesario confirmar la contraseña",
            'confirmarpassword.same'=>'La contraseña no coincide',
            "direccion.required"=>"La direccion es requerida",
            "ciudad.required"=>"El nombre de la ciudad es requerido",
            "rol.required"=>"El Rol es requerido",
            "postal.required"=>"El codigo postal es requerido",
            "postal.digits"=>"El codigo postal debe tener 5 digitos",
        ];  

        $validator = Validator::make($request->all(), $campos, $mensajes);
        if ($validator->fails()) {
            $errors = $validator->errors();
            return response()->json([
                'nombre'=> $errors->get('nombre'),
                'primer'=> $errors->get('primer'),
                'segundo'=> $errors->get('segundo'),
                'email'=> $errors->get('email'),
                'password'=> $errors->get('password'),
                'confirmarpassword'=> $errors->get('confirmarpassword'),
                'direccion'=> $errors->get('direccion'),
                'ciudad'=> $errors->get('ciudad'),
                'rol'=> $errors->get('rol'),
                'postal'=> $errors->get('postal'),
                'alerta' => 'danger'
            ]);
        }

        return response()->json([
            "alerta"=>"success"
        ]);
    }
}

