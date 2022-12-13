<?php

namespace App\Http\Controllers;

use App\Campaña;
use Illuminate\Http\Request;

/**
 * Class CampañaController
 * @package App\Http\Controllers
 */
class CampañaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $campañas = Campaña::paginate();

        return view('campañas.index', compact('campañas'))
            ->with('i', (request()->input('page', 1) - 1) * $campañas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $campaña = new Campaña();
        return view('campañas.campaña', compact('campaña'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Campaña::$rules);

        $campaña = Campaña::create($request->all());

        return redirect()->route('campañas.index')
            ->with('success', 'Campaña created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $campaña = Campaña::find($id);

        return view('campaña.show', compact('campaña'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $campaña = Campaña::find($id);

        return view('campaña.edit', compact('campaña'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Campaña $campaña
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaña $campaña)
    {
        request()->validate(Campaña::$rules);

        $campaña->update($request->all());

        return redirect()->route('campañas.index')
            ->with('success', 'Campaña updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $campaña = Campaña::find($id)->delete();

        return redirect()->route('campañas.index')
            ->with('success', 'Campaña deleted successfully');
    }
}
