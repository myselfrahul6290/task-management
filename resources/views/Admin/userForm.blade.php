@include('layouts.header')
<body>
   
  <div class="form-container">
    <h1>Add Task Details</h1>
       <div class="content">
        <form  method='post'>
            @csrf 
            <label>Task Name</label>
            <input type="text" placeholder="Enter Task Details" name="task" value="{{ old('Task',$tasks->task ?? '') }}" />
            <label>Assign To</label>
            <input type="text" name="name" label="Your Name" placeholder="User Name" value="{{ old('name',$tasks->name ?? '') }}"/>
            <label>Phone</label>
            <input type="text" placeholder="Enter phone Number" name="phone" value="{{ old('phone',$tasks->phone ?? '') }}" />
            <label>Comment</label>
            <textarea name="comment" id="" placeholder="write Comment" cols="73" rows="10" >{{ old('comment',$tasks->comment ?? '') }}</textarea>
            
            <select name="status" value="{{ old('status',$tasks->status ?? '') }}">
                <option value="Todo"
                >Todo</option>
                
                <option value="In progress"
                >In progress</option>
                <option value="Testing"
                >Testing</option>
                <option value="Completed"
                >Completed</option>

            </select> <br/>
            <input type="submit" class="btn" />
          </form>
        </div>
        <a href="{{url('/home')}}"><button  class="btn">back</button></a>
  </div>  
  
  
 
</body>
</html>