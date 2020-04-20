<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
        // return 'test';
        $categori = \App\Categories::paginate(3);
        // dd($categori);
        return view('kategori.index', compact('categori'));
        // return response()->json(Categories::all());
    }

    // action yang digunakan untuk menampilkan berdasarkan search
    public function search(Request $request)
    {
    //
        $kategori = $request->get('name');
        return Categories::where('name','like','%'.$kategori.'%')->get();
    }

    // action yang digunakan softdelete
    public function delete($id)
    {
        $category = Categories::findOrFail($id);
        // return $category;
        if(!$category->trashed()){
            $category->delete();
        }

    }

    // action yang digunakan untuk restore
    public function restore($id)
    {
        $category = Categories::withTrashed()->findOrFail($id);

        if(!$category->trashed()){
            return 'Kategori tidak perlu di restore';
        } else {
            return "Kategori $category->name berhasil direstore";
        }

    }

    // action yang digunakan untuk delete permanent
    public function permanetDelete($id)
    {
        $category = Categories::withTrashed()->findOrFail($id);
        $category->forceDelete();
    }
}
