{{-- @if ($crud->hasAccess('update')) --}}
<a href="{{ url('admin/test/create/?user_id='.$entry->getKey()) }} " class="btn btn-sm btn-link"><i class="la la-edit"></i> {{__('base.evaluate')}} </a>
{{-- @endif --}}
