<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class FormController extends Controller
{
    //
    public function login(Request $request)
    {
        $search = $request->get('search', '');
        return view('login', compact('search'));
    }

    public function signup(Request $request)
    {
        $search = $request->get('search', '');
        return view('signup', compact('search'));
    }


    public function create()
 {
   return view ('mahasiswa.create');
 }

 public function store(Request $request)
 {
   $validateData = $request->validate([
      'nim' => 'required|size:8',
      'nama' => 'required|min:3|max:50',
      'email' => 'required|email',
      'jenis_kelamin' => 'required|in:P,L',
      'jurusan' => 'required',
      'alamat' => '',
   ]);

   $mahasiswa = new User();
   $mahasiswa->nim = $validateData['nim'];
   $mahasiswa->nama = $validateData['nama'];
   $mahasiswa->email = $validateData['email'];
   $mahasiswa->jenis_kelamin = $validateData['jenis_kelamin'];
   $mahasiswa->jurusan = $validateData['jurusan'];
   $mahasiswa->alamat = $validateData['alamat'];
   $mahasiswa->save();

   return redirect()->route('mahasiswas.read')
        ->with('pesan', "Data added {$validateData['nama']} berhasil");
 }


 public function read()
 {
   $mahasiswas = User::all();
   return view('mahasiswa.read', ['mahasiswas' => $mahasiswas]);
 }


 public function edit($id)
 {
     $mahasiswa = User::findOrFail($id); 
     return view('mahasiswa.edit', ['mahasiswa' => $mahasiswa]);
 }
 
 public function update(Request $request, $id)
{
    $mahasiswa = User::findOrFail($id);
    $validateData = $request->validate([
        'nim' => 'required|size:8|unique:mahasiswas,nim,' . $id,
        'nama' => 'required|min:3|max:50',
        'email' => 'required|email',
        'jenis_kelamin' => 'required|in:P,L',
        'jurusan' => 'required',
        'alamat' => '',
    ]);
    $mahasiswa->update($validateData);
    return redirect()->route('mahasiswas.read')
        ->with('pesan', "Update data {$validateData['nama']} berhasil");
}


public function destroy(User $mahasiswa)
{
  $mahasiswa->delete();
  return redirect()->route('mahasiswas.read')
  ->with('pesan', "Hapus data $mahasiswa->nama berhasil");
}


}

