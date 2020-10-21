<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
use App\Models\Evaluation;
use App\Models\Thread;

class EvaluationThread extends Pivot
{
    use HasRelationships;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'evaluation_thread';
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
    public function evaluations() {
        return $this->belongsToMany(Evaluation::class);
    }

    public function threads() {
        return $this->belongsToMany(Thread::class);
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
