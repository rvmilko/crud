@extends('layout')

@section('title', 'User ' . $user->name)

@section('content')
    <a href="{{ route('users.index') }}" type="button" class="btn btn-secondary">Back to users list</a>
    <div class="card mt-3" style="width: 24rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: {{ $user->id }}</li>
            <li class="list-group-item">Name: {{ $user->name }}</li>
            <li class="list-group-item">Email: {{ $user->email }}</li>
            <li class="list-group-item">Created: {{ $user->created_at }}</li>
            <li class="list-group-item">Updated: {{ $user->updated_at }}</li>        
        </ul>
    </div>

    <a href="{{ route('users.edit', $user) }}" type="button" class="btn btn-warning mt-3">Edit</a>
    <form method="POST" action="{{ route('users.destroy', $user) }}">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger mt-3">Delete</button>
    </form>
@endsection