@php
use App\Models\Evaluation;
use App\Models\Test;

$evaluation = Evaluation::Active()
                        ->where('type', true)
                        ->first();
$test       = Test::Tests($evaluation->id, 63162, backpack_user()->id)
                        ->with('result')
                        ->first();
if ($test->result) {
    $result = $test->result;
    dd($result->id);
}


@endphp


@if (!empty($evaluation) && empty($test))
    <a href="{{ url('admin/test/create/?user_id=63162') }}" class="btn btn-sm btn-link"><i class="la la-edit"></i> {{__('base.evaluate')}} </a>
@elseif (!empty($evaluation) && $test->complete == false)
    <a href="{{ url('admin/test/'.$test->id.'/edit') }}" class="btn btn-sm btn-link"><i class="la la-edit"></i> {{__('base.continue')}} </a>
@elseif (!empty($evaluation) && $test->complete == true && !empty($result))
    <a href="{{ url('admin/result/'.$result->id.'/show') }}" class="btn btn-sm btn-link"><i class="la la-edit"></i> {{__('base.show_results')}} </a>
@else
    Ver Resultados
@endif
