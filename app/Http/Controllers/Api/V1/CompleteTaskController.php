<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TaskResource;
use App\Models\task;
use Illuminate\Http\Request;

class CompleteTaskController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, task $task)
    {
        $task->is_completed= $request->is_completed;
        $task->save(); // lưu model và cập nhật lại model hiện có
        return  new TaskResource($task);
    }
}
