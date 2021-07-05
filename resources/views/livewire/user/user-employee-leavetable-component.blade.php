<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                All Leave
                            </div>


                            <div class="col-md-6">
                                <a href="{{route('user.employeeleave')}}" class="btn btn-success pull-right">Add New</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Employee ID</th>
                                <th>Description</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($leavetable as $task)
                                <tr>
                                    <td>{{$task->employee_id}}</td>
                                    <td>{{$task->description}}</td>
                                    <td>{{$task->status}}</td>
                                    <td></td>
                                    {{--                                        <a href="{{route('admin.editproducts',['product_slug'=>$product->slug])}}"><i class="fa fa-edit fa-2x text-info"></i> </a>--}}
                                    {{--                                        <a href="#" style="margin-left: 10px;" wire:click.prevent="deleteProduct({{$product->id}})"><i class="fa fa-times fa-2x text-danger"></i> </a>--}}
                                    {{--                                    </td>--}}

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$leavetable->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


