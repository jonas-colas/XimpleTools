<?php

namespace App\Http\Controllers\Admin;

//use App\Http\Requests\CollaboratorRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Collaborator;

/**
 * Class collaboratorCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class CollaboratorCrudController extends CrudController
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
        CRUD::setModel(Collaborator::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/collaborator');
        CRUD::setEntityNameStrings(__('base.my_organization'), __('base.my_organization'));
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {

        $descendants = Collaborator::where('id', '=', backpack_user()->id)
                            ->with('descendants')
                            ->first()
                            ->descendants
                            ->pluck('id')
                            ->toArray();

        //dd($descendants);

        CRUD::addClause('whereIn', 'id', $descendants);

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
