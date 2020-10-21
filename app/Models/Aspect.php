<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Venturecraft\Revisionable\RevisionableTrait;
use \Znck\Eloquent\Traits\BelongsToThrough;
use App\Models\Topic;
use App\Models\Dimension;
use App\Models\Question;

class Aspect extends Model
{
    use CrudTrait;
    use RevisionableTrait;
    use SoftDeletes;
    use BelongsToThrough;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'aspects';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'title',
        'description',
        'dimension_id',
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
    public function topic()
    {
        return $this->belongsToThrough(Topic::class, Dimension::class);
    }
    public function dimension()
    {
        return $this->belongsTo(Dimension::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
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
