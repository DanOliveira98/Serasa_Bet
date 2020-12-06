<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreNegativado;
use App\Models\Negativado;
use App\Models\User;
use Illuminate\Http\Request;

class NegativadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($user)
    {
        $user = User::find($user);
        return view('negativados.create', [
            'user' => $user,
        ]);
    }
    public function searchByCpf(Request $request)
    {
        $negativado = Negativado::with('enderecos')->where('cpf', '=', "{$request->search}")->get()->first();
        $banca = User::find($negativado->user_id);
        return response()->view('negativados.busca', [
            'negativado' => $negativado,
            'search' => $request->search,
            'banca' => $banca
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreNegativado $request, $user)
    {
        try {
            $user = User::find($user);
            $negativado = new Negativado();
            $negativado->fill($request->validated());
            $user->negativados()->save($negativado);
            return redirect()->route('parceiros.show', $user);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public
    function destroy($id)
    {
        //
    }
}
