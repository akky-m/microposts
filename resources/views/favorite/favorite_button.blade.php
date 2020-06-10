@if (Auth::user()->checkIfMicropostIsMyFavorite($micropost['id']))
    {!! Form::open(['route' => ['favorites.unregister', $micropost['id']], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-danger btn-sm"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorites.register', $micropost['id']]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-primary btn-sm"]) !!}
    {!! Form::close() !!}
@endif