<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Activo
 *
 * @property $id
 * @property $codigo
 * @property $descrip
 * @property $precio
 * @property $fadquisicion
 * @property $foto
 * @property $estado_id
 * @property $grupo_id
 * @property $oficina_id
 * @property $responsable_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Estado $estado
 * @property Grupo $grupo
 * @property Oficina $oficina
 * @property Responsable $responsable
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Activo extends Model
{
    
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['codigo', 'descrip', 'precio', 'fadquisicion', 'foto', 'estado_id', 'grupo_id', 'oficina_id', 'responsable_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function estado()
    {
        return $this->belongsTo(\App\Models\Estado::class, 'estado_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function grupo()
    {
        return $this->belongsTo(\App\Models\Grupo::class, 'grupo_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function oficina()
    {
        return $this->belongsTo(\App\Models\Oficina::class, 'oficina_id', 'id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function responsable()
    {
        return $this->belongsTo(\App\Models\Responsable::class, 'responsable_id', 'id');
    }
    
}
