@include('layouts.header')
<body>
<x-app-layout>

<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <button class="btn-btn"><a href="{{url('/registers')}}">Register user</a></button>
                    <button class="btn-btn"><a href="{{url('/addTask')}}">Add New Task</a></button>
                   
                    
                </div>
            </div>
        </div>
        <div>

    <table class="Table">
 <tr>
    <th>Task</th>
    <th>Assign To</th>
    <th>Phone</th>
    <th>Comment</th>
    <th>Status</th>
    <th>Delete</th>
    <th>Update</th>
    
 </tr>
 @foreach( $taskDeatils as $tasks)
</tr>
<td>{{ $tasks->task}}</td>
<td>{{$tasks->name}}</td>
<td>{{$tasks->phone}}</td>
<td>{{$tasks->comment}}</td>
<td>{{$tasks->status}}</td>
<td>
    <a href="{{url('/TaskDelete')}}/{{$tasks->id}}"><button class="btn-btn">Delete</button></a>
</td>
<td>
    <a href="{{url('/TaskUpdate')}}/{{$tasks->id}}"><button class="btn-btn">Update</button></a>
</td>


</tr>
@endforeach
</table>
    </div>
    </div>


</x-app-layout>  
</body>
</html>