<?php

namespace App\Http\Controllers;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        return view ('mahasiswa.index')->with('mahasiswa', $mahasiswa);
    }
    
    public function create()
    {
        return view('mahasiswa.create');
    }
  
    public function store(Request $request)
    {
        $input = $request->all();
        Mahasiswa::create($input);
        return redirect('mahasiswa')->with('flash_message', 'Mahasiswa Addedd!');  
    }
    
    public function show($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.show')->with('mahasiswa', $mahasiswa);
    }
    
    public function edit($id)
    {
        $mahasiswa = Mahasiswa::find($id);
        return view('mahasiswa.edit')->with('mahasiswa', $mahasiswa);
    }
  
    public function update(Request $request, $id)
    {
        $mahasiswa = Mahasiswa::find($id);
        $input = $request->all();
        $mahasiswa->update($input);
        return redirect('mahasiswa')->with('flash_message', 'mahasiswa Updated!');  
    }
  
    public function destroy($id)
    {
        Mahasiswa::destroy($id);
        return redirect('mahasiswa')->with('flash_message', 'mahasiswa deleted!');  
    }
}
