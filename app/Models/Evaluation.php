<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Venturecraft\Revisionable\RevisionableTrait;
use \Staudenmeir\EloquentHasManyDeep\HasRelationships;
use Illuminate\Support\Carbon;
use App\Models\Question;
use App\Models\Thread;

class Evaluation extends Model
{
    use CrudTrait;
    use RevisionableTrait;
    use HasRelationships;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'evaluations';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    //protected $guarded = ['thread_id'];
    protected $fillable = [
        'title',
        'description',
        'publish_date',
        'expire_date',
        'status',
        'type',
        'user_id',
    ];
    // protected $casts = [
    //     'publish_date' => 'date',
    //     'expire_date'  => 'date',
    //     'status'       => 'boolean',
    // ];
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
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function threads()
    {
        return $this->belongsToMany(Thread::class, 'evaluation_thread')->withTimestamps();
    }
    public function questions()
    {
        return $this->hasManyDeep(Question::class, ['evaluation_thread', Thread::class, 'thread_question'])
                    ->withIntermediate(Thread::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */
    public function scopeActive($query) {
        $now = Carbon::now()->toDateString();
        return $query->where('status', true)
                    ->whereRaw('publish_date <=  date("'.$now.'")')
                    ->whereRaw('expire_date >=  date("'.$now.'")')
                    ->with('questions');
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
