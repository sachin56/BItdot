<div>
    Productivity
</div>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <div class="container">
    <div class="text-center">
        <h1>Productivity Management</h1>
        <div>
        <a href="{{route('taskdownload')}}" class="btn btn-success pull-right">Download</a>
        </div>
            <div class="row">
                <div class="col-md-12">

                    @foreach($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                    {{$error}}
                    </div>
                    @endforeach

                    <form method="post" action="/saveTask">
                    {{csrf_field()}}
                    
                        <input type="text" class="form-control" name="task" placeholder="Enter your task here">
                        </br>   
                        <input type="submit" class="btn btn-primary" value="ADD TASK">
                        <input type="button" class="btn btn-warning" value="CLEAR">
                        </form>
                        </br>
                        <table class="table table-light-blue">
                        
                            <th style="width: 50px">ID</th> 
                            <th style="width: 50px">Task</th> 
                            <th style="width: 50px">State</th> 
                            <th style="width: 50px">Action</th> 
                        
                            @foreach($tasks as $task)
                            <tr>
                            <td>{{$task->id}}</td> 
                            <td>{{$task->task}}</td> 
                            <td>
                            @if($task->iscompleted)
                            <button class="btn btn-success">Done</button>
                            @else
                            <button class="btn btn-warning">Ongoing</button>
                            @endif
                            </td> 
                            <td>
                            @if(!$task->iscompleted)
                                 <a href="/markascompleted/{{$task->id}}" class="btn btn-primary">Completed</a>
                            @else
                                 <a href="/markasnotcompleted/{{$task->id}}" class="btn btn-warning">Not Completed</a>
                            @endif
                                <a href="/deletetask/{{$task->id}}" class="btn btn-danger">Delete</a>
                                <a href="/updatetask/{{$task->id}}" class="btn btn-success">Update</a>
                            </td>
                            </tr>
                            @endforeach
                    </table>



                </div>
            </div>
    </div>
    </div>
