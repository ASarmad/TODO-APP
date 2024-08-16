<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskCreateUpdateRequest;
use Illuminate\Http\Request;
use App\Models\Task;
use Carbon\Carbon;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::where('user_id',auth()->user()->id)->get();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskCreateUpdateRequest $request)
    {
        try{
            Task::create([
                'user_id'=>auth()->user()->id,'title'=>$request->title,'message'=>$request->message,'deadline_date'=>$request->deadline_date,
                'deadline_time'=>$request->deadline_time,'status'=>'Pending'
            ]);
            return response()->json('Data has been added successfully', 200);
        } catch (\Throwable $th) {
            //dd($th->getMessage());
            return response()->json('Error , please try again later', 400);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        $task =$task->where('id',$task->id)->firstOrFail();
        return view('tasks.show',compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        if(isset($task->deadline_time)){
            $time = Carbon::createFromFormat('H:i:s', $task->deadline_time)->format('H:i');
        }else{
            $time='24:00:00';
        }
        return view('tasks.update',compact('time','task'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskCreateUpdateRequest $request, Task $task)
    {
        try{
            $data=$request->all();
            $data['title'] =$request->title;
            $data['message'] =$request->message;
            $data['deadline_date'] =$request->deadline_date;
            $data['deadline_time'] =$request->deadline_time;
            $task->update($data);
            return response()->json('Data has been Updated successfully', 200);
        } catch (\Throwable $th) {
            //dd($th->getMessage());
            return response()->json('Error , please try again later', 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        try{
            $task->delete();
            return response()->json('Data has been deleted successfully', 200);
        } catch (\Throwable $th) {
            //dd($th->getMessage());
            return response()->json('Error , please try again later', 400);
        }
    }
    /**
     * Change the status of the task.
     */
    public function changeStatus(Task $task)
    {
        try{
            $task->update(['status'=>'Completed']);
            return response()->json('Data has been Updated successfully', 200);
        } catch (\Throwable $th) {
            //dd($th->getMessage());
            return response()->json('Error , please try again later', 400);
        }
    }
}
