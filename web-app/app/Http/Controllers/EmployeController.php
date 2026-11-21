<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index()
    {
        $data['judul'] = 'CRUD Data Pegawai';
        $data['employes'] = Employe::all();
        return view('tampil_data', $data);
    }

    public function create()
    {
        $data['judul'] = 'Tambah Data Pegawai';
        return view('tambah_data', $data);
    }

    public function store(Request $request)
    {
        $employe = new Employe;
        $employe->id = $request->id;
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;
        $employe->save();
        return redirect('/employe');
    }

    public function show(Employe $employe)
    {
        $data['judul'] = 'Edit Data Pegawai';
        $data['employe'] = $employe;
        return view('edit_data', $data);
    }

    public function update(Request $request, Employe $employe)
    {
        $employe = Employe::find($employe->id);
        $employe->nama = $request->nama;
        $employe->alamat = $request->alamat;
        $employe->gender = $request->gender;
        $employe->gaji = $request->gaji;
        $employe->save();
        return redirect('/employe');
    }

    public function destroy(Employe $employe)
    {
        $employe = Employe::find($employe->id);
        $employe->delete();
        return redirect('/employe');
    }
}