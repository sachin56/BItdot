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
                                <th>Name</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($leave as $task)
                                <tr>
                                    <td>{{$task->emp_id}}</td>
                                    <td>{{$task->name}}</td>
                                    <td></td>
                                    {{--                                        <a href="{{route('admin.editproducts',['product_slug'=>$product->slug])}}"><i class="fa fa-edit fa-2x text-info"></i> </a>--}}
                                    {{--                                        <a href="#" style="margin-left: 10px;" wire:click.prevent="deleteProduct({{$product->id}})"><i class="fa fa-times fa-2x text-danger"></i> </a>--}}
                                    {{--                                    </td>--}}

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        {{$leave->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

