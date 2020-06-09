@if (Auth::id() != $micropost['user_id'])
    {{--@if (Auth::micropost()->is_registering($micropost['user_id'])
     {!! Form::open(['route' => ['micropost.unregister', $micropost->id], 'method' => 'delete']) !!}
            {!! Form::submit('Unregister', ['class' => "btn btn-danger btn-block"]) !!}
        {!! Form::close() !!}
    @else
        {!! Form::open(['route' => ['micropost.register', $micropost->id]]) !!}
            {!! Form::submit('Register', ['class' => "btn btn-primary btn-block"]) !!}
        {!! Form::close() !!}
    @endif--}}
@endif