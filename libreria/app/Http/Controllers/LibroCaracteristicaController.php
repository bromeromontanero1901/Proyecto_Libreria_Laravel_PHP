<?php

namespace App\Http\Controllers;

use App\Models\LibroCaracteristica;
use App\Models\Libro;
use App\Models\Etiqueta;
use Illuminate\Http\Request;

/**
 * Class LibroCaracteristicaController
 * @package App\Http\Controllers
 */
class LibroCaracteristicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $libroCaracteristicas = LibroCaracteristica::paginate();

        return view('libro-caracteristica.index', compact('libroCaracteristicas'))
            ->with('i', (request()->input('page', 1) - 1) * $libroCaracteristicas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $libroCaracteristica = new LibroCaracteristica();
        $libros = Libro::pluck('titulo','id');
        $etiquetas = Etiqueta::pluck('descripcion','id');
        return view('libro-caracteristica.create', compact('libroCaracteristica','libros','etiquetas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(LibroCaracteristica::$rules);

        $libroCaracteristica = LibroCaracteristica::create($request->all());

        return redirect()->route('libro-caracteristicas.index')
            ->with('success', 'LibroCaracteristica created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($libro_id,$etiqueta_id)
    {
        $libroCaracteristica = LibroCaracteristica::find([$libro_id,$etiqueta_id]);

        return view('libro-caracteristica.show', compact('libroCaracteristica'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($libro_id,$etiqueta_id)
    {
        $libroCaracteristica = LibroCaracteristica::find([$libro_id,$etiqueta_id]);
        $libros = Libro::pluck('titulo','id');
        $etiquetas = Etiqueta::pluck('descripcion','id');
        return view('libro-caracteristica.edit', compact('libroCaracteristica','libros','etiquetas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  LibroCaracteristica $libroCaracteristica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LibroCaracteristica $libroCaracteristica)
    {
        request()->validate(LibroCaracteristica::$rules);

        $libroCaracteristica->update($request->all());

        return redirect()->route('libro-caracteristicas.index')
            ->with('success', 'LibroCaracteristica updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($libro_id,$etiqueta_id)
    {
        $libroCaracteristica = LibroCaracteristica::find([$libro_id,$etiqueta_id])->delete();

        return redirect()->route('libro-caracteristicas.index')
            ->with('success', 'LibroCaracteristica deleted successfully');
    }
}
