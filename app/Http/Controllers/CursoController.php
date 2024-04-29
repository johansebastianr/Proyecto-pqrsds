<?php

namespace App\Http\Controllers;

use App\Models\c;
use App\Models\Cliente;
use App\Models\Pqrsd;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;


class CursoController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'desc')->get();
        $pqrsds = Pqrsd::orderBy('id', 'desc')->get();
        
        return view('cuestionario', compact('clientes', 'pqrsds'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('formulario');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // Crear un nuevo cliente
        $cliente = new Cliente();
        $cliente->primerNombre = $request->primerNombre;
        $cliente->segundoNombre = $request->segundoNombre;
        $cliente->primerApellido = $request->primerApellido;
        $cliente->segundoApellido = $request->segundoApellido;
        $cliente->tipoDocumento = $request->tipoDocumento;
        $cliente->numeroIdentificacion = $request->numeroIdentificacion;
        $cliente->fechaNacimiento = $request->fechaNacimiento;
        $cliente->genero = $request->genero;
        $cliente->direccion = $request->direccion;
        $cliente->save();

        // Crear un nuevo Pqrsd
        $pqrsd = new Pqrsd();
        $pqrsd->idCliente = $cliente->id;
        $pqrsd->correoElectronico = $request->correoElectronico;
        $pqrsd->esAnonima = $request->esAnonima;
        $pqrsd->tipoPqrsd = $request->tipoPqrsd;
        $pqrsd->tipoPersona = $request->tipoPersona;
        $pqrsd->descripcionSolicitud = $request->descripcionSolicitud;
        $pqrsd->urlPdf = $request->urlPdf;
        $pqrsd->estado = $request->estado;
        $pqrsd->save();

        

        // Redireccionar a alguna vista o ruta
        return redirect()->route('formulario.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(c $c)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(c $c)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, c $c)
    {
        // Crear un nuevo cliente
        $cliente = new Cliente();
        $cliente->primerNombre = $request->primerNombre;
        $cliente->segundoNombre = $request->segundoNombre;
        $cliente->primerApellido = $request->primerApellido;
        $cliente->segundoApellido = $request->segundoApellido;
        $cliente->tipoDocumento = $request->tipoDocumento;
        $cliente->numeroIdentificacion = $request->numeroIdentificacion;
        $cliente->fechaNacimiento = $request->fechaNacimiento;
        $cliente->genero = $request->genero;
        $cliente->direccion = $request->direccion;
        $cliente->save();

        // Crear un nuevo Pqrsd
        $pqrsd = new Pqrsd();
        $pqrsd->idCliente = $cliente->id;
        $pqrsd->correoElectronico = $request->correoElectronico;
        $pqrsd->esAnonima = $request->esAnonima;
        $pqrsd->tipoPqrsd = $request->tipoPqrsd;
        $pqrsd->tipoPersona = $request->tipoPersona;
        $pqrsd->descripcionSolicitud = $request->descripcionSolicitud;
        $pqrsd->urlPdf = $request->urlPdf;
        $pqrsd->estado = $request->estado;
        $pqrsd->save();
        
        return redirect()->route('');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(c $c)
    {
        //
    }
}
