<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Repositories\productsRepository;


class ProductsRepositoryTest extends TestCase{

     /**
     * @var productsRepository
     */
    protected $productsRepository;
    
    protected function setUp() : void
    {
        parent::setUp();
        $this->productsRepository = $this->app->make(productsRepository::class);
        
    }


    /** @test */
    public function it_should_return_true_when_stock_greater()
    {

        $res= $this->productsRepository->checkStockAvailable(6,12);
        $this->assertEquals($res,true);

    }
    /** @test */
    public function testIndex1()
    {
        $res= $this->productsRepository->discountOnStockSale(6,20);
        //$res= $this->productsRepository->discountOnStockSale(3,20);
        $valor=176;
        $this->assertEquals($res,$valor);
    }
    /** @test */
    public function testIndex2()
    {
        $res= $this->productsRepository->checkUnitsInStockDecrease(6,150000);
        $this->assertEquals($res,true);
    }
}