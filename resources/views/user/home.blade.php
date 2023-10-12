@include('layouts.header')
<body>
<x-app-layout>

<h1 style="text-align:center; margin:5px;">User Task List</h1>
<hr/>
    <table class="Table">
 <tr>
    <th>Task</th>
    <th>Assign To</th>
    <th>Phone</th>
    <th>Comment</th>
    <th>Status</th>
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
    <a href="{{url('/UserTaskUpdate')}}/{{$tasks->id}}"><button class="btn-btn">Update</button></a>
</td>


</tr>
@endforeach
</table>
    </div>
    </div>


</x-app-layout>  
</body>
</html>