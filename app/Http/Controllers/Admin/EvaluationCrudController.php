<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\EvaluationRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Evaluation;
use App\Models\Thread;

/**
 * Class EvaluationCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class EvaluationCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\InlineCreateOperation;
    use \Backpack\ReviseOperation\ReviseOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(Evaluation::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/evaluation');
        CRUD::setEntityNameStrings(__('base.evaluation'), __('base.evaluations'));
    }

    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        //CRUD::setFromDb(); // columns

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */

        CRUD::addColumn([
            'name'  => 'title',
            'type'  => 'text',
            'label' => __('base.title'),
            'tab'   => __('base.config'),
        ]);
        CRUD::addColumn([
            'name'  => 'description',
            'type'  => 'textarea',
            'label' => __('base.description'),
            'tab'   => __('base.config'),
        ]);
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(EvaluationRequest::class);

        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */

        CRUD::addField([
            'name'  => 'title',
            'type'  => 'text',
            'label' => __('base.title'),
            'tab'   => __('base.config'),
        ]);
        CRUD::addField([
            'name'  => 'description',
            'type'  => 'textarea',
            'label' => __('base.description'),
            'tab'   => __('base.config'),
        ]);
        CRUD::addField([
            'name'    => 'publish_date',
            'type'    => 'date_picker',
            'label'   => __('base.publish_date'),
            'date_picker_options' => [
                'todayBtn' => true,
                'format'   => 'dd-mm-yyyy',
                'language' => 'es',
            ],
            'default' => '2020-09-31',
            'wrapper' => ['class' => 'form-group col-md-3'],
            'tab'     => __('base.config'),
        ]);
        CRUD::addField([
            'name'    => 'expire_date',
            'type'    => 'date_picker',
            'label'   => __('base.expire_date'),
            'date_picker_options' => [
                'todayBtn' => false,
                'format'   => 'dd-mm-yyyy',
                'language' => 'es',
            ],
            'default' => '2020-10-31',
            'wrapper' => [
                'class' => 'form-group col-md-3'
            ],
            'tab'     => __('base.config'),
        ]);
        CRUD::addField([
            'name'            => 'status',
            'label'           => "Estado",
            'type'            => 'select_from_array',
            'options'         => [
                0 => 'Inactiva',
                1 => 'Activa',
            ],
            'allows_null'     => false,
            'allows_multiple' => false,
            'wrapper'         => [
                'class' => 'form-group col-md-3'
            ],
            'tab'             => __('base.config'),
        ]);
        CRUD::addField([
            'name'            => 'type',
            'label'           => "Participantes",
            'type'            => 'select_from_array',
            'options'         => [
                0 => 'Auto-Evaluación',
                1 => 'Mi Equipo',
                2 => '360',
            ],
            'allows_null'     => false,
            'allows_multiple' => false,
            'wrapper'         => [
                'class' => 'form-group col-md-3'
            ],
            'tab'             => __('base.config'),
        ]);
        CRUD::addField([       // Select_Multiple = n-n relationship
            'label'      => __('base.threads'),
            'type'       => 'select2_multiple',
            'name'       => 'threads', // the method that defines the relationship in your Model
            'entity'     => 'threads', // the method that defines the relationship in your Model
            'attribute'  => 'title', // foreign key attribute that is shown to user
            'model'      => Thread::class, // foreign key model
            'pivot'      => true, // on create&update, do you need to add/delete pivot table entries?
            'select_all' => true,
            'tab'        => __('base.threads'),
            // 'wrapperAttributes' => ['class' => 'form-group col-md-12'],
        ]);

        CRUD::addField([
            'name' => 'user_id',
            'type' => 'hidden',
            'default' => backpack_user()->id,
        ]);

        // CRUD::addField([ // Select2Multiple = n-n relationship (with pivot table)
        //     'label'      => __('base.questions'),
        //     'type'       => 'select2_multiple',
        //     'name'       => 'questions', // the method that defines the relationship in your Model
        //     'entity'     => 'questions', // the method that defines the relationship in your Model
        //     'attribute'  => 'title', // foreign key attribute that is shown to user
        //     'model'      => Question::class, // foreign key model
        //     'pivot'      => true, // on create&update, do you need to add/delete pivot table entries?
        //     // 'pivotFields' => [
        //     //     'thread_id' => 'thread_id',
        //     // ],
        //     'tab'       => __('base.questions'),
        //     'select_all' => true, // show Select All and Clear buttons?
        // ]);

    }

    protected function setupInlineCreateOperation()
    {
        // CRUD::removeField('threads');
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

    // public function store()
    // {
    //     $this->crud->hasAccessOrFail('create');
    //     // execute the FormRequest authorization and validation, if one is required
    //     $request             = $this->crud->validateRequest();
    //     $stripped_req        = $this->crud->getStrippedSaveRequest();
    //     //Create evaluation
    //     $evaluation          = $this->crud->create($stripped_req);
    //     $this->data['entry'] = $this->crud->entry = $evaluation;

    //     if (!$request->has('questions')) {
    //         $evaluation->questions = [];
    //         $evaluation->questions()->detach();
    //     }else{

    //         $question  = $request->input('questions'); // related ids
    //         $pivotData = array_fill(0, count($question), ['thread_id' => $stripped_req['status']]);
    //         $syncData  = array_combine($question, $pivotData);
    //         //dd($syncData);
    //         $evaluation->questions()->sync($syncData);
    //     }

    //     //\Alert::success(trans('backpack::crud.insert_success'))->flash();
    //     $this->crud->setSaveAction();
    //     return $this->crud->performSaveAction($evaluation->getKey());
    //     //dd($evaluation);
    // }

    // public function update()
    // {
    //     $this->crud->hasAccessOrFail('update');
    //     // execute the FormRequest authorization and validation, if one is required
    //     $request             = $this->crud->validateRequest();
    //     $stripped_req        = $this->crud->getStrippedSaveRequest();
    //     //Update evaluation
    //     $evaluation          = $this->crud->update($request->id, $stripped_req);
    //     $this->data['entry'] = $this->crud->entry = $evaluation;

    //     //Add questions to it.
    //     if (!$request->has('questions')) {
    //         $evaluation->questions = [];
    //         $evaluation->questions()->detach();
    //     }else{

    //         $question  = $request->input('questions'); // related ids
    //         $pivotData = array_fill(0, count($question), ['thread_id' => $stripped_req['status']]);
    //         $syncData  = array_combine($question, $pivotData);
    //         //dd($syncData);
    //         $evaluation->questions()->sync($syncData);
    //     }

    //     //Done
    //     //\Alert::success(trans('backpack::crud.update_success'))->flash();
    //     $this->crud->setSaveAction();
    //     return $this->crud->performSaveAction($evaluation->getKey());
    // }

}
