<?php

namespace App\Http\Controllers;

use App\Models\AltaBajaEjemplare;
use App\Models\Libro;
use Illuminate\Http\Request;

/**
 * Class AltaBajaEjemplareController
 * @package App\Http\Controllers
 */
class AltaBajaEjemplareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $altaBajaEjemplares = AltaBajaEjemplare::paginate();

        return view('alta-baja-ejemplare.index', compact('altaBajaEjemplares'))
            ->with('i', (request()->input('page', 1) - 1) * $altaBajaEjemplares->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $altaBajaEjemplare = new AltaBajaEjemplare();
        $libros = Libro::pluck('titulo','id');
        return view('alta-baja-ejemplare.create', compact('altaBajaEjemplare','libros'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(AltaBajaEjemplare::$rules);

        $valTipo = $request->input('tipo');
        $valLibro = $request->input('libro_id');
        $tipo = AltaBajaEjemplare::where('tipo','=',$valTipo)->get();
        $libro = AltaBajaEjemplare::where('libro_id','=',$valLibro)->get();
        if((count($tipo)>0)&&(count($libro)>0))
        {
            $altaBajaEjemplare = AltaBajaEjemplare::update($request->all());
        }
        else
        {
            $altaBajaEjemplare = AltaBajaEjemplare::create($request->all());
        }
        

        return redirect()->route('alta-baja-ejemplares.index')
            ->with('success', 'AltaBajaEjemplare created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $altaBajaEjemplare = AltaBajaEjemplare::find($id);

        return view('alta-baja-ejemplare.show', compact('altaBajaEjemplare'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $altaBajaEjemplare = AltaBajaEjemplare::find($id);
        $libros = Libro::pluck('titulo','id');
        return view('alta-baja-ejemplare.edit', compact('altaBajaEjemplare','libros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  AltaBajaEjemplare $altaBajaEjemplare
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AltaBajaEjemplare $altaBajaEjemplare)
    {
        request()->validate(AltaBajaEjemplare::$rules);

        $altaBajaEjemplare->update($request->all());

        return redirect()->route('alta-baja-ejemplares.index')
            ->with('success', 'AltaBajaEjemplare updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $altaBajaEjemplare = AltaBajaEjemplare::find($id)->delete();

        return redirect()->route('alta-baja-ejemplares.index')
            ->with('success', 'AltaBajaEjemplare deleted successfully');
    }
}
