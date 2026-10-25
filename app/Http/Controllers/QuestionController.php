<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama'       => 'required|min:5',
            'email'      => ['required', 'email'],
            'pertanyaan' => 'required|min:10|max:300',
        ], [
            'nama.required'       => 'Nama tidak boleh kosong',
            'nama.min'            => 'Nama minimal 5 karakter',
            'email.required'      => 'Email tidak boleh kosong',
            'email.email'         => 'Email tidak valid',
            'pertanyaan.required' => 'Pertanyaan tidak boleh kosong',
            'pertanyaan.min'      => 'Pertanyaan minimal 10 karakter',
            'pertanyaan.max'      => 'Pertanyaan maksimal 300 karakter',
        ]);

        $nama       = e($request->input('nama'));
        $email      = e($request->input('email'));
        $pertanyaan = e($request->input('pertanyaan'));

        return redirect('/home')->with(
            'info',
            "Terimakasih <b>$nama</b>! Pertanyaan ini: <b>$pertanyaan</b> akan segera direspon melalui email <b>$email</b>"
        );
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
