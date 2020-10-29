<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
//use \Staudenmeir\LaravelCte\Eloquent\QueriesExpressions;

class User extends Authenticatable
{
    use Notifiable;
    use CrudTrait;
    use HasRoles;
    use HasRecursiveRelationships;
    //use QueriesExpressions;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'lastname',
        'position',
        'position_group',
        'position_class',
        'uo',
        'cost_center',
        'chief_id',
        'posicion_de',
        'managment',
        'subtotal_perfil', //perfil_profesional
        'conciencia_de_si_mismo',
        'agilidad_de_cambio',
        'agilidad_mental',
        'agilidad_interpersonal',
        'agilidad_de_resultados',
        'posicion_potencial_automatica', //automatica 
        'posicion_potencial_sugerida', // Sugerida por el
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


}
