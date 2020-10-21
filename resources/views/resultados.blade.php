@php

namespace App\Http\Controllers\Admin;

use App\Models\Evaluation;
use App\Models\Question;
use App\Models\Thread;
use App\Models\Test;
use App\Models\Answer;
use Illuminate\Support\Carbon;
use Barryvdh\Debugbar\Facade as DebugBar;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

$evaluation   = Evaluation::Active()->first();
//$test         = Test::Tests(backpack_user()->id, backpack_user()->id, $evaluation->id)->first();
$answer_saved = Answer::Answers(26)
                    ->with('dimensions')
                    ->get();
$answer_array = $answer_saved->toArray();

//dd($answer_array);

$answer_new_array = array();

foreach($answer_array as $val) {
    if(array_key_exists('dimensions', $val)){
        $new_key = Str::snake($val['dimensions']['title']);
        $answer_new_array[$new_key][] = $val['answer'];
    }else{
        $answer_new_array[""][] = $val;
    }
}

//dd($answer_new_array);
dump(results($answer_new_array));

function results($answers_array){

    // DECLARO LAS VARIABLES QUE VOY A UTILIZAR
    $results                = $agility_results         = array();
    $subtotal1              = $subtotal2               = $subtotal3               = null;
    $aspiracion             = $aspiracion1             = $aspiracion2             = $aspiracion3             = null;
    $trayectoria            = $trayectoria1            = $trayectoria2            = $trayectoria3            = null;
    $conciencia_de_si_mismo = $conciencia_de_si_mismo1 = $conciencia_de_si_mismo2 = $conciencia_de_si_mismo3 = $conciencia_de_si_mismo4 = null;
    $agilidad_de_cambio     = $agilidad_de_cambio1     = $agilidad_de_cambio2     = $agilidad_de_cambio3     = $agilidad_de_cambio4     = null;
    $agilidad_mental        = $agilidad_mental1        = $agilidad_mental2        = $agilidad_mental3        = $agilidad_mental4        = null;
    $agilidad_interpersonal = $agilidad_interpersonal1 = $agilidad_interpersonal2 = $agilidad_interpersonal3 = $agilidad_interpersonal4 = null;
    $agilidad_de_resultados = $agilidad_de_resultados1 = $agilidad_de_resultados2 = $agilidad_de_resultados3 = $agilidad_de_resultados4 = null;

    foreach ($answers_array as $dimension => $items) {
        // DECLARO LAS DIMENSIONES Y EL VALOR DE SUMA DE SUS ITEMS
        $$dimension = array_sum($items);
        // Array asociativo de valores a partir de array como keys y su respectivo recuento como valores.
        $respuestas = array_count_values($items);
        foreach ($respuestas as $opcion => $cantidad) {
            // DECLARO LAS DIMENSIONES DIVIDIDAS POR CANTIDAD DE OPCIONES DE RESPUESTA
            ${$dimension.$opcion} = $cantidad;
        }
    }

    $dimensions = array('conciencia_de_si_mismo','agilidad_de_cambio','agilidad_mental','agilidad_interpersonal','agilidad_de_resultados');

    foreach ($dimensions as $dimension) {
        if ($$dimension >= 16 && ${$dimension.'1'} == 0 && ${$dimension.'2'} <= 1) {
            // echo $agility_results[$dimension].'</br>';
            $results[$dimension] = $agility_results[$dimension] = 3;
        } elseif ($$dimension <= 10) {
            // echo $agility_results[$dimension].'</br>';
            $results[$dimension] = $agility_results[$dimension] = 1;
        } else {
            // echo $agility_results[$dimension].'</br>';
            $results[$dimension] = $agility_results[$dimension] = 2;
        }
    }

    dump($agility_results);
    $subtotal = array_count_values($agility_results);
    dump($subtotal);

    foreach ($subtotal as $key => $valor) {
        ${'subtotal'.$key} = $valor;
        echo 'la cantidad de dimensiones con valor '. $key .' es '. $valor .'</br>';
    }

    //echo 'AGILIDAD DE APRENDIZAJE TOTAL SUGERIDA: ';
    if ($subtotal1 >= 3 || $agility_results['conciencia_de_si_mismo']  == 1 || $agility_results['agilidad_de_cambio'] == 1 ) {
        //echo 1;
        $results['subtotal_agilidad'] = 1;
    } elseif ( $subtotal3 >= 3 && $subtotal1 == 0) {
        //echo 3;
        $results['subtotal_agilidad'] = 3;
    } elseif ( ($subtotal3 == 2 || $agility_results['conciencia_de_si_mismo']  != 1 || $agility_results['agilidad_de_cambio'] != 1 ) || $subtotal2 >= 3) {
        //echo 2;
        $results['subtotal_agilidad'] = 2;
    } else {
        //echo 'DESCARTE';
        $results['subtotal_agilidad'] = 2;
    }

    // SUBTOTAL PERFIL PROFESIONAL (SEGÚN ASPIRACION Y EXPERIENCIA)
    if ($aspiracion >= 9 && $trayectoria >= 7 && $trayectoria1 == 0) {
        $results['subtotal_perfil'] = 3;
    } elseif ($aspiracion >= 6 && $trayectoria >= 5 && $trayectoria1 <= 2) {
        $results['subtotal_perfil'] = 2;
    } else {
        $results['subtotal_perfil'] = 1;
    }

    return $results;

}


@endphp
