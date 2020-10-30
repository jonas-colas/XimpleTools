<?php

namespace App\Http\Controllers\Admin;

//use App\Http\Requests\CollaboratorRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Team;
use App\Models\Evaluation;
use App\Models\Test;
use App\Models\Result;
use DB;
//use Illuminate\Support\Facades\DB;

/**
 * Class TeamCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TeamCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    // use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(Team::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/team');
        CRUD::setEntityNameStrings(__('base.my_team'), __('base.my_team'));
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        $children = Team::where('id', '=', backpack_user()->id)
                            ->with('children')
                            ->first()
                            ->children
                            ->pluck('id')
                            ->toArray();
                            ;

        $letTest = DB::table('tests')
                    ->join('results', 'results.test_id', '=', 'tests.id')
                    ->where('tests.evaluator_id', backpack_user()->id)
                    ->select('tests.*', 'results.*')
                    ->get()
                    ->toArray();

        //dd($children);
        //dd($letTest[0]);
        $a = $letTest ;
        for($i=0; $i<sizeof($letTest); $i++){
            //Perfil
            if($a[$i]->subtotal_perfil == 1) $perfil = 'Enfocado'; 
            if($a[$i]->subtotal_perfil == 2) $perfil = 'Versátil'; 
            if($a[$i]->subtotal_perfil == 3) $perfil = 'Amplio'; 
            //Conciencia
            if($a[$i]->conciencia_de_si_mismo == 1) $conciencia = 'Bajo'; 
            if($a[$i]->conciencia_de_si_mismo == 2) $conciencia = 'Medio'; 
            if($a[$i]->conciencia_de_si_mismo == 3) $conciencia = 'Alto'; 
            //Cambio
            if($a[$i]->agilidad_de_cambio == 1) $cambio = 'Bajo'; 
            if($a[$i]->agilidad_de_cambio == 2) $cambio = 'Medio'; 
            if($a[$i]->agilidad_de_cambio == 3) $cambio = 'Alto';
            //Mental
            if($a[$i]->agilidad_mental == 1) $mental = 'Bajo'; 
            if($a[$i]->agilidad_mental == 2) $mental = 'Medio'; 
            if($a[$i]->agilidad_mental == 3) $mental = 'Alto';
            //Interpersonal
            if($a[$i]->agilidad_interpersonal == 1) $interpersonal = 'Bajo'; 
            if($a[$i]->agilidad_interpersonal == 2) $interpersonal = 'Medio'; 
            if($a[$i]->agilidad_interpersonal == 3) $interpersonal = 'Alto'; 
            //Resultados
            if($a[$i]->agilidad_de_resultados == 1) $resultados = 'Bajo'; 
            if($a[$i]->agilidad_de_resultados == 2) $resultados = 'Medio'; 
            if($a[$i]->agilidad_de_resultados == 3) $resultados = 'Alto'; 

            //Posicion Automatica
            if($a[$i]->posicion_potencial_automatica == 1) $automatica = 'Enfocada'; 
            if($a[$i]->posicion_potencial_automatica == 2) $automatica = 'Versátil'; 
            if($a[$i]->posicion_potencial_automatica == 3) $automatica = 'Amplia'; 

            //Posicion Sugerida
            if($a[$i]->posicion_potencial_sugerida == 1) $sugerida = 'Enfocada'; 
            if($a[$i]->posicion_potencial_sugerida == 2) $sugerida = 'Versátil'; 
            if($a[$i]->posicion_potencial_sugerida == 3) $sugerida = 'Amplia'; 

            $others = DB::table('users')
                        ->where('id', $a[$i]->user_id)
                        ->update([
                            'subtotal_perfil'               => $perfil, 
                            'conciencia_de_si_mismo'        => $conciencia,
                            'agilidad_de_cambio'            => $cambio,
                            'agilidad_mental'               => $mental,
                            'agilidad_interpersonal'        => $interpersonal,
                            'agilidad_de_resultados'        => $resultados,
                            'posicion_potencial_automatica' => $automatica,
                            'posicion_potencial_sugerida'   => $sugerida,
                        ]);
        };

        CRUD::addClause('whereIn', 'id', $children);
                
        
        //CRUD::setFromDb(); // columns
        CRUD::enableExportButtons();

        //CRUD::set('show.setFromDb', false);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
        
        


        CRUD::addColumn([
            'name' => 'id',
            'type' => 'text',
            'label' => __('base.collaborator_id'),
        ]);
        CRUD::addColumn([
            'name' => 'lastname',
            'type' => 'text',
            'label' => __('base.lastname'),
        ]);
        CRUD::addColumn([
            'name' => 'name',
            'type' => 'text',
            'label' => __('base.name'),
        ]);
        CRUD::addColumn([
            'name' => 'position',
            'type' => 'text',
            'label' => __('base.position'),
        ]);
        CRUD::addColumn([
            'name' => 'organizational_unit',
            'type' => 'text',
            'label' => __('base.organizational_unit'),
        ]);
        CRUD::addColumn([
            'name' => 'cost_center',
            'type' => 'text',
            'label' => __('base.cost_center'),
        ]);
        CRUD::addColumn([
            'name' => 'chief_id',
            'type' => 'text',
            'label' => __('base.chief_id'),
        ]);
        CRUD::addColumn([
            'name' => 'subtotal_perfil',
            'type' => 'text',
            'label' => 'Perfil Profesional',
        ]);
        CRUD::addColumn([
            'name' => 'conciencia_de_si_mismo',
            'type' => 'text',
            'label' => 'Conciencia de Si',
        ]);
        CRUD::addColumn([
            'name' => 'agilidad_de_cambio',
            'type' => 'text',
            'label' => 'Cambio',
        ]);
        CRUD::addColumn([
            'name' => 'agilidad_mental',
            'type' => 'text',
            'label' => 'Mental',
        ]);
        CRUD::addColumn([
            'name' => 'agilidad_interpersonal',
            'type' => 'text',
            'label' => 'Interpersonal',
        ]);
        CRUD::addColumn([
            'name' => 'agilidad_de_resultados',
            'type' => 'text',
            'label' => 'Interpersonal',
        ]);
        CRUD::addColumn([
            'name' => 'posicion_potencial_automatica',
            'type' => 'text',
            'label' => 'Posicion de potencial',
        ]);
        CRUD::addColumn([
            'name' => 'posicion_potencial_sugerida',
            'type' => 'text',
            'label' => 'Posicion Suregida',
        ]);

        CRUD::removeButton('update');
        CRUD::removeButton('show');

        CRUD::addButtonFromView('line', 'team', 'team', 'beginning');
    }



    // public function index()
    // {
    //     $this->crud->hasAccessOrFail('list');

    //     $this->data['crud'] = $this->crud;
    //     $this->data['title'] = $this->crud->getTitle() ?? mb_ucfirst($this->crud->entity_name_plural);

    //     //dump($this->crud);
    //     //dump($this->data);

    //     // load the view from /resources/views/vendor/backpack/crud/ if it exists, otherwise load the one in the package
    //     return view($this->crud->getListView(), $this->data);
    // }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        //CRUD::setValidation(collaboratorRequest::class);

        CRUD::setFromDb(); // fields
        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }
}
