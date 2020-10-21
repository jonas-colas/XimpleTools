<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use \Staudenmeir\LaravelAdjacencyList\Eloquent\HasRecursiveRelationships;
use App\Models\Thread;
use App\Models\Dimension;
use App\Models\Aspect;

class Collaborator extends Model
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
