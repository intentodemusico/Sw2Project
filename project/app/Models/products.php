<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class products
 * @package App\Models
 * @version May 22, 2019, 1:41 am UTC
 *
 * @property \App\Models\suppliers supplierid
 * @property string ProductName
 * @property integer SupplierID
 * @property integer CategoryID
 * @property string QuantityPerUnity
 * @property float UnitPrice
 * @property integer UnitsInStock
 * @property integer UnitsOnOrder
 * @property integer ReorderLevel
 * @property boolean Discontinued
 */
class products extends Model
{
    use SoftDeletes;

    public $table = 'products';
    

    protected $dates = ['deleted_at'];


    public $fillable = [
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
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ProductID' => 'integer',
        'ProductName' => 'string',
        'SupplierID' => 'integer',
        'CategoryID' => 'integer',
        'QuantityPerUnity' => 'string',
        'UnitPrice' => 'float',
        'UnitsInStock' => 'integer',
        'UnitsOnOrder' => 'integer',
        'ReorderLevel' => 'integer',
        'Discontinued' => 'boolean'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'ProductID' => 'Integer',
        'SupplierID' => 'Integer',
        'CategoryID' => 'Integer',
        'QuantityPerUnity' => 'Integer',
        'UnitPrice' => 'Numeric',
        'UnitsInStock' => 'Integer',
        'UnitsOnOrder' => 'Integer',
        'ReorderLevel' => 'Integer',
        'Discontinued' => 'Boolean'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function supplierid()
    {
        return $this->belongsTo(\App\Models\suppliers::class, 'SupplierID', 'SupplierID');
    }

    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function categoryid()
    {
        return $this->belongsTo(\App\Models\categories::class, 'CategoryID', 'CategoryID');
    }
}
