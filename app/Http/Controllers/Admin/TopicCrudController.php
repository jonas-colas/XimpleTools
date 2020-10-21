<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TopicRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Topic;

/**
 * Class TopicCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TopicCrudController extends CrudController
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
        CRUD::setModel(Topic::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/topic');
        CRUD::setEntityNameStrings(__('base.topic'), __('base.topics'));
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
            'name' => 'title',
            'type' => 'text',
            'label' => __('base.topic'),
        ]);
        CRUD::addColumn([
            'name' => 'description',
            'type' => 'textarea',
            'label' => __('base.description'),
        ]);
        CRUD::addColumn([
            // 1-n relationship
            'label'     => __('base.dimension'), // Table column heading
            'type'      => 'select',
            //'name'      => 'dimension_id', // the column that contains the ID of that connected entity;
            'entity'    => 'dimensions', // the method that defines the relationship in your Model
            //'attribute' => 'title', // foreign key attribute that is shown to user
            //'model'     => 'App\Models\Dimension', // foreign key model
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('dimension/'.$related_key.'/show');
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
            'name' => 'title',
            'type' => 'text',
            'label' => __('base.topic'),
        ]);
        CRUD::addColumn([
            'name' => 'description',
            'type' => 'textarea',
            'label' => __('base.description'),
        ]);
        CRUD::addColumn([
            // 1-n relationship
            'label'     => __('base.dimension'), // Table column heading
            'type'      => 'select',
            //'name'      => 'dimension_id', // the column that contains the ID of that connected entity;
            'entity'    => 'dimensions', // the method that defines the relationship in your Model
            //'attribute' => 'title', // foreign key attribute that is shown to user
            //'model'     => 'App\Models\Dimension', // foreign key model
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('dimension/'.$related_key.'/show');
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
        CRUD::setValidation(TopicRequest::class);

        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
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
