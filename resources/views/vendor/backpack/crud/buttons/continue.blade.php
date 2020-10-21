@if ($crud->hasAccess('update'))
<a href="{{ url($crud->route.'/'.$entry->getKey().'/edit') }} " class="btn btn-sm btn-link"><i class="la la-edit"></i> {{__('base.continue')}} </a>
@endif
