<?php 
use App\Models\Test;
$result = Test::find($entry->getKey())->result;
//var_dump($result->id);
?>

@if ($crud->hasAccess('update'))
<a href="{{ url('admin/result/'.$result->id.'/show') }}" class="btn btn-sm btn-link"><i class="la la-edit"></i> {{__('base.show_results')}} </a>
@endif
