<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    {{-- Fonts --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />

    {{-- Bootstrap CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>
<div class="antialiased">
<div class="container p-5">
    <div>
        <div class="float-start">
            <h4 class="pb-3">My Tasks</h4>
        </div>
        <div class="clearfix"></div>
    </div>

    @foreach ($usertask as $task)
        <div class="card mt-3">
            <h5 class="card-header">
                @if ($task->status === 'To Do')
                    {{ $task->title }}
                @else
                    <del>{{ $task->title }}</del>
                @endif

                <span class="badge rounded-pill bg-warning text-dark">
{{--                    {{ $task->created_at->diffForHumans() }}--}}
                </span>
            </h5>

            <div class="card-body">
                <div class="card-text">
                    <div class="float-start">
                        @if ($task->status === 'To Do')
                            {{ $task->description }}
                        @else
                            <del>{{ $task->description }}</del>
                        @endif
                        <br>

                        @if ($task->status === 'To Do')
                            <span class="badge rounded-pill bg-info text-dark">
                                Todo
                            </span>
                        @else
                            <span class="badge rounded-pill bg-success text-white">
                                Done
                            </span>
                        @endif


                        <small>Last Updated - {{ $task->updated_at->diffForHumans() }} </small>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('task.update', $task->id) }}" class="btn btn-success">
                            <i class="fa fa-edit"></i>
                        </a>

{{--                        <form action="{{ route('task.destroy', $task->id) }}" style="display: inline" method="POST" onsubmit="return confirm('Are you sure to delete ?')">--}}
{{--                            @csrf--}}
{{--                            @method('DELETE')--}}

{{--                            <button type="submit" class="btn btn-danger">--}}
{{--                                <i class="fa fa-trash"></i>--}}
{{--                            </button>--}}
{{--                        </form>--}}

                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    @endforeach

</div>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>

