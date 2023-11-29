@extends('layout')

@section('title', isset($user) ? 'Update' . $user->name : 'Create User')

@section('content')
    <a href="{{ route('users.index') }}" type="button" class="btn btn-secondary">Back to users list</a>
    <form
        @if(isset($user))
            action="{{ route('users.update', $user) }}"
        @else
            action="{{ route('users.store') }}"
        @endif

        method="POST" class="mt-3">
        @csrf
        @isset($user)
            @method("PUT")
        @endisset
        <div class="row">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Name" aria-label="Name" value="{{ old('name', isset($user) ? $user->name : null) }}">
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <input type="text" name=email class="form-control" placeholder="Email" aria-label="Email" value="{{ old('email', isset($user) ? $user->email : null) }}">
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>            
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">{{ isset($user) ? 'Update' : 'Create' }}</button>
            </div>
        </div>
    </form>
    

@endsection