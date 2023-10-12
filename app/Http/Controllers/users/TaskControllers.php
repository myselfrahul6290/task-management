<?php

namespace App\Http\Controllers\users;
use App\Models\TaskModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskControllers extends Controller
{
    //
    public function ShowUserTask(){
        $taskDeatils=TaskModel::all();
        $data=compact('taskDeatils');
        return view('user.home')->with($data);
    }
    public function edits($id){
        $tasks=TaskModel::find($id);       
        $data=compact('tasks');
        return view('user.TaskForm')->with($data);
        
    }
    public function updates($id,Request $request){
        $tasks=TaskModel::find($id);
       
        $tasks->comment=$request['comment'];
        $tasks->status=$request['status'];
            
        $tasks->update();
            return redirect('/UserTaskList');
           
    }
}
