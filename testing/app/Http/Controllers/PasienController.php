<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\support\facades\Validator;
class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $pasien = Pasien::with('dokter')->get();
        return view('pasien.index', compact('pasien'));;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pasien.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'kode_pasien' => 'required',
             'nama_pasien' => 'required',
             'umur' => 'required',
             'jenis_kelamin' => 'required',
             'tanggal_lahir' => 'required',
             'alamat' => 'required',
             'keluhan' => 'required',
             'diagnosa' => 'required',
         ],[
             'kode_pasien.required' => 'Kode  pasien  tidak boleh kosong',
             'nama_pasien.required' => 'Nama pasien  tidak boleh kosong',
             'umur.required' => 'umur tidak boleh kosong',
             'jenis_kelamin.required' => 'jenis kelamin tidak boleh kosong',
             'tanggal_lahir.required' => 'tanggal lahir tidak boleh kosong',
             'alamat.required' => 'alamat tidak boleh kosong',
             'keluhan.required' => 'keluhan tidak boleh kosong',
         ]);
       Pasien::create($request->all());
        return redirect()->route('pasien.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $pasien = Pasien::find($id);
        return view('pasien.edit', compact('pasien'));

    }
    

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
{
   //validasi input
   $validator = Validator::make($request->all(), [
       'nama_pasien' => 'required',
       'umur' => 'required',
       'jenis_kelamin' => 'required',
       'tanggal_lahir' => 'required',
       'alamat' => 'required',
       'keluhan' => 'required',

   ],[
    'nama_pasien.required' => 'Nama pasien  tidak boleh kosong',
    'umur.required' => 'umur tidak boleh kosong',
    'jenis_kelamin.required' => 'jenis kelamin tidak boleh kosong',
    'tanggal_lahir.required' => 'tanggal lahir tidak boleh kosong',
    'alamat.required' => 'alamat tidak boleh kosong',
    'keluhan.required' => 'keluhan tidak boleh kosong',
    

   ]);

   //cek jika validasi gagal
   if ($validator->fails()){
    return redirect()->route('pasien.edit',$id)
    ->withErrors($validator)
    ->withInput();
   }
   $pasien = Pasien::find($id);
   $pasien->update($request->all());
   return redirect()->route('pasien');
}


    

       // $matakuliah = MataKuliah::find($id);
      //  $matakuliah->update($request->all());
      //  return redirect()->route('matakuliah.index');
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {   
        $pasien = Pasien::find($id);
        $pasien->delete();
        return redirect()->route('pasien.index');
    }

}