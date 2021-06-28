<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container">
    <div class="text-center">
        <h3>User update</h3>
            <div class="row">
                <div class="col-md-12">
            </br>
            </br>
                <form action="/updatetasks" method="post">
                    {{csrf_field()}}
                    <input type="text" class="form-control" name="task" value="{{$taskdata->task}}"/>
                    <input type="hidden" name="id" value="{{$taskdata->id}}"/>
                    <input type="submit" class="btn btn-warning" value="Update"/>
                    &nbsp;
                    &nbsp;
                    <input type="button" class="btn btn-danger" value="Cancel"/>
                </form>
            </div>
        </div>
    </div>
</div>