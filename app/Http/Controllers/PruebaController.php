<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\Habitacion;
use App\Hospedaje;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function prueba(){

        //Metodo create para cada modelo
        $hotel1=Hotel::create(['nombre'=>'El paraiso']);
        $habitacion1=Habitacion::create(['nombre'=>'Premium','num_habitacion'=>'2']);
        $hospedaje1=Hospedaje::create(['nombre'=>'Colombium','codigo_hospedaje'=>'4']);
        //Fin Metodo create para cada modelo


        //Agregar nuevo dato a la relacion polimorfica

        //Para hotel
       // $hotel = Hotel::find(33);
        //$hotel->galerias()->create(['nombre'=>'Galeria1']);
        //return $hotel->galerias()->get();


        //Para habitacion
        //$habitacion = Habitacion::find(25);
        //$habitacion->galerias()->create(['nombre'=>'Galeria2']);
        //return $habitacion->galerias()->get();


        //Para hospedaje
        //$hospedaje = Hospedaje::find(25);
        //$hospedaje->galerias()->create(['nombre'=>'Galeria3']);
        //return $hospedaje->galerias()->get();

        
    }

    public function prueba2(){
        //Relacion morph con metodo CreateMany
        $hotel = Hotel::find(34);

       $hotel->galerias()->createMany(
            [
            ['nombre' => 'Galeria4'],
            ['nombre' => 'Galeria5'],
            ['nombre' => 'Galeria6'],
            ]
        );
       // return $hotel;
       return $hotel->galerias()->get();
    }
}
