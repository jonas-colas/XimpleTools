<?php 
/*@php*/

use App\Models\Evaluation;
use App\Models\Test;

$evaluation = Evaluation::Active()
                        ->where('type', true)
                        ->first();
$test       = Test::Tests($evaluation->id, $entry->getKey(), backpack_user()->id)
                        ->with('result')
                        ->first();
/*@endphp*/
?>


@if (!empty($evaluation) && empty($test))
    <a href="{{ url('admin/test/create/?user_id='.$entry->getKey()) }}" class="btn btn-sm btn-link"><i class="la la-edit"></i> {{__('base.evaluate')}} </a>
@elseif (!empty($evaluation) && $test->complete == false)
    <a href="{{ url('admin/test/'.$test->id.'/edit') }}" class="btn btn-sm btn-link"><i class="la la-edit"></i> {{__('base.continue')}} </a>
@elseif (!empty($evaluation) && $test->complete == true && !empty($test->result))
    <a href="{{ url('admin/result/'.$test->result->id.'/show') }}" class="btn btn-sm btn-link"><i class="la la-edit"></i> {{__('base.show_results')}} </a>
@endif
