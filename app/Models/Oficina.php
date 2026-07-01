<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Oficina
 *
 * @property $id
 * @property $codigo
 * @property $nombre
 * @property $piso
 * @property $created_at
 * @property $updated_at
 *
 * @property Activo[] $activos
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Oficina extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['codigo', 'nombre', 'piso'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function activos()
    {
        return $this->hasMany(\App\Models\Activo::class, 'id', 'oficina_id');
    }
    
}
