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
    // action untuk menampilkan semua kategori
     public function index()
    {
        // return Categories::all();
        return response()->json(Categories::all());
    }

    // action yang digunakan untuk menampilkan berdasarkan search
    public function search()
    {
    //

    }

    // action yang digunakan softdelete
    public function delete()
    {


    }

    // action yang digunakan untuk restore
    public function restore()
    {

    }

    // action yang digunakan untuk delete permanent
    public function permanetDelete()
    {

    }
}
