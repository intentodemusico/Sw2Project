<?php

namespace App\Repositories;

use App\Models\products;
use App\Repositories\BaseRepository;

/**
 * Class productsRepository
 * @package App\Repositories
 * @version May 22, 2019, 1:41 am UTC
*/

class productsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'ProductID',
        'ProductName',
        'SupplierID',
        'CategoryID',
        'QuantityPerUnity',
        'UnitPrice',
        'UnitsInStock',
        'UnitsOnOrder',
        'ReorderLevel',
        'Discontinued'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return products::class;
    }


    
    /**
     * Update the specified products in storage.
     *
     * @param int $ProductID
     * @param int $quantity
     *
     * @return Boolean
     */
    public function checkStockAvailable($ProductID, $quantity)
    {
        $products = $this->find($ProductID);//findByColumn('ProductID', $ProductID)->first();;

        if ($products->UnitsInStock<$quantity) { 
            return false; 
        }else {
            return true;
        }
    }

    /**
     * Update the specified products in storage.
     *
     * @param int $ProductID
     * @param int $quantity
     *
     * @return Response
     */
    public function checkQuantityGreaterThanHalf($ProductID, $quantity)
    {
        $products = $this->find($ProductID);//findByColumn('ProductID', $ProductID)->first();;
        $units=$products->UnitsInStock/2;
        if ($units <= $quantity) { //wat
            return true;//$price;
        }
        else{
            return true;
        }            
    }

    /**
     * Update the specified products in storage.
     *
     * @param int $ProductID
     * @param int $quantity
     *
     * @return Response
     */
    public function discountOnStockSale($ProductID, $quantity)
    {
        $products = $this->find($ProductID);//findByColumn('ProductID', $ProductID)->first();;
        if ($this->checkStockAvailable($ProductID,$quantity)){
            $price=$products->UnitPrice * $quantity;
            
            if ($this->checkQuantityGreaterThanHalf($ProductID, $quantity) && $quantity >= 10){
                //
                $price=$price*0.8;
                 //redirect(route('products.index'));
            }
            return $price;//$price;
        }
        Flash::error('No existe el producto');
        return  redirect(route('products.index'));
    }

    public function checkUnitsInStockDecrease ($ProductID,$quantity){
        $products = $this->find($ProductID);
        $units=$products->UnitsInStock;
        if ($this->checkStockAvailable($ProductID,$quantity)){
        $this->buy($ProductID,$quantity);
        $products = $this->find($ProductID);
        //update(unit)
        if($products->UnitsInStock < $units){
            return true;
        }
        else{
            return false;
        }
    }else{return false;}
    }

    public function buy($ProductID,$quantity){
        $products = $this->find($ProductID);
        $units=$products->UnitsInStock;
        $products->UnitsInStock=$units-$quantity;
        $products->save();
    }
}
