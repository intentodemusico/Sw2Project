<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductsRequest;
use App\Http\Requests\UpdateproductsRequest;
use App\Repositories\productsRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class ProductsController extends AppBaseController
{
    /** @var  productsRepository */
    private $productsRepository;

    public function __construct(productsRepository $productsRepo)
    {
        $this->productsRepository = $productsRepo;
    }

    /**
     * Display a listing of the products.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $products = $this->productsRepository->paginate(10);

        return view('products.index')
            ->with('products', $products);
    }

    /**
     * Show the form for creating a new products.
     *
     * @return Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created products in storage.
     *
     * @param CreateproductsRequest $request
     *
     * @return Response
     */
    public function store(CreateproductsRequest $request)
    {
        $input = $request->all();

        $products = $this->productsRepository->create($input);

        Flash::success('Products saved successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Display the specified products.
     *
     * @param int $ProductID
     *
     * @return Response
     */
    public function show($ProductID)
    {
        $products = $this->productsRepository->find($ProductID);//findByColumn("ProductID",$ProductID)->first();

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        return view('products.show')->with('products', $products);
    }

    /**
     * Show the form for editing the specified products.
     *
     * @param int $ProductID
     *
     * @return Response
     */
    public function edit($ProductID)
    {
        
        $products =  $this->productsRepository->find($ProductID);//findByColumn('ProductID', $ProductID)->first();// \DB::table('Products')->get();//('select * from products where ProductID=1', [1]);  //$   this->productsRepository->find($ProductID);

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        return view('products.edit')->with('products', $products);
    }

    /**
     * Update the specified products in storage.
     *
     * @param int $ProductID
     * @param UpdateproductsRequest $request
     *
     * @return Response
     */
    public function update($ProductID, UpdateproductsRequest $request)
    {
        $products = $this->productsRepository->find($ProductID);//findByColumn('ProductID', $ProductID)->first();;

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        $products = $this->productsRepository->update($request->all(),$ProductID);

        Flash::success('Products updated successfully.');

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified products from storage.
     *
     * @param int $ProductID
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($ProductID)
    {
        $products = $this->productsRepository->find($ProductID);//findByColumn('ProductID', $ProductID)->first();;

        if (empty($products)) {
            Flash::error('Products not found');

            return redirect(route('products.index'));
        }

        $this->productsRepository->delete('ProductID',$ProductID);

        Flash::success('Products deleted successfully.');

        return redirect(route('products.index'));
    }

}
