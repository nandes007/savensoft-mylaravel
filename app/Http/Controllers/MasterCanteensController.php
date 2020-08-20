<?php

namespace App\Http\Controllers;

use App\Mscanteen;
use Illuminate\Http\Request;

class MasterCanteensController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mscanteen = Mscanteen::all();
        return view('MasterCanteens.index', compact('mscanteen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        return view('MasterCanteens.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Cara pertama memasukkan data menggunakan controller
        // $mscanteen = new Mscanteen;
        // $mscanteen->kode = $request->kode;
        // $mscanteen->namabarang = $request->namabarang;
        // $mscanteen->groups = $request->groups;
        // $mscanteen->price = $request->price;
        // $mscanteen->gambar = $request->gambar;
        // $mscanteen->descripsi = $request->descripsi;
        // $mscanteen->save();

        // Cara ke-dua menggunakan key
        // Mscanteen::create([
        //     'kode'=> $request->kode,
        //     'namabarang'=> $request->namabarang,
        //     'groups'=> $request->groups,
        //     'price'=> $request->price,
        //     'gambar'=> $request->gambar,
        //     'descripsi'=> $request->descripsi
        // ]);
        
        $request->validate([
            'kode' => 'required|size:7',
            'namabarang' => 'required',
            'groups' => 'required',
            'price' => 'required'
        ]);    

        // Cara singkat create jika sudah mempunyai fillable / garden pada model
        Mscanteen::create($request->all());
        return redirect('/mscanteens')->with('status', 'Data Menu Baru Berhasil Ditambahkan!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mscanteen  $mscanteen
     * @return \Illuminate\Http\Response
     */

    public function show(Mscanteen $mscanteen)
    {
        return view('MasterCanteens.show', compact('mscanteen'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mscanteen  $mscanteen
     * @return \Illuminate\Http\Response
     */
    public function edit(Mscanteen $mscanteen)
    {
        return view('MasterCanteens.edit', compact('mscanteen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mscanteen  $mscanteen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mscanteen $mscanteen)
    {
        $request->validate([
            'kode' => 'required|size:7',
            'namabarang' => 'required',
            'groups' => 'required',
            'price' => 'required'
        ]); 

        Mscanteen::where('kode', $mscanteen->kode)
                   ->update([
                        'kode' => $request->kode,
                        'namabarang' => $request->namabarang,
                        'groups' => $request->groups,
                        'price' => $request->price,
                        'gambar' => $request->gambar,
                        'descripsi' => $request->descripsi
                   ]);
        return redirect('/mscanteens')->with('status', 'Data Menu Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mscanteen  $mscanteen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mscanteen $mscanteen)
    {
        Mscanteen::destroy($mscanteen->kode);
        return redirect('/mscanteens')->with('status', 'Data Menu Berhasil Dihapus!');
    }
}
