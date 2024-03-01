<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Qualification;
use Illuminate\Http\Request;

class QualificationController extends Controller
{
    public function create() {

        return view('formulario');
       
    }

    public function store(Request $request ){
       $Qualification = new Qualification();
       $Qualification->name=$request->name;  
       $Qualification->num1=$request->num1;
       $Qualification->num2=$request->num2;
       $Qualification->num3=$request->num3;
       $Qualification->promedio = $this->calcularPromedio($request->num1, $request->num2, $request->num3);
       $Qualification->save();
       return $Qualification;
    }
       public function calcularPromedio($num1, $num2, $num3){
       $promedio = ($num1 + $num2 + $num3) / 3;
       return $promedio;
       }
       
    
}
