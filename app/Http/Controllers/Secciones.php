<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Secciones extends Controller
{
    public function home()
    {
    	$secciones = [
			['titulo' => 'service'],
			['titulo' => 'highlights'],
			['titulo' => 'education'],
			['titulo' => 'about me'],
			['titulo' => 'contact'],
		];
		return view('index', compact('secciones'));
    }
    public function aboutme()
    {
    	$secciones = [
			['titulo' => 'service'],
			['titulo' => 'highlights'],
			['titulo' => 'education'],
			['titulo' => 'about me'],
			['titulo' => 'contact'],
		];
		return view('aboutme', compact('secciones'));
    }
}
