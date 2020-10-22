<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\Test;

class Result extends Model
{
    use CrudTrait;

    /*
    |--------------------------------------------------------------------------
    | GLOBAL VARIABLES
    |--------------------------------------------------------------------------
    */

    protected $table = 'results';
    // protected $primaryKey = 'id';
    // public $timestamps = false;
    // protected $guarded = ['id'];
    protected $fillable = [
        'conciencia_de_si_mismo',
        'agilidad_de_cambio',
        'agilidad_mental',
        'agilidad_interpersonal',
        'agilidad_de_resultados',
        'subtotal_agilidad',
        'subtotal_perfil',
        'test_id',
    ];
    // protected $hidden = [];
    // protected $dates = [];

    /*
    |--------------------------------------------------------------------------
    | FUNCTIONS
    |--------------------------------------------------------------------------
    */
    public function results($answers_array){

        // DECLARO LAS VARIABLES QUE VOY A UTILIZAR
        $results                = $agility_results         = $answer_new_array        = array();
        $subtotal1              = $subtotal2               = $subtotal3               = null;
        $aspiracion             = $aspiracion1             = $aspiracion2             = $aspiracion3             = null;
        $trayectoria            = $trayectoria1            = $trayectoria2            = $trayectoria3            = null;
        $conciencia_de_si_mismo = $conciencia_de_si_mismo1 = $conciencia_de_si_mismo2 = $conciencia_de_si_mismo3 = $conciencia_de_si_mismo4 = null;
        $agilidad_de_cambio     = $agilidad_de_cambio1     = $agilidad_de_cambio2     = $agilidad_de_cambio3     = $agilidad_de_cambio4     = null;
        $agilidad_mental        = $agilidad_mental1        = $agilidad_mental2        = $agilidad_mental3        = $agilidad_mental4        = null;
        $agilidad_interpersonal = $agilidad_interpersonal1 = $agilidad_interpersonal2 = $agilidad_interpersonal3 = $agilidad_interpersonal4 = null;
        $agilidad_de_resultados = $agilidad_de_resultados1 = $agilidad_de_resultados2 = $agilidad_de_resultados3 = $agilidad_de_resultados4 = null;

        foreach($answers_array as $val) {
            if(array_key_exists('dimensions', $val)){
                $new_key = Str::snake($val['dimensions']['title']);
                $answer_new_array[$new_key][] = $val['answer'];
            }else{
                $answer_new_array[""][] = $val;
            }
        }

        foreach ($answer_new_array as $dimension => $items) {
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
        $agility_results = array();
        foreach ($dimensions as $dimension) {
            if ($$dimension >= 16 && ${$dimension.'1'} == 0 && ${$dimension.'2'} <= 1) {
                $results[$dimension] = $agility_results[$dimension] = 3;
            } elseif ($$dimension <= 10) {
                $results[$dimension] = $agility_results[$dimension] = 1;
            } else {
                $results[$dimension] = $agility_results[$dimension] = 2;
            }
        }

        //dump($agility_results);
        $subtotal = array_count_values($agility_results);
        //dump($subtotal);

        foreach ($subtotal as $key => $valor) {
            ${'subtotal'.$key} = $valor;
        }

        if ($subtotal1 >= 3 || $agility_results['conciencia_de_si_mismo']  == 1 || $agility_results['agilidad_de_cambio'] == 1 ) {
            $results['subtotal_agilidad'] = 1; // BAJA
        } elseif ( $subtotal3 >= 3 && $subtotal1 == 0) {
            $results['subtotal_agilidad'] = 3; //ALTA
        } elseif ( $subtotal3 == 2  || $subtotal2 >= 3) {
            $results['subtotal_agilidad'] = 2; //MEDIA
        } else {
            $results['subtotal_agilidad'] = 2; // NO COINCIDE PERO DESCARTE ES MEDIA
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
        //dd($results);

    }
    /*
    |--------------------------------------------------------------------------
    | RELATIONS
    |--------------------------------------------------------------------------
    */
    public function test()
    {
        return $this->belongsTo(Test::class);
    }
    /*
    |--------------------------------------------------------------------------
    | SCOPES
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | ACCESSORS
    |--------------------------------------------------------------------------
    */

    /*
    |--------------------------------------------------------------------------
    | MUTATORS
    |--------------------------------------------------------------------------
    */
}
