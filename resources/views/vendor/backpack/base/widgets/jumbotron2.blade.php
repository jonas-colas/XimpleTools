@php
	// preserve backwards compatibility with Widgets in Backpack 4.0
	if (isset($widget['wrapperClass'])) {
		$widget['wrapper']['class'] = $widget['wrapperClass'];
	}
@endphp

@includeWhen(!empty($widget['wrapper']), 'backpack::widgets.inc.wrapper_start')
	<div class="jumbotron mb-2">

	  @if (isset($widget['heading']))
	  <h1 class="display-3">{!! $widget['heading'] !!}</h1>
	  @endif

	  @if (isset($widget['content']))
	  <p>{!! $widget['content'] !!}</p>
	  @endif

	  @if (isset($widget['button_link']))
	  <p class="lead">
	    <a class="btn btn-primary" href="{{ $widget['button_link'] }}" role="button">{{ $widget['button_text'] }}</a>

	  @endif
	  @if (isset($widget['button_link2']))

	    <a class="btn btn-primary" href="{{ $widget['button_link2'] }}" role="button">{{ $widget['button_text2'] }}</a>
	  </p>
	  @endif
	</div>
@includeWhen(!empty($widget['wrapper']), 'backpack::widgets.inc.wrapper_end')
