<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\support\facades\Validator;
class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $obat = Obat::all();
        return view('obat.index', compact('obat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('obat.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
             'kode_obat' => 'required',
             'nama_obat' => 'required',
             'jenis_obat' => 'required',
             'sediaan_obat' => 'required',
             'dosis' => 'required',
             'harga' => 'required',
        
         ],[
             'kode_obat.required' => 'kode_obat tidak boleh kosong',
             'nama_obat.required' => 'nama_obat tidak boleh kosong',
             'jenis_obat.required' => 'jenis_obat tidak boleh kosong',
             'sediaan_obat.required' => 'jenis_obat tidak boleh kosong',
             'dosis.required' => 'dosis tidak boleh kosong',
             'harga.required' => 'harga tidak boleh kosong',
        ]);
       Obat::create($request->all());
        return redirect()->route('obat.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $obat = Obat::find($id);
        return view('obat.edit', compact('obat'));

    }
    

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
{
   //validasi input
   $validator = Validator::make($request->all(), [
       'kode_obat' => 'required',
       'nama_obat' => 'required',
       'jenis_obat' => 'required',
       'sediaan_obat' => 'required',
       'dosis' => 'required',
       'harga' => 'required',
     

   ],[
    'kode_obat.required' => 'Nama obat  tidak boleh kosong',
    'nama_obat.required' => 'nama_obat tidak boleh kosong',
    'jenis_obat.required' => 'jenis_obat tidak boleh kosong',
    'sediaan_obat.required' => 'sediaan_obat tidak boleh kosong',
    'dosis.required' => 'dosis tidak boleh kosong',
    'harga.required' => 'harga tidak boleh kosong',
   
    

   ]);

   //cek jika validasi gagal
   if ($validator->fails()){
    return redirect()->route('obat.edit',$id)
    ->withErrors($validator)
    ->withInput();
   }
   $obat = Obat::find($id);
   $obat->update($request->all());
   return redirect()->route('obat');
}


    

       // $matakuliah = MataKuliah::find($id);
      //  $matakuliah->update($request->all());
      //  return redirect()->route('matakuliah.index');
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        $obat = Obat::find($id);
        $obat->delete();
        return redirect()->route('obat.index');
    }

}