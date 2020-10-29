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

        //dd($children);
        //dd(backpack_user()->id);

        //CRUD::addClause('whereIn', 'id', $children);
        CRUD::addClause('whereIn', 'id', $children);
                //->join()
        
        //CRUD::setFromDb(); // columns
        CRUD::enableExportButtons();

        //CRUD::set('show.setFromDb', false);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
        
        /*for($i=0; $i<sizeof($children); $i++){
            $others = DB::table('tests')->where('user_id', $children[$i])->first();
            //var_dump($others);
            if($others != NULL){

                //var_dump($others->id);
                $resp = DB::table('results')->where('test_id', $others->id)->first();
                var_dump($resp->agilidad_de_resultados);
            }
        }die;*/


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
        /*CRUD::addColumn([
            'name' => 'Perfil_Profesional',
            'type' => 'text',
            'label' => 'Perfil Profesional',
        ]);*/
        
        CRUD::addColumn([
            'name' => 'Conciencia',
            'type' => 'text',
            'label' => 'Conciencia de Si',
        ]);
        CRUD::addColumn([
            'name' => 'Cambio',
            'type' => 'text',
            'label' => 'Cambio',
        ]);
        CRUD::addColumn([
            'name' => 'Mental',
            'type' => 'text',
            'label' => 'Mental',
        ]);
        CRUD::addColumn([
            'name' => 'Interpersonal',
            'type' => 'text',
            'label' => 'Interpersonal',
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
