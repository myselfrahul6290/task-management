<?php

namespace App\Http\Controllers\Admin;
use App\Models\TaskModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index(){
        return view('admin.userForm');
    }

    public function ShowData(){
        $taskDeatils=TaskModel::all();
        $data=compact('taskDeatils');
        return view('admin.UserData')->with($data);
    }

    // create new record
    public function store(Request $request){
        $tasks=new TaskModel;
        $tasks->task=$request['task'];
        $tasks->name=$request['name'];
        $tasks->phone=$request['phone'];
        $tasks->comment=$request['comment'];
        $tasks->status=$request['status'];

        $tasks->save();
        return redirect('/TaskList');
    }

// delete a record
    public function destroy($id){
        $tasks=TaskModel::find($id);
        $tasks->delete();
            return redirect('/TaskList');}

    //update
    public function edit($id){
        $tasks=TaskModel::find($id);       
        $data=compact('tasks');
        return view('admin.userForm')->with($data);
        
    }
    public function update($id,Request $request){
        $tasks=TaskModel::find($id);
        $tasks->task=request('task');
        $tasks->name=$request['name'];
        $tasks->phone=$request['phone'];
        $tasks->comment=$request['comment'];
        $tasks->status=$request['status'];
            
        $tasks->update();
            return redirect('/TaskList');
           
    }
}
