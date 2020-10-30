@extends(backpack_view('blank'))

<?php 

    $defaultBreadcrumbs = [
        trans('backpack::crud.admin') => url(config('backpack.base.route_prefix'), 'dashboard'),
        $crud->entity_name_plural => url($crud->route),
        trans('backpack::crud.preview') => false,
    ];

    
    // if breadcrumbs aren't defined in the CrudController, use the default breadcrumbs
    $breadcrumbs = $breadcrumbs ?? $defaultBreadcrumbs;

    //$test = Test::find($crud->entry->test_id)->first();
    //$testeur = Setting::get();
    //dd($testeur);

    $subtotal_perfil = $crud->entry->subtotal_perfil;
    
    $opciones_perfil = array(
        1 => Setting::get('result_1'),
        2 => Setting::get('result_2'),
        3 => Setting::get('result_3'),
    );
    
    $subtotal_agilidad = $crud->entry->subtotal_agilidad;
    
    $opciones_agilidad = array(
        //0 => 'NO COINCIDE',  
        1 => 'Baja',
        2 => 'Media',
        3 => 'Alta',
    );
    
    //edit posicion sugerida
    //dd($crud->entry->test_id);
    $employe = DB::table('tests')->where('id', $crud->entry->test_id)->first();
    dd($employe->user_id);

    //dd(auth()->user()->id .' and ' . auth()->user()->chief_id); 
    //if(auth()->user()->name  == auth()->user()->name){}
    if(isset($_GET['savePosition'])){
       $position  = $_GET['new_position'];
        if(auth()->user()->id != $employe->user_id){

            if($position == 1 || $position == 2 || $position == 3){
                DB::table('results')->where('test_id', $crud->entry->test_id)
                ->update(['posicion_potencial_sugerida' => $position]);
            }
        }
    }


    $agi = $opciones_agilidad[$subtotal_agilidad];

    if ($subtotal_perfil == 1){
        $perfil = "Enfocado";
    }else if($subtotal_perfil == 2){
        $perfil = "Versátil";
    }else if($subtotal_perfil == 3){
        $perfil = "Amplio";
    }

    $getInfo = DB::table('results')
                ->where('test_id', $crud->entry->test_id)
                ->first();
    $auto = $getInfo->posicion_potencial_automatica;
    $sugerida = $getInfo->posicion_potencial_sugerida;

    //if($sugerida == null){
    if($auto == null){

        if($agi == 1 || $subtotal_perfil == 1){
            $resp_auto = 1;

        }else if(($subtotal_perfil == 2 && $agi == 3) || ($subtotal_perfil == 2 && $agi == 2) || ($subtotal_perfil == 3 && $agi == 2) ){
            $resp_auto = 2;
            
        }else if($subtotal_perfil == 3 && $agi == 3){
            $resp_auto = 3;
        }

        $auto = DB::table('results')
                    ->where('test_id', $crud->entry->test_id)
                    ->update(['posicion_potencial_automatica' => $resp_auto]);
        /*$sugerida = DB::table('results')
                    ->where('test_id', $crud->entry->test_id)
                    ->update(['posicion_potencial_sugerida' => $resp]);
 */   }

    //dd($sugerida);

    if ($auto == 1){
        $auto_in_string = "Enfocada";
    }else if($auto == 2){
        $auto_in_string = "Versátil";
    }else if($auto == 3){
        $auto_in_string = "Amplia";
    }

    if ($sugerida == 1){
        $resp_suregida = "Enfocada";
    }else if($sugerida == 2){
        $resp_suregida = "Versátil";
    }else if($sugerida == 3){
        $resp_suregida = "Amplia";
    }

    //dd(auth()->user()->id);    
?>

@section('header')
	<section class="container-fluid d-print-none">
    	<a href="javascript: window.print();" class="btn float-right"><i class="la la-print"></i></a>
		<h2>
	        <span class="text-capitalize">{!! $crud->getHeading() ?? $crud->entity_name_plural !!}</span>
	        {{-- <small>{!! $crud->getSubheading() ?? mb_ucfirst(trans('backpack::crud.preview')).' '.$crud->entity_name !!}.</small> --}}
	        @if ($crud->hasAccess('list'))
	          <small class=""><a href="{{ url($crud->route) }}" class="font-sm"><i class="la la-angle-double-left"></i> {{ trans('backpack::crud.back_to_all') }} <span>{{ $crud->entity_name_plural }}</span></a></small>
	        @endif
	    </h2>
    </section>
@endsection

@section('content')
<div class="row">
	<div class="{{ $crud->getShowContentClass() }} row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">Autoevaluación 2020<span class="badge badge-success float-right">Completada</span></div>
                <div class="card-body">{!! Setting::get('result_intro') !!}</div>
            </div>
        </div>
        <div class="col-sm-12 col-xl-6"> 
            <div class="card">
            <div class="card-header">Perfil Profesional: {{$perfil}}</div>
            <div class="card-body">
                <div class="my-4">
                    {!! $opciones_perfil[$subtotal_perfil] !!}
                </div>
            </div>
            </div>
        </div>

        <div class="col-sm-12 col-xl-6">
            <div class="card">
                <div class="card-header">Agilidad de Aprendizaje: {{$opciones_agilidad[$subtotal_agilidad]}}</div>
                <div class="card-body" style="height: 420px">
                    <div class="chartjs-size-monitor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; pointer-events: none; visibility: hidden; z-index: -1;">
                        <div class="chartjs-size-monitor-expand" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:1000000px;height:1000000px;left:0;top:0"></div>
                        </div>
                        <div class="chartjs-size-monitor-shrink" style="position:absolute;left:0;top:0;right:0;bottom:0;overflow:hidden;pointer-events:none;visibility:hidden;z-index:-1;">
                            <div style="position:absolute;width:200%;height:200%;left:0; top:0"></div>
                        </div>
                    </div>
                    <canvas id="chart-line" width="400" height="300" class="chartjs-render-monitor" style="display: block; width: 299px; height: 200px;"></canvas>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-xl-6"> 
            <div class="card">
                <div class="card-header">
                    <span class="pull-left">
                        <b>POSICIÓN DE POTENCIAL: {{$auto_in_string}}</b> <!--  AUTOMATICA -->
                    </span>
                </div>
            </div>

            <div class="card p-2">
                <p> 
                    <b>En caso de no estar de acuerdo con los resultados automáticos arrojados <br>
                    por la herramienta y teniendo evidencia para comprobar que los mismos  <br>
                    no son correctos, puede sugerir una nueva posición de potencial  <br>
                    a continuación.
                    </b> 
                </p>
            </div>

            <?php if(auth()->user()->id != $employe->user_id){ ?>
                <div class="card">
                    <div class="card-header">
                        <span class="pull-left">
                            <b>POSICIÓN DE POTENCIAL: {{$resp_suregida}}</b><!--  SUGERIDA --> 
                        </span>

                        <button type="button" class="btn btn-warning" data-target="#editPosition" 
                            data-toggle="modal" style="margin-left: 50px;">
                            <i class="la la-edit"></i> Editar
                        </button>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</div>
@endsection

<div class="modal fade" id="editPosition" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Actualizar POSICIÓN DE POTENCIAL</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form action="{{$_SERVER['REQUEST_URI']}}" method="GET">
              <div class="modal-body">
                <select name="new_position" class="form-control">
                    <option >{{'Seleccione una posición'}}</option>
                    <option value="1">{{'Enfocada'}}</option>
                    <option value="2">{{'Versátil'}}</option>
                    <option value="3">{{'Amplia'}}</option>
                </select>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" name="savePosition">Guardar Cambio</button>
              </div>
              
          </form>
        </div>
    </div>
</div>

@section('after_styles')
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/crud.css') }}">
	<link rel="stylesheet" href="{{ asset('packages/backpack/crud/css/show.css') }}">
@endsection

@section('after_scripts')
	<script src="{{ asset('packages/backpack/crud/js/crud.js') }}"></script>
    <script src="{{ asset('packages/backpack/crud/js/show.js') }}"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.1.4/Chart.bundle.min.js'></script>

    <script>

        jQuery(document).ready(function() {

            var options = {
                responsive: false,
                maintainAspectRatio: true,
                scale: {
                    ticks: {
                    beginAtZero: true,
                    max: 3,
                    min: 0,
                    stepSize: 1
                    }
                },
            };

            var dataLiteracy = {
                labels: [
                            'Conciencia de si',
                            'Cambio',
                            'Mental',
                            'Interpersonal',
                            'Resultados',
                        ],
                datasets: [{
                    data: [
                            {{$crud->entry->conciencia_de_si_mismo}},
                            {{$crud->entry->agilidad_de_cambio}},
                            {{$crud->entry->agilidad_mental}},
                            {{$crud->entry->agilidad_interpersonal}},
                            {{$crud->entry->agilidad_de_resultados}}
                        ],
                    label: "Autoevaluación 2020",
                    borderColor: "#458af7",
                    //backgroundColor: '#458af761',
                    backgroundColor: ['#FF6384', '#4BC0C0', '#FFCE56', '#E7E9ED', '#36A2EB'],
                    fill: true
                },
                // {
                //     data: [2, 3, 4, 4, 3],
                //     label: "Juan",
                //     borderColor: "#3cba9f",
                //     fill: true,
                //     backgroundColor: '#3cba9f6b'
                // }
                ]
            };

            //var ctx = document.getElementById("canvas");
            var ctx = jQuery("#chart-line");
            var myRadarChart = new Chart(ctx, {
                type: 'polarArea',
                data: dataLiteracy,
                options: options
            });

        });
    </script>
@endsection
