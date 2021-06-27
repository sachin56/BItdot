<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Leave
                            </div>
                            <div class="col-md-6">
                                {{--                                <a href="{{route('admin.products')}}" class="btn btn-success pull-right">All Product</a>--}}
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if(Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addattendent">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Employee ID</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Employee ID" class="form-control input-md" wire:model="emp_id"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Name" wire:model="name"></textarea>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



