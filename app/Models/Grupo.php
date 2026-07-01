<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grupo
 *
 * @property $id
 * @property $descrip
 * @property $vidautil
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Grupo extends Model
{
    
    protected $perPage = 50;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['descrip', 'vidautil'];

    public function activos()
    {
        return $this->hasMany(Activo::class);
    }

}
