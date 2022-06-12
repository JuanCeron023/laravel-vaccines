<?php

namespace App\Http\Controllers;

use App\Models\citas;
use App\Models\usuarios;
use App\Models\vacunacion;
use Input;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    //// guardaar vacuna
    public function store(Request $request)
    {

        $post = new vacunacion;
        $post->vacuna = $request->a3;
        $post->dosis = $request->a4;
        $post->fecha = $request->a2;
        $post->persona = $request->a1;
        $dateTimestamp1 = strtotime($post->fecha);
        $date = date('Y-m-d');
        $dateTimestamp2 = strtotime($date);
        $dateTimestamp3 = strtotime("2020-06-01");
        if ($dateTimestamp1 > $dateTimestamp2) {
            return redirect('/')->with('status1', 'Fecha invalida');
        } else if ($dateTimestamp1 < $dateTimestamp3) {
            return redirect('/')->with('status1', 'Fecha invalida');
        }


        $user = usuarios::where('id', $request->a1)->first();
        if($user!= null && $user->inactivo !=null){
            return redirect('/')->with('status1', 'Usuario inactivo');
        }
        if ($user != null) {
            $vacunac = vacunacion::where('persona', $request->a1)->first();
            if ($vacunac === null) {
                if ($request->a4 == '1') {
                    $post->save();
                    if($post->vacuna=="Jhonson")
                    {
                        $post = new vacunacion;
                        $post->vacuna = $request->a3;
                        $post->fecha = $request->a2;
                        $post->persona = $request->a1;
                        $post->dosis = 2;
                        $post->save();
                    }
                    return redirect('/')->with('status', 'Registro exitoso');
                } else {
                    return redirect('/')->with('status1', 'registre primero la primera dosis');
                }
            } else {
                if ($request->a4 == '1') {
                    return redirect('/')->with('status1', 'Dosis ya registrada previamente');
                } else {

                    $vacunac1 = vacunacion::where('persona', $request->a1)->get();
                    $varx = sizeof($vacunac1);
                    if ($varx == 2) {
                        return redirect('/')->with('status1', 'Dosis ya registrada previamente');
                    } else {
                        $post->save();
                        return redirect('/')->with('status', 'Registro exitoso');
                    }
                }
            }
        } else {
            return redirect('/')->with('status1', 'No existe usuario');
        }
    }



    //// guardaar cita
    public function store1(Request $request)
    {

        $post = new citas;
        $post->hora = $request->b3;
        $post->fecha = $request->b2;
        $post->persona = $request->b1;
        $dateTimestamp1 = strtotime($post->fecha);
        $date = date('Y-m-d');
        $dateTimestamp2 = strtotime($date);
        if ($dateTimestamp1 < $dateTimestamp2) {
            return redirect('/')->with('status1', 'Fecha invalida');
        }
        $user = usuarios::where('id', $request->b1)->first();
        if($user!= null && $user->inactivo !=null){
            return redirect('/')->with('status1', 'Usuario inactivo');
        }
        if ($user != null) {
            $post->save();
            return redirect('/')->with('status', 'Registro exitoso');
        } else {
            return redirect('/')->with('status1', 'No existe usuario');
        }
    }

    //// no mostrar todas las horas de turno
    public function ModificarHoras(Request $request)
    {
        $otro = $request->id;
        $vacunac = citas::where('fecha', $otro)->get();
        $algo3 = array('7:00', '7:30', '8:00', '8:30', '9:00', '9:30', '10:00', '10:30', '11:00', '11:30', '12:00', '12:30',);
        foreach ($vacunac as $vacunac1) {
            $algo1 = $vacunac1->hora;
            $pos = array_search($algo1, $algo3);
            if ($pos != null) {
                unset($algo3[$pos]);
            }
        }
        return response()->json($algo3);
    }

    //// numero de vacunas estudiante
    public function ConsultaIndividual(Request $request)
    {
        $otro = $request->id;
        $vacunac1 = vacunacion::where('persona', $otro)->get();
        if ($vacunac1 != null) {
            $varx = sizeof($vacunac1);
            $varx1 = $varx . " dosis";
        } else {
            $varx1 = 'sin vacunas';
        }
        $user = usuarios::where('id', $request->id)->first();
        if($user!= null && $user->inactivo !=null){
            $varx1 = 'inactivo';
        }
        if($user== null){
            $varx1 = 'no existe';
        }

        $pattern = "/^[0-9]+$/";
        if(preg_match($pattern, $otro))
        {
            return response()->json($varx1);
        }
        else{
            return response()->json('id no valido');
        }

       
    }

    //// porcentaje vacuna
    public function ConsultaVarios(Request $request)
    {
        $otro = $request->id;
        if ($otro == '') {
            $otro = 5;
        }
        $otro1 = 0;
        $otro6 = 0;
        $vacunac1 = vacunacion::all();
        foreach ($vacunac1 as $vacunac) {
            $temp = $vacunac->dosis;
            $temp1 = $vacunac->persona;
            $user = usuarios::where('id', $temp1)->first();
            if( $user->inactivo == null){

            if ($temp == $otro) {
                $otro1 += 1;
            }
            if ($temp == '2') {
                $otro6 += 1;
            }
        }

        }
        $usuarios = usuarios::all();
        $otro2 =0;
        foreach ($usuarios as $usuario) {
            $temp = $usuario->inactivo;
            if ( $temp==null) {
                $otro2 += 1;
            }
            
        }

        if ($otro2 == 0) {
            $otro2 = 1;
        }
        if($otro==1)
        {
            $otro1 = $otro1-$otro6;  
        }
        $percentage = (100 / $otro2) * $otro1;
        $percentage = (round($percentage));
        $percentage1 = $percentage . " %";

        return response()->json($percentage1);
    }
}
