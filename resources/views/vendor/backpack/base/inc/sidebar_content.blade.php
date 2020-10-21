<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('base.home') }}</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('test') }}"><i class="la la-users nav-icon"></i>Mi autoevaluación</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('team') }}"><i class="la la-users nav-icon"></i>Evaluación de Equipo</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('collaborator') }}"><i class="la la-users nav-icon"></i>Equipo Indirecto</a></li>

<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-cog"></i>{{ __('base.config') }}</a>
    <ul class="nav-dropdown-items">
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('evaluation') }}'><i class='nav-icon la la-file-alt'></i>{{ __('base.evaluations') }}</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('thread') }}'><i class='nav-icon la la-sitemap'></i>{{ __('base.threads') }}</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('question') }}'><i class='nav-icon la la-question'></i>{{ __('base.questions') }}</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('topic') }}'><i class='nav-icon la la-tree'></i>{{ __('base.topics') }}</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('dimension') }}'><i class='nav-icon la la-pagelines'></i>{{ __('base.dimensions') }}</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('aspect') }}'><i class='nav-icon la la-leaf'></i>{{ __('base.aspects') }}</a></li>
  </ul>
</li>
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i>{{ __('base.advanced') }}</a>
	<ul class="nav-dropdown-items">
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>{{ trans('backpack::permissionmanager.users') }}</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>{{ trans('backpack::permissionmanager.roles') }}</span></a></li>
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>{{ trans('backpack::permissionmanager.permission_plural') }}</span></a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('log') }}'><i class='nav-icon la la-terminal'></i>{{ __('base.log') }}</a></li>
        <li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-cog'></i> <span>{{ __('base.settings') }}</span></a></li>
	</ul>
</li>

{{-- <li class='nav-item'><a class='nav-link' href='{{ backpack_url('result') }}'><i class='nav-icon la la-question'></i> Results</a></li> --}}
