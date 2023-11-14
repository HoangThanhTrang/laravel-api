<?php

namespace App\Http\Controllers\Api\v1;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\task;
use App\Http\Requests\StoreTaskRequest;
use App\Http\Requests\UpdateTaskRequest;

class TaskController extends Controller
{
    public function index()
    {
        
        return task::all();
    }
    public function show(task $task)
    {
        return new TaskResource($task);
    }
    public function store(StoreTaskRequest $request)
    {
        $task = task::create($request->validated());
        return new TaskResource($task);
    }
    public function update(UpdateTaskRequest $request, task $task)
    {
        $task->update($request->validated());
        return new TaskResource($task);
    }
    public function destroy(task $task)
    {
        $task->delete();
        return response()->noContent();
    }

}
