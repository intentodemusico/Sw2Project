<?php

namespace App\Repositories;

use App\Models\suppliers;
use App\Repositories\BaseRepository;

/**
 * Class suppliersRepository
 * @package App\Repositories
 * @version May 22, 2019, 2:49 am UTC
*/

class suppliersRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'SupplierID',
        'CompanyName',
        'ContactName',
        'ContactTitle',
        'Adress',
        'City',
        'Region',
        'PostalCode',
        'Country',
        'Phone',
        'Fax',
        'HomePage'
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
        return suppliers::class;
    }
}
