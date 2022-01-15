<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;

class HomeController extends Controller
{
    public function index()
    {
        $kategoris = KategoriModel :: all();

        return view ('home', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'kategori' => 'required | max:30',
        ]);

        $name = $request->file('image')->getClientOriginalName();

        $request->image->move(public_path('images'),$name);

        dd('sukses');

        // $kategori = new KategoriModel();

        // $kategori->kategori = $request->kategori;

        // $kategori->save();

        // return redirect("/");
    }

    public function update($id, Request $request)
    {
        $kategoris = [
            'kategori' => $request->kategori,
        ];

        KategoriModel::where('idkategori', $id)
        ->update($kategoris);

        return redirect("/");
    }

    public function destroy($id)
    {
        KategoriModel::where('idkategori', $id)->delete();

        return redirect("/");
    }
}
