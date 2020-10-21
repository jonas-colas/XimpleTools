<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TestRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use App\Models\User;
use App\Models\Evaluation;
use App\Models\Question;
use App\Models\Thread;
use App\Models\Test;
use App\Models\Answer;
use App\Models\Result;
use Illuminate\Support\Carbon;
use Barryvdh\Debugbar\Facade as DebugBar;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

/**
 * Class TestCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TestCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    //use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    //use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(Test::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/test');
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
        CRUD::addClause('where', 'evaluator_id', '=', backpack_user()->id);
        CRUD::addClause('where', 'user_id', '=', backpack_user()->id);
        CRUD::denyAccess('create');

        CRUD::addColumn([
            // 1-n relationship
            'label'       => __('base.title'), // Table column heading
            'type'        => 'select',
            //'name'      => 'evaluation_id', // the column that contains the ID of that connected entity;
            'entity'      => 'evaluation', // the method that defines the relationship in your Model
            //'attribute' => 'title', // foreign key attribute that is shown to user
            //'model'     => 'App\Models\Evaluation', // foreign key model
            // 'wrapper'   => [
            //     'href' => function ($crud, $column, $entry, $related_key) {
            //         return backpack_url('evaluation/'.$related_key.'/show');
            //     },
            // ],
        ]);

        CRUD::removeButton('update');

        $evaluation = Evaluation::Active()
                                        ->where('type', 0)
                                        ->first();
        $test             = Test::Tests($evaluation->id, backpack_user()->id, backpack_user()->id)->first();

        if ($evaluation && ($test == null || $test->complete == false)) {
            CRUD::addButtonFromView('line', 'continue', 'continue', 'beginning');
        } elseif ($evaluation && $test->complete == true) { // VER RESULTADOS
            CRUD::addButtonFromView('line', 'results', 'results', 'beginning');
        // } else { // CREAR
        //     CRUD::addButtonFromView('line', 'continue', 'continue', 'beginning');
        }


    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {

        CRUD::setValidation(TestRequest::class);
        CRUD::setCreateContentClass('col-md-12 bold-labels');

        $request = $this->crud->validateRequest();

        //dd($request->has('user_id'));
        if ($request->has('user_id')) {
            $user_id    = $request->user_id;
            $evaluation = Evaluation::Active()
                                    ->where('type', 1)
                                    ->first();
        } else {
            $user_id    = backpack_user()->id;
            $evaluation = Evaluation::Active()
                                    ->where('type', 0)
                                    ->first();
        }

        $user = User::find($user_id);

        //dd($user);

        $fullname = $user->name .' '. $user->lastname;
        $position = $user->position;

        // if ($user->chief_id != backpack_user()->id) {
        //     \Alert::add('error', 'No tiene permisos para realizar esta acción')->flash();

        //     return Redirect::to('dashboard');
        // }

        CRUD::setHeading($fullname);
        CRUD::setSubheading($position);

        if (empty($evaluation)) {

            \Alert::add('error', 'No hay evaluaciones activas')->flash();

            return Redirect::to('dashboard');
            //return redirect('admin/dashboard');

        }

        //dd($evaluation);

        $evaluation_id = $evaluation->id;
        $evaluator_id  = backpack_user()->id;



        $test = Test::Tests($evaluation_id, $user_id, $evaluator_id)
                    ->where('complete', false)
                    ->first();

        //dd($test);

        if (!empty($test)) {

        \Alert::add('error', 'Ya posee una evaluacion en curso incompleta.')->flash();

        return Redirect::to('dashboard');
        }

        CRUD::addField([
            'name'  => 'evaluation_id',
            'type'  => 'hidden',
            'value' => $evaluation->id,
        ]);

        CRUD::addField([
            'name'  => 'user_id',
            'type'  => 'hidden',
            'value' => $user_id,
        ]);

        $scale = array(
            0 => [
                1 => 'No',
                2 => 'En cierta medida',
                3 => 'Si',
            ],
            1 => [
                1 => 'Nunca',
                2 => 'A veces',
                3 => 'Casi siempre',
                4 => 'Siempre',
            ],
        );

        foreach ($evaluation->questions as $question) {
            //dd($question->thread->title);
            CRUD::addField([
                'name'    => 'question['.$question->id.']',
                'type'    => 'select_from_array_test',
                'options' => $scale[$question->thread->scale],
                'allows_null' => true,
                'label' => $question->title,
                'wrapperAttributes'=> ['class' => 'form-group col-md-12 row'],
                //'hint'       => 'Some hint text',
                //'tab'   => ($evaluation->type != 0) ? $question->thread->title : 'Etapa '.$question->thread->id,
                'tab'   => $question->thread->title,
            ]);
        }

        //CRUD::removeSaveAction('save_and_back');
        CRUD::removeSaveAction('save_and_edit');
        CRUD::removeSaveAction('save_and_new');

    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {

        CRUD::setValidation(TestRequest::class);
        CRUD::setUpdateContentClass('col-md-12 bold-labels');

        //$request = $this->crud->validateRequest();

        $user_id = $this->crud->getCurrentEntry()->user_id;
        $user    = User::find($user_id);

        $fullname = $user->name .' '. $user->lastname;
        $position = $user->position;

        // if ($user->chief_id != backpack_user()->id) {
        //     \Alert::add('error', 'No tiene permisos para realizar esta acción')->flash();

        //     return Redirect::to('dashboard');
        // }

        CRUD::setHeading($fullname);
        CRUD::setSubheading($position);

        $evaluation_id = $this->crud->getCurrentEntry()->evaluation_id;
        $evaluation    = Evaluation::find($evaluation_id);
        $evaluator_id  = backpack_user()->id;

        if (empty($evaluation)) {

            \Alert::add('error', 'No hay evaluaciones activas')->flash();

            return Redirect::to('dashboard');
            //return redirect('admin/dashboard');

        }

        //dd($evaluation);

        $test = Test::Tests($evaluation_id, $user_id, $evaluator_id)
                    ->where('complete', false)
                    ->first();

        //dd($test);

        if ($test->complete == true) {

        \Alert::add('error', 'Ya posee una evaluacion completa.')->flash();

        return Redirect::to('dashboard');
        }

        $test_entry    = $this->crud->getCurrentEntry();
        //dd($test);
        $answer     = Answer::Answers($test->id)
                                ->get()
                                ->pluck('answer','question_id');

        //dd($answer);

        CRUD::addField([
            'name'  => 'evaluation_id',
            'type'  => 'hidden',
            'value' => $test->evaluation_id,
        ]);

        CRUD::addField([
            'name'  => 'user_id',
            'type'  => 'hidden',
            'value' => $user_id,
        ]);

        $scale = array(
            0 => [
                1 => 'No',
                2 => 'En cierta medida',
                3 => 'Si',
            ],
            1 => [
                1 => 'Nunca',
                2 => 'A veces',
                3 => 'Casi siempre',
                4 => 'Siempre',
            ],
        );

        foreach ($evaluation->questions as $question) {
            //dd($question->thread->title);
            CRUD::addField([
                'name'    => 'question['.$question->id.']',
                'type'    => 'select_from_array_test',
                'options' => $scale[$question->thread->scale],
                'allows_null' => true,
                'label' => $question->title,
                'wrapperAttributes'=> ['class' => 'form-group col-md-12 row'],
                'value' =>  isset($answer[$question->id]) ? $answer[$question->id] : '',
                //'tab'   => ($evaluation->type != 0) ? $question->thread->title : 'Etapa '.$question->thread->id,
                'tab'   => $question->thread->title,
            ]);
        }

        //CRUD::removeSaveAction('save_and_back');
        CRUD::removeSaveAction('save_and_edit');
        CRUD::removeSaveAction('save_and_new');

    }

    public function store()
    {
        $this->crud->hasAccessOrFail('create');
        $request = $this->crud->validateRequest();

        $evaluation = Evaluation::Active()->first();

        $complete = 0;
        $questionCount = $evaluation->questions->count();
        $answerCount = 0;

        $test = Test::create([
            'evaluation_id' => $request->input('evaluation_id'),
            'user_id'       => $request->input('user_id'),
            'evaluator_id'  => backpack_user()->id,
            'complete'      => $complete,
        ]);

        foreach ($request->input('question') as $question => $answer) {
            if($answer != null){
                Answer::create([
                    'test_id'       => $test->id,
                    'question_id'   => $question,
                    'answer'        => $answer,
                ]);
                $answerCount ++;
            }
        }

        // insert item in the db
        //$item = $this->crud->create($this->crud->getStrippedSaveRequest());

        $this->data['entry'] = $this->crud->entry = $test;

        if ($questionCount == $answerCount) {
            $complete = 1;
            $test->update(['complete' => $complete]);

            $answers_saved   = Answer::Answers($test->id)
            ->with('dimensions')
            ->get();

            $result     = new Result();
            $results    = $result->results($answers_saved->toArray());

            $resultados = Arr   ::add($results, 'test_id', $test->id);
            $item       = Result::create($resultados);

            // show a success message
            \Alert::success(__('base.insert_success'))->flash();

            return redirect('admin/result/'.$item->getKey().'/show');

        }

        // show a success message
        \Alert::success(__('base.insert_success'))->flash();

        // save the redirect choice for next time
        $this->crud->setSaveAction();

        return $this->crud->performSaveAction($test->getKey());

    }

    public function update()
    {
        $this->crud->hasAccessOrFail('update');
        $request         = $this->crud->validateRequest();
        $strippedReq     = $this->crud->getStrippedSaveRequest();
        $answers_request = $request->input('question');
        //dd($answers_request);

        $test_id       = $request->id;
        $test          = Test::find($test_id)->first();
        $evaluation_id = $request->evaluation_id;
        $evaluation    = Evaluation::find($evaluation_id)->first();
        $user_id       = $request->user_id;

        $questionCount   = $evaluation->questions->count();


        $complete        = $test->complete;

        $answers_saved   = Answer::Answers($test_id)
                            //->with('dimensions')
                            ->get();

        //dd($answers_saved);

        //dd(count(array_filter($answers_request)));

        $answerCount     = $answers_saved->count();
        $answers_pluck   = $answers_saved->pluck('answer','question_id')->toArray();

        //dd($test_id);

        foreach ($answers_request as $question => $answer) {

            if(
                $answer != null &&
                is_array($answers_pluck) &&
                array_key_exists($question, $answers_pluck) &&
                $answers_pluck[$question] != $answer
            ){
                Answer::Answers($test_id)
                        ->where('question_id', $question)
                        ->update(['answer' => $answer]);
            } else if(
                ($answer != null) &&
                is_array($answers_pluck) &&
                !array_key_exists($question, $answers_pluck)
            ){
                Answer::updateOrCreate([
                    'test_id'     => $test_id,
                    'question_id' => $question,
                    'answer'      => $answer,
                ]);
                $answerCount ++;
            }

        }

        //dd($answerCount);

        $test = $this->crud->update($request->get($this->crud->model->getKeyName()),
                                    $this->crud->getStrippedSaveRequest());
        $this->data['entry'] = $this->crud->entry = $test;

        if ($questionCount == $answerCount) {
            $complete = 1;
            $test->update(['complete' => $complete]);

            $answers_saved   = Answer::Answers($test->id)
            ->with('dimensions')
            ->get();
            $result     = new Result();
            $results    = $result->results($answers_saved->toArray());
            //dd($results);
            $resultados = Arr   ::add($results, 'test_id', $test->id);
            $item       = Result::create($resultados);

            // show a success message
            \Alert::success(__('base.insert_success'))->flash();

            return redirect('admin/result/'.$item->getKey().'/show');

        }

        // show a success message
        \Alert::success(__('base.insert_success'))->flash();

        // save the redirect choice for next time
        $this->crud->setSaveAction();

        return $this->crud->performSaveAction($test->getKey());
    }
}
