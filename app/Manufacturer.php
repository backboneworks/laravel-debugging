<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'manufacturers';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'website'];

    /**
     * Related CarModels.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function carModels()
    {
        return $this->hasMany(CarModel::class);
    }

    /**
     * Get a list of Manufacturer names keyed by id.
     */
    public static function getNamesList()
    {
        return self::select(['id', 'name'])->pluck('name', 'id')->toArray();
    }
}
