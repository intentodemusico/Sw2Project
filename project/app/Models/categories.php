<?php

namespace App\Models;

use Eloquent as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class categories
 * @package App\Models
 * @version May 22, 2019, 2:34 am UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection products
 * @property string CategoryName
 * @property string Description
 */
class categories extends Model
{
    use SoftDeletes;

    public $table = 'categories';
    

    protected $dates = ['deleted_at'];
    protected $primaryKey = 'CategoryID';

    public $fillable = [
        'CategoryName',
        'Description'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'CategoryID' => 'integer',
        'CategoryName' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function products()
    {
        return $this->hasMany(\App\Models\products::class, 'CategoryID', 'CategoryID');
    }
}
