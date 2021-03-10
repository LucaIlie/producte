<?php


namespace App\Services;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\Validator;

class ProductService
{
    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }
    public function getAll(){
        return $this->productRepository->getAll();
    }
    public function saveProdData($data){
        $valid = Validator::make($data,[
            'nume' => 'required',
            'producator' => 'required',
            'pret' => 'required',
            'cantitate' => 'required'
        ]);
        if ($valid->fails()){
            throw new \InvalidArgumentException ($valid->errors()->first());
        }
        $result = $this->productRepository->save($data);
        return $result;
    }
    public function getById($id){
        return $this->productRepository->getById($id);
    }
}
