<div>
    <div class="container" style="padding: 30px 0;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Task
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
                        <form class="form-horizontal" enctype="multipart/form-data" wire:submit.prevent="addtask">
                            <div class="form-group">
                                <label class="col-md-4 control-label">Title</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Title" class="form-control input-md" wire:model="title"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Description</label>
                                <div class="col-md-4">
                                    <textarea class="form-control" placeholder="Description" wire:model="description"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Status</label>
                                <div class="col-md-4">
                                    <select class="form-control" wire:model="status">
                                        <option value="Done">Done</option>
                                        <option value="To Do">TO Do</option>
                                    </select>
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

