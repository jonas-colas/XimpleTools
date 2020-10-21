<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ThreadRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Thread;
use App\Models\Question;
use App\Models\Evaluation;

/**
 * Class ThreadCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class ThreadCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;
    use \Backpack\ReviseOperation\ReviseOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(Thread::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/thread');
        CRUD::setEntityNameStrings(__('base.thread'), __('base.threads'));
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
        ]);
        // CRUD::addColumn([
        //     'name'  => 'description',
        //     'type'  => 'textarea',
        //     'label' => __('base.description'),
        // ]);
        CRUD::addColumn([
            // 1-n relationship
            'label'       => __('base.evaluation'), // Table column heading
            'type'        => 'select',
            //'name'      => 'evaluation_id', // the column that contains the ID of that connected entity;
            'entity'      => 'evaluations', // the method that defines the relationship in your Model
            //'attribute' => 'title', // foreign key attribute that is shown to user
            //'model'     => 'App\Models\Evaluation', // foreign key model
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('evaluation/'.$related_key.'/show');
                },
            ],
        ]);
        CRUD::addColumn([   // select_multiple: n-n relationship (with pivot table)
            'label'     => __('base.questions'), // Table column heading
            'type'      => 'relationship_count',
            'name'      => 'questions', // the method that defines the relationship in your Model
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('question?dimension_id='.$entry->getKey());
                },
            ],
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
        CRUD::setValidation(ThreadRequest::class);

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
            'name'          => 'evaluation',
            'type'          => 'relationship',
            'label'         => __('base.evaluation'),
            'entity'        => 'evaluations',
            'allows_null'   => false,
            'pivot'         => true,
            'attribute'     => 'title',
            'inline_create' => [ // specify the entity in singular
                'entity' => 'evaluation', // the entity in singular
                // OPTIONALS
                'force_select'             => true, // should the inline-created entry be immediately selected?
                'modal_class'              => 'modal-dialog modal-lg', // use modal-sm, modal-lg to change width
            ],
            //'ajax' => true,
            'tab'   => __('base.config'),
        ]);
        CRUD::addField([   // select_grouped
            'label'                      => __('base.questions'),
            'type'                       => 'select_grouped_multiple', //https: //github.com/Laravel-Backpack/CRUD/issues/502
            'name'                       => 'questions',
            'entity'                     => 'questions',
            'allows_null'                => false,
            'pivot'                      => true, // on create&update, do you need to add/delete pivot table entries?
            'model'                      => Question::class,
            'attribute'                  => 'title',
            'group_by'                   => 'dimension', // the relationship to entity you want to use for grouping
            'group_by_attribute'         => 'title', // the attribute on related model, that you want shown
            'group_by_relationship_back' => 'questions', // relationship from related model back to this model
            'wrapperAttributes'          => ['class' => 'form-group col-md-12'],
            'tab'                        => __('base.questions'),
        ]);
        CRUD::addField([
            'name'              => 'scale',
            'type'              => 'select_from_array',
            'options'           => [
                0 => '1: No / 2: En cierta medida / 3: Si',
                1 => '1: Nunca / 2: A veces / 3: Casi siempre / 4: Siempre'
            ],
            'label'             => __('base.scale'),
            'wrapperAttributes' => ['class' => 'form-group col-md-6'],
            'tab'               => __('base.config'),
        ]);
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

    public function fetchEvaluations()
    {
        return $this->fetch(Evaluation::class);
    }
}
