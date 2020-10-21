<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\QuestionRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\Topic;
use App\Models\Dimension;
use App\Models\Aspect;
use App\Models\Question;

/**
 * Class QuestionCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class QuestionCrudController extends CrudController
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
        CRUD::setModel(Question::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/question');
        CRUD::setEntityNameStrings(__('base.question'), __('base.questions'));
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
            'label' => __('base.title'),
        ]);
        CRUD::addColumn([
            // 1-n relationship
            'label'       => __('base.dimension'), // Table column heading
            'type'        => 'select',
            //'name'      => 'dimension_id', // the column that contains the ID of that connected entity;
            'entity'      => 'dimension', // the method that defines the relationship in your Model
            //'attribute' => 'title', // foreign key attribute that is shown to user
            //'model'     => 'App\Models\Dimension', // foreign key model
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('dimension/'.$related_key.'/show');
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

        CRUD::addFilter([ // select2 filter
            'name' => 'dimension_id',
            'type' => 'select2',
            'label'=> __('base.dimension'),
        ], function () {
            return Dimension::all()->keyBy('id')->pluck('title', 'id')->toArray();
        }, function ($value) { // if the filter is active
            $this->crud->addClause('where', 'dimension_id', $value);
        });

        CRUD::addFilter([ // select2 filter
            'name' => 'aspect_id',
            'type' => 'select2',
            'label'=> __('base.aspect'),
        ], function () {
            return Aspect::all()->keyBy('id')->pluck('title', 'id')->toArray();
        }, function ($value) { // if the filter is active
            $this->crud->addClause('where', 'aspect_id', $value);
        });

        CRUD::enableDetailsRow();
        CRUD::setDetailsRowView('vendor.backpack.base.inc.details_row');
    }

    protected function setupShowOperation()
    {
        CRUD::set('show.setFromDb', false);
        CRUD::addColumn([
            'name' => 'title',
            'type' => 'text',
            'label' => __('base.title'),
        ]);
        CRUD::addColumn([
            // 1-n relationship
            'label'       => __('base.dimension'), // Table column heading
            'type'        => 'select',
            //'name'      => 'dimension_id', // the column that contains the ID of that connected entity;
            'entity'      => 'dimension', // the method that defines the relationship in your Model
            //'attribute' => 'title', // foreign key attribute that is shown to user
            //'model'     => 'App\Models\Dimension', // foreign key model
            'wrapper'   => [
                'href' => function ($crud, $column, $entry, $related_key) {
                    return backpack_url('dimension/'.$related_key.'/show');
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
    }
    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(QuestionRequest::class);

        //CRUD::setFromDb(); // fields

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */

        CRUD::addField([
            'name'          => 'topic_id',
            'type'          => 'select2',
            'label'         => __('base.topic'),
            'attribute'     => 'title',
            'model'         => Topic::class,
            //'entity'        => 'topic',
            //'data_source'   => backpack_url('topic/fetch/topic'),
            'inline_create' => [
                'entity'    => 'topic',
            ],
            'fake'          => true,
            //'ajax' => true,
        ]);
        CRUD::addField([
            'name'          => 'dimension_id',
            'type'          => 'relationship',
            'label'         => __('base.dimension'),
            'entity'        => 'dimension',
            'attribute'     => 'title',
            //'model'         => Dimension::class,
            //'data_source'   => backpack_url('dimension/fetch/dimension'),
            'inline_create' => [
                'entity'    => 'dimension',
                'include_main_form_fields' => [
                    'topic_id'
                ],
            ],
            // 'include_all_form_fields' => true, //sends the other form fields along with the request so it can be filtered.
            // 'minimum_input_length' => 0, // minimum characters to type before querying results
            // 'dependencies'         => ['topic_id'], // when a dependency changes, this select2 is reset to null
            //'ajax' => true,
        ]);
        CRUD::addField([
            'name'          => 'aspect_id',
            'type'          => 'relationship',
            'label'         => __('base.aspect'),
            'entity'        => 'aspect',
            'attribute'     => 'title',
            //'model'         => Aspect::class,
            //'data_source'   => backpack_url('aspect/fetch/aspect'),
            'inline_create' => [
                'entity'    => 'aspect',
                'include_main_form_fields' => [
                    //'topic_id',
                    'dimension_id'
                ],
            ],
            //'ajax' => true,
        ]);
        CRUD::addField([
            'name'  => 'title',
            'type'  => 'text',
            'label' => __('base.title'),
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

    // public function fetchTopic()
    // {
    //     return $this->fetch(Topic::class);
    // }

    public function fetchDimension()
    {
        return $this->fetch(Dimension::class);
    }

    public function fetchAspect()
    {
        return $this->fetch(Aspect::class);
    }

}
