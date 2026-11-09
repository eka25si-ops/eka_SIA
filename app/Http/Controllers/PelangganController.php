<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;

class PelangganController extends Controller
{
    public function index(Request $request)
    {
        $filterableColumns = ['gender'];
        $searchableColumns = ['first_name', 'last_name', 'email'];

        $data['dataPelanggan'] = Pelanggan::filter($request, $filterableColumns)
                                    ->search($request, $searchableColumns)
                                    ->paginate(10)
                                    ->withQueryString();

        return view('pelanggan.index', $data);
    }

    // Paparkan borang tambah pelanggan
    public function create()
    {
        return view('pelanggan.create');
    }

    // Simpan data dari borang ke database
    public function store(Request $request)
    {
        $data['first_name'] = $request->first_name;
        $data['last_name']  = $request->last_name;
        $data['birthday']   = $request->birthday;
        $data['gender']     = $request->gender;
        $data['email']      = $request->email;
        $data['phone']      = $request->phone;

        Pelanggan::create($data);

        return redirect()->route('pelanggan.index')->with('success', 'Penambahan Data Berhasil!');
    }

    // Paparkan form edit data pelanggan
    public function edit($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        return view('pelanggan.edit', compact('pelanggan'));
    }

    // Proses update data ke database
    public function update(Request $request, $id)
    {
        $pelanggan = Pelanggan::findOrFail($id);

        $data['first_name'] = $request->first_name;
        $data['last_name']  = $request->last_name;
        $data['birthday']   = $request->birthday;
        $data['gender']     = $request->gender;
        $data['email']      = $request->email;
        $data['phone']      = $request->phone;

        $pelanggan->update($data);

        return redirect()->route('pelanggan.index')->with('success', 'Perubahan Data Berhasil!');
    }

    // Hapus data pelanggan dari database
    public function destroy($id)
    {
        $pelanggan = Pelanggan::findOrFail($id);
        $pelanggan->delete();

        return redirect()->route('pelanggan.index')->with('success', 'Data Pelanggan Berhasil Dihapus!');
    }
}
