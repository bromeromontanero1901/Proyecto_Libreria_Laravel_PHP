<?php

namespace App\Http\Controllers;

use App\Models\RegistroAsignacion;
use App\Models\Libro;
use App\Models\User;
use Illuminate\Http\Request;

/**
 * Class RegistroAsignacionController
 * @package App\Http\Controllers
 */
class RegistroAsignacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registroAsignacions = RegistroAsignacion::paginate();

        return view('registro-asignacion.index', compact('registroAsignacions'))
            ->with('i', (request()->input('page', 1) - 1) * $registroAsignacions->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registroAsignacion = new RegistroAsignacion();
        $libros = Libro::pluck('titulo','id');
        $usuarios = User::pluck('name','id');
        $usuarios2 = User::pluck('name','id');
        return view('registro-asignacion.create', compact('registroAsignacion','libros','usuarios','usuarios2'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(RegistroAsignacion::$rules);

        $registroAsignacion = RegistroAsignacion::create($request->all());

        return redirect()->route('registro-asignacions.index')
            ->with('success', 'RegistroAsignacion created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $registroAsignacion = RegistroAsignacion::find($id);

        return view('registro-asignacion.show', compact('registroAsignacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $registroAsignacion = RegistroAsignacion::find($id);
        $libros = Libro::pluck('titulo','id');
        $usuarios = User::pluck('name','id');
        $usuarios2 = User::pluck('name','id');
        return view('registro-asignacion.edit', compact('registroAsignacion','libros','usuarios','usuarios2'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  RegistroAsignacion $registroAsignacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, RegistroAsignacion $registroAsignacion)
    {
        request()->validate(RegistroAsignacion::$rules);

        $registroAsignacion->update($request->all());

        return redirect()->route('registro-asignacions.index')
            ->with('success', 'RegistroAsignacion updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $registroAsignacion = RegistroAsignacion::find($id)->delete();

        return redirect()->route('registro-asignacions.index')
            ->with('success', 'RegistroAsignacion deleted successfully');
    }
}
