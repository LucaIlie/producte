<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Services\ProductService;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    protected $productService;


    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function index()
    {
        return view('products.index',['product'=>
            $this->productService->getAll()])->with('success','Sa creat cu succes');
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $data = $request->only([
             'nume',
             'producator',
             'pret',
             'cantitate'
        ]);
        $this->productService->saveProdData($data);
    }

    public function show(Product $product)
    {
        $product = $this->productService->getById($product->id);

        return view('products.show',['showProduct' => $product]);
    }

    public function edit(Product $product)
    {

    }

    public function update(Request $request, Product $product)
    {

    }

    public function destroy(Product $product)
    {

    }
}
