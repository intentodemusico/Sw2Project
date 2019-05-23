<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class suppliers
 * @package App\Models
 * @version May 22, 2019, 2:49 am UTC
 *
 * @property \App\Models\products products
 * @property string CompanyName
 * @property string ContactName
 * @property string ContactTitle
 * @property string Adress
 * @property string City
 * @property string Region
 * @property string PostalCode
 * @property string Country
 * @property string Phone
 * @property string Fax
 * @property string HomePage
 */
class suppliers extends Model
{
    use SoftDeletes;

    public $table = 'suppliers';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'SupplierID' => 'integer',
        'CompanyName' => 'string',
        'ContactName' => 'string',
        'ContactTitle' => 'string',
        'Adress' => 'string',
        'City' => 'string',
        'Region' => 'string',
        'PostalCode' => 'string',
        'Country' => 'string',
        'Phone' => 'string',
        'Fax' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     **/
    public function products()
    {
        return $this->hasOne(\App\Models\products::class, 'SupplierID', 'SupplierID');
    }
}
