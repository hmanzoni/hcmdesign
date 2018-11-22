<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Request\CreateMessageRequest;

class FormularioContacto extends Controller
{
    public function mensajes(CreateMessageRequest $request)
    {
    	return $request->all();
    }
}
