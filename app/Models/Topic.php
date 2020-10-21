<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\RevisionableTrait;
use App\Models\Dimension;
use App\Models\Aspect;
use App\Models\Question;

class Topic extends Model
{
    use CrudTrait;
    use RevisionableTrait;
    use SoftDeletes;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'topics';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'description',
    ];
    // protected $hidden = ['user_id'];
    // protected $dates = [];

    public function identifiableName()
    {
        return 'title';
    }

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function dimensions()
    {
        return $this->hasMany(Dimension::class);
    }
    public function aspects()
    {
        return $this->hasManyThrough(Aspect::class, Dimension::class);
    }
    public function questions()
    {
        return $this->hasManyThrough(Question::class, Dimension::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

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
