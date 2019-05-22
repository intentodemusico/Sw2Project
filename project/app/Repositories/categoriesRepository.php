<?php

namespace App\Repositories;

use App\Models\categories;
use App\Repositories\BaseRepository;

/**
 * Class categoriesRepository
 * @package App\Repositories
 * @version May 22, 2019, 2:34 am UTC
*/

class categoriesRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'CategoryName',
        'Description'
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
        return categories::class;
    }
}
