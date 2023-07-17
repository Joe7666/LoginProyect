<?php

namespace App\Http\Controllers;

use App\Models\EmpleadoCarrera;
use Illuminate\Http\Request;
use App\Models\Empleado;
use App\Models\Carrera;
use App\Models\Periodo;

/**
 * Class EmpleadoCarreraController
 * @package App\Http\Controllers
 */
class EmpleadoCarreraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleadoCarreras = EmpleadoCarrera::paginate();

        return view('empleado-carrera.index', compact('empleadoCarreras'))
            ->with('i', (request()->input('page', 1) - 1) * $empleadoCarreras->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $empleadoCarrera = new EmpleadoCarrera();
        $emp= Empleado::pluck('CodigoEmpleado','id');
        $carr= Carrera::pluck('NombreCarrera','id');
        $per= Periodo::pluck('NombrePeriodo','id');
        return view('empleado-carrera.create', compact('empleadoCarrera','emp','carr','per'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(EmpleadoCarrera::$rules);

        $empleadoCarrera = EmpleadoCarrera::create($request->all());

        return redirect()->route('empleado-carreras.index')
            ->with('success', 'EmpleadoCarrera created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleadoCarrera = EmpleadoCarrera::find($id);

        return view('empleado-carrera.show', compact('empleadoCarrera'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $empleadoCarrera = EmpleadoCarrera::find($id);

        $emp= Empleado::pluck('CodigoEmpleado','id');
        $carr= Carrera::pluck('NombreCarrera','id');
        $per= Periodo::pluck('NombrePeriodo','id');

        return view('empleado-carrera.edit', compact('empleadoCarrera','emp','carr','per'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  EmpleadoCarrera $empleadoCarrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EmpleadoCarrera $empleadoCarrera)
    {
        request()->validate(EmpleadoCarrera::$rules);

        $empleadoCarrera->update($request->all());

        return redirect()->route('empleado-carreras.index')
            ->with('success', 'EmpleadoCarrera updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $empleadoCarrera = EmpleadoCarrera::find($id)->delete();

        return redirect()->route('empleado-carreras.index')
            ->with('success', 'EmpleadoCarrera deleted successfully');
    }
}
