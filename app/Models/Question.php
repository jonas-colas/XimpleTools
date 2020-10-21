<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\RevisionableTrait;
use App\Models\Thread;
use App\Models\Dimension;
use App\Models\Aspect;

class Question extends Model
{
    use CrudTrait;
    use SoftDeletes;
    use RevisionableTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'questions';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'dimension_id',
        'aspect_id',
    ];
    // protected $hidden = [];
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
    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }
    public function aspect()
    {
        return $this->belongsTo(Aspect::class);
    }
    public function threads()
    {
        return $this->belongsToMany(Thread::class, 'thread_question')->withTimestamps();
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
