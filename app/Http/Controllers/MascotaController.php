<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Http\Requests\StoreMascotaRequest;
use App\Http\Requests\UpdateMascotaRequest;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas=Mascota::all();
        $data['mascotas']=$mascotas;
        return view('mascota.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mascota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMascotaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMascotaRequest $request)
    {
        $mascota = Mascota::create($request->all());

        return redirect()->route('mascota.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data['mascota']=Mascota::find($id);
        return view('mascota.editar',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMascotaRequest  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMascotaRequest $request, $id)
    {
        $mascota=Mascota::find($id);
        $mascota->update($request->all());
//        return $mascota;
        return redirect()->route('mascota.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mascota=Mascota::find($id);
        $mascota->delete();
        return redirect()->route('mascota.index');
    }
}
