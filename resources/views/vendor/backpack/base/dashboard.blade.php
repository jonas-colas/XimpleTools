@extends(backpack_view('blank'))

@php

    $evaluation = App\Models\Evaluation::Active()
                                            ->where('type', 0)
                                            ->first();
    $tests      = App\Models\Test::Tests($evaluation->id, backpack_user()->id, backpack_user()->id)
                                        //->where('complete', false)
                                        ->first();

    $heading     = '¡Hola, ' . backpack_user()->name . '!';
    $content     = Setting::get('dashboard_welcome');
    $embed       = Setting::get('dashboard_video');

    if($evaluation && empty($tests) ){ // CREAR
        $button_link = backpack_url('test/create');
        $button_text = 'COMENZAR AUTOEVALUACIÓN';
    } elseif ($evaluation && $tests->complete == false) {
        $button_link = backpack_url('test/'.$tests->id.'/edit');
        $button_text = 'CONTINUAR AUTOEVALUACIÓN';
    } elseif ($evaluation && $tests->complete == true) { // VER RESULTADOS
        $button_link = backpack_url('test');
        $button_text = 'MI AUTOEVALUACIÓN';
    }

    Widget::add()->to('before_content')->type('div')->class('row')->content([
		Widget::make()
            ->type('jumbotron2')
			->wrapperClass('col-sm-12')
			->heading($heading)
			->content($content)
            ->button_link($button_link)
            ->button_text($button_text)
            ->button_link2('team')
            ->button_text2('EVALUACIÓN DE EQUIPO'),
	]);

    $userCount = App\Models\User::count();
    $evaluationCount = App\Models\Evaluation::where('status', true)->count();
    $evaluationExpire = App\Models\Evaluation::where('status', true)->first();
    $evaluationFinish = \Carbon\Carbon::parse($evaluationExpire->expire_date)->diffInDays(\Carbon\Carbon::today());
    $evaluationInactiveCount = App\Models\Evaluation::where('status', false)->count();
    $questionCount = App\Models\Question::count();

	// Widget::add()->to('before_content')->type('div')->class('row')->content([
	// 	Widget::add()
	// 	    ->type('progress_white')
	// 	    ->class('card border-0')
	// 	    ->progressClass('progress-bar bg-success')
	// 	    ->value($evaluationCount.' Evaluaciones Activas')
	// 	    ->description('Great! Don\'t stop')
	// 	    ->progress(100)
	// 	    ->hint('Great! Don\'t stop.')
    //         ->wrapper(['class' => 'col-4'])
    //         ->onlyHere(),
    //     Widget::add()
	// 	    ->type('progress_white')
	// 	    ->class('card border-0')
	// 	    ->progressClass('progress-bar bg-warning')
	// 	    ->value($questionCount.' Preguntas Pendientes')
	// 	    ->description('Great! Don\'t stop')
	// 	    ->progress(80)
    //         ->hint('Great! Don\'t stop.')
    //         ->wrapper(['class' => 'col-4'])
	// 	    ->onlyHere(),
    //     Widget::make()
	// 		->group('hidden')
	// 	    ->type('progress_white')
	// 	    ->class('card border-0')
	// 	    ->value($evaluationFinish.' días')
	// 	    ->progressClass('progress-bar bg-danger')
	// 	    ->description('hasta la fecha de entrega.')
	// 	    ->progress(30)
    //         ->hint('Tenes tiempo para completar la evaluación.')
    //         ->wrapper(['class' => 'col-4']),
	// ]);

@endphp

@section('content')
    {{-- In case widgets have been added to a 'content' group, show those widgets. --}}
    @include(backpack_view('inc.widgets'), [ 'widgets' => app('widgets')->where('group', 'content')->toArray() ])

    {{-- @if (auth()->user()->isAdministrator())
        Hello Admin
    @elseif(auth()->user()->isCorrector())
        Hello Corrector
    @else
        Hello standard user
    @endif --}}
    <div class="col-sm-12">
        <div class="card">
        <div class="card-header">
          <i class="fa fa-align-justify"></i> Talento<small> - Material descargable</small>
          <div class="card-header-actions">
            <a class="card-header-action" href="http://coreui.io/docs/components/bootstrap-carousel/" 
            target="_blank"><i class="la la-download"></i>
            </a>
          </div>
        </div>
        <div class="card-body">
            <div class="carousel slide" id="carouselExampleSlidesOnly" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="../img-carousel/Diapositiva4.jpg" data-holder-rendered="true">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../img-carousel/Diapositiva5.jpg" data-holder-rendered="true">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="../img-carousel/Diapositiva6.jpg" data-holder-rendered="true">
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>

@endsection
