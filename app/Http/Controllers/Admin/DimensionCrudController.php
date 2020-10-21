<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DimensionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Topic;
use App\Models\Dimension;

/**
 * Class DimensionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DimensionCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\InlineCreateOperation;
    use \Backpack\ReviseOperation\ReviseOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(Dimension::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/dimension');
        CRUD::setEntityNameStrings(__('base.dimension'), __('base.dimensions'));
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
            'label' => __('base.dimension'),
        ]);
        // CRUD::addColumn([
        //     'name'  => 'description',
        //     'type'  => 'textarea',
        //     'label' => __('base.description'),
        // ]);
        CRUD::addColumn([
            // 1-n relationship
            'label'       => __('base.topic'), // Table column heading
            'type'        => 'select',
            //'name'      => 'topic_id', // the column that contains the ID of that connected entity;
            'entity'      => 'topic', // the method that defines the relationship in your Model
            //'attribute' => 'title', // foreign key attribute that is shown to user
            //'model'     => 'App\Models\Topic', // foreign key model
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('topic/'.$related_key.'/show');
                },
            ],
        ]);
        CRUD::addColumn([
            // 1-n relationship
            'label'       => __('base.aspect'), // Table column heading
            'type'        => 'select',
            //'name'      => 'aspect_id', // the column that contains the ID of that connected entity;
            'entity'      => 'aspects', // the method that defines the relationship in your Model
            //'attribute' => 'title', // foreign key attribute that is shown to user
            //'model'     => 'App\Models\Aspect', // foreign key model
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('aspect/'.$related_key.'/show');
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

    protected function setupShowOperation()
    {
        // by default the Show operation will try to show all columns in the db table,
        // but we can easily take over, and have full control of what columns are shown,
        // by changing this config for the Show operation
        CRUD::set('show.setFromDb', false);

        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
        CRUD::addColumn([
            'name'  => 'title',
            'type'  => 'text',
            'label' => __('base.dimension'),
        ]);
        CRUD::addColumn([
            'name'  => 'description',
            'type'  => 'textarea',
            'label' => __('base.description'),
        ]);
        CRUD::addColumn([
            // 1-n relationship
            'label'       => __('base.topic'), // Table column heading
            'type'        => 'select',
            //'name'      => 'topic_id', // the column that contains the ID of that connected entity;
            'entity'      => 'topic', // the method that defines the relationship in your Model
            //'attribute' => 'title', // foreign key attribute that is shown to user
            //'model'     => 'App\Models\Topic', // foreign key model
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('topic/'.$related_key.'/show');
                },
            ],
        ]);
        CRUD::addColumn([
            // 1-n relationship
            'label'       => __('base.aspect'), // Table column heading
            'type'        => 'select',
            //'name'      => 'aspect_id', // the column that contains the ID of that connected entity;
            'entity'      => 'aspect', // the method that defines the relationship in your Model
            //'attribute' => 'title', // foreign key attribute that is shown to user
            //'model'     => 'App\Models\Aspect', // foreign key model
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('aspect/'.$related_key.'/show');
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
        CRUD::setValidation(DimensionRequest::class);

        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
        CRUD::addField([
            'name'          => 'topic_id',
            'type'          => 'relationship',
            'label'         => __('base.topic'),
            'entity'        => 'topic',
            'attribute'     => 'title',
            //'model'       => Topic::class,
            //'data_source' => backpack_url('topic/fetch/topic'),
            'inline_create' => [
                'entity' => 'topic',
            ],
            //'ajax' => true,
        ]);
        CRUD::addField([
            'name' => 'title',
            'type' => 'text',
            'label' => __('base.title'),
        ]);
        CRUD::addField([
            'name' => 'description',
            'type' => 'textarea',
            'label' => __('base.description'),
        ]);
    }

    protected function setupInlineCreateOperation()
    {
        $main_form_fields = collect(request()->input('main_form_fields'))->pluck('value', 'name');
        if (!$main_form_fields->isEmpty() && $main_form_fields['topic_id'] != null ) {
            CRUD::removeField('topic_id');
            CRUD::addField([
                'name'      => 'topic_id',
                'type'      => 'relationship',
                'label'     => __('base.topic'),
                'entity'    => 'topic',
                'attribute' => 'title',
                'default'   => $main_form_fields['topic_id'],
                //'ajax'    => true,
            ])->beforeField('title');;
        }
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

    public function fetchTopic()
    {
        return $this->fetch(Topic::class);
    }

}
