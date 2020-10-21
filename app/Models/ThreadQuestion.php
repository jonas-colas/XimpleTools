<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
use App\Models\Thread;
use App\Models\Question;

class ThreadQuestion extends Pivot
{
    use HasRelationships;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'thread_question';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['thread_id'];
    // protected $fillable = [];
    // protected $casts = [];
    // protected $hidden = [];
    // protected $dates = [];

    public $incrementing = true;

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
    public function thread() {
        return $this->belongsTo(Thread::class);
    }

    public function question() {
        return $this->belongsTo(Question::class);
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
