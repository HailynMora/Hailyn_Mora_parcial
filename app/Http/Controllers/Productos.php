<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Productos extends Controller
{
    public function catalogo(){
    	$inf1 = [
            'Guitarra',
    		'Ref: GN-012',
            '$80000',
            'Disponible'
    	];
    	
    	$inf2 = [
            'Guitarra Acustica',
    		'Ref: GA-502',
            '$12000',
            'Disponible'
    	];
    	
    	$inf3 = [
            'Bajo Electrico',
    		'Ref: Failane',
            '$420000',
            'Disponible'
    	];
    	
        $inf4 = [
            'Bajon',
    		'Ref: Cordofón',
            '$150000',
            'Disponible'
    	];
    	

    	$inf5 = [
            'Arpa',
    		'Ref: AG01F',
            '$600000',
            'Disponible'
    	];

    	$inf6 = [
            'Violin',
    		'Ref: FA015',
            '$500000',
            'Disponible'
        ];
        
        $inf7 = [
            'Queno',
    		'Ref: Bambú Artesano',
            '$589000',
            'Disponible'
        ];
        
    	$inf8 = [
            'Tormenta de metal',
    		'Ref: 202 kalo',
            '$118900',
            'Disponible'
        ];
        
        $inf9 = [
            'Saxofon',
    		'Ref: Alieen Profesional',
            '$1268000',
            'Disponible'
        ];
        
        $inf10 = [
            'Zampoña',
    		'Ref: Chili 13 cañas',
            '$29900',
            'Fuera de Stock'
        ];

        $inf11 = [
            'Flauta Venova',
    		'Ref: Yamaha Yus-100',
            '$595000',
            'Disponible'
        ];
        
        $inf12 = [
            'Armonica',
    		'Ref: Cromada',
            '$13900',
            'Fuera de Stock'
    	];
    	return view('productos.catalogo',[
            'p1' => $inf1,
            'p2' => $inf2,
            'p3' => $inf3,
            'p4' => $inf4,
            'p5' => $inf5,
            'p6' => $inf6,
            'p7' => $inf7,
            'p8' => $inf8,
            'p9' => $inf9,
            'p10' => $inf10,
            'p11' => $inf11,
            'p12' => $inf12,
    	]);
    }
    

    public function blog(){
        return view('datos.blog') ;
    }
}
