<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Http\Requests\TaskRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Yajra\DataTables\Facades\DataTables;


class TaskController extends Controller
{
    public function index()
    
    {

       $tasks = Task::orderBy('id', 'desc')->get();

       return view('tasks.index', [
        
        'task' => new Task,

        'submit' => 'Create',


        'tasks' => $tasks,

    
                            ]);

    }



    public function store(TaskRequest $request){

        Task::create($request->all());
    
        return back();

    }

    public function edit(Task $task)
    {
        return view('tasks.edit', [
            
            
            'tasks' => $task,
            'submit' => 'Update'
        ]);
    }

    public function update(TaskRequest $request, $id){

        Task::find($id)->update(['nama' => $request->nama]);

        return redirect('tasks');

    }

    public function destroy($id){

        Task::find($id)->delete();

        return back();

    }

    public function datatables(){

        $tasks = Task::query();
        return DataTables::of($tasks)->make();

    }

    public function get_detail_user($id)
    {


        $tasks = Task::where('id', $id)->first();
        return response()->json([

            'status'=>true,'data'=>$tasks], 200);

    }

}
