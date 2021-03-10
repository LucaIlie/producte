<?php


namespace App\Repositories;
use App\Models\Product;

class ProductRepository
{
    protected $product;

    /**
     * ProductRepository constructor.
     * @param $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAll(){
        return $this->product->get();
    }
    public function save($data){
        $post = new $this->product;
        $post->nume = $data['nume'];
        $post->producator = $data['producator'];
        $post->pret = $data['pret'];
        $post->cantitate = $data['cantitate'];
        $post->save();

        return $post->fresh();
    }
    public function getById($id){
        return $this->product->where('id',$id)->get();
    }
}
