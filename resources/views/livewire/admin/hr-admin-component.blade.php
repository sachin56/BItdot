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
                                Attendent
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th>Employee Id</th>
                                <th>Description</th>
                                <th>Status</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($hr as $task)
                                <tr>
                                    <td>{{$task->employee_id}}</td>
                                    <td>{{$task->description}}</td>
                                    <td>{{$task->status}}</td>
                                    <td>
                                        <a href="{{route('admin.editleave',['leave_id'=>$task->id])}}"><i class="fa fa-edit fa-2x text-info"></i> </a>
                                    </td>
                                    {{--                                        <a href="{{route('admin.editproducts',['product_slug'=>$product->slug])}}"><i class="fa fa-edit fa-2x text-info"></i> </a>--}}
                                    {{--                                        <a href="#" style="margin-left: 10px;" wire:click.prevent="deleteProduct({{$product->id}})"><i class="fa fa-times fa-2x text-danger"></i> </a>--}}
                                    {{--                                    </td>--}}

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$hr->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



