<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;
use App\Models\Ciudadano;
use App\Models\Day;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();

        return response()->view('tareas.index',['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $days = Day::all();
        $ciudadanos = Ciudadano::all();

        return response()->view('tareas.create',
            ['days'=>$days,
            'ciudadanos'=>$ciudadanos]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTaskRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTaskRequest $request)
    {
        Task::create($request->all());

        return response()->redirectTo('tareas');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $tarea = Task::find($task->id);
        return $tarea;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $tarea)
    {
        $days = Day::all();
        $ciudadanos = Ciudadano::all();

        return response()->view('tareas.create',[
            'task' => $tarea,
            'days'=>$days,
            'ciudadanos'=>$ciudadanos
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTaskRequest  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTaskRequest $request, Task $tarea)
    {
        $tarea->update($request->all());
        return response()->redirectTo('tareas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $tarea)
    {
        $tarea->delete();
        return response()->redirectTo('tareas');
    }

    /**
     * Show the form for view agenda.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function agenda()
    {
        $tasks = Task::all();
        return response()->view('tareas.agenda',['tasks' => $tasks]) ;
    }    
}
