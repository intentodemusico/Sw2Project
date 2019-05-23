<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatesuppliersRequest;
use App\Http\Requests\UpdatesuppliersRequest;
use App\Repositories\suppliersRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class SuppliersController extends AppBaseController
{
    /** @var  suppliersRepository */
    private $suppliersRepository;

    public function __construct(suppliersRepository $suppliersRepo)
    {
        $this->suppliersRepository = $suppliersRepo;
    }

    /**
     * Display a listing of the suppliers.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $suppliers = $this->suppliersRepository->paginate(10);

        return view('suppliers.index')
            ->with('suppliers', $suppliers);
    }

    /**
     * Show the form for creating a new suppliers.
     *
     * @return Response
     */
    public function create()
    {
        return view('suppliers.create');
    }

    /**
     * Store a newly created suppliers in storage.
     *
     * @param CreatesuppliersRequest $request
     *
     * @return Response
     */
    public function store(CreatesuppliersRequest $request)
    {
        $input = $request->all();

        $suppliers = $this->suppliersRepository->create($input);

        Flash::success('Suppliers saved successfully.');

        return redirect(route('suppliers.index'));
    }

    /**
     * Display the specified suppliers.
     *
     * @param int $SupplierID
     *
     * @return Response
     */
    public function show($SupplierID)
    {
        $suppliers = $this->suppliersRepository->find($SupplierID);

        if (empty($suppliers)) {
            Flash::error('Suppliers not found');

            return redirect(route('suppliers.index'));
        }

        return view('suppliers.show')->with('suppliers', $suppliers);
    }

    /**
     * Show the form for editing the specified suppliers.
     *
     * @param int $SupplierID
     *
     * @return Response
     */
    public function edit($SupplierID)
    {
        $suppliers = $this->suppliersRepository->find($SupplierID);

        if (empty($suppliers)) {
            Flash::error('Suppliers not found');

            return redirect(route('suppliers.index'));
        }

        return view('suppliers.edit')->with('suppliers', $suppliers);
    }

    /**
     * Update the specified suppliers in storage.
     *
     * @param int $SupplierID
     * @param UpdatesuppliersRequest $request
     *
     * @return Response
     */
    public function update($SupplierID, UpdatesuppliersRequest $request)
    {
        $suppliers = $this->suppliersRepository->find($SupplierID);

        if (empty($suppliers)) {
            Flash::error('Suppliers not found');

            return redirect(route('suppliers.index'));
        }

        $suppliers = $this->suppliersRepository->update($request->all(), $SupplierID);

        Flash::success('Suppliers updated successfully.');

        return redirect(route('suppliers.index'));
    }

    /**
     * Remove the specified suppliers from storage.
     *
     * @param int $SupplierID
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($SupplierID)
    {
        $suppliers = $this->suppliersRepository->find($SupplierID);

        if (empty($suppliers)) {
            Flash::error('Suppliers not found');

            return redirect(route('suppliers.index'));
        }

        $this->suppliersRepository->delete($SupplierID);

        Flash::success('Suppliers deleted successfully.');

        return redirect(route('suppliers.index'));
    }
}
