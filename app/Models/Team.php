<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
use App\Models\Thread;
use App\Models\Dimension;
use App\Models\Aspect;
use App\Models\Test;

class Team extends Model
{

    use CrudTrait;
    use HasRecursiveRelationships;
    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'users';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
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

    public function test()
    {
        return $this->hasOne(Test::class);
    }

   /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    // public function isAdministrator()
    // {
    //     return $this->hasRole('Admin');
    // }

    public function getParentKeyName()
    {
        return 'chief_id';
    }

    // public function getLocalKeyName()
    // {
    //     return 'id';
    // }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    public function scopeTeamDescendants($query, $user_id)
    {
        return $query->where('id', '=', $user_id)
                     ->with('descendants')
                     ->first()
                     ->descendants
                    ;
    }
    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
