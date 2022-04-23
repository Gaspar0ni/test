<?php

namespace App\Http\Controllers;

use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class ProdutoController extends Controller
{
    private $repository;
    public function __construct(Produto $model)
    {
        $this->repository = $model;
    }

    public function index()
    {
        $products = $this->repository->all();

        return view('produtos.view', ['products' => $products]);
    }

    public function show(Request $request, $id)
    {

        $products = $this->repository->where('id', $id)->first();

        if (!$products) {
            return redirect()->back();
        }
        //dd($products);

        return view('produtos.show', ['products' => $products]);
    }
}
