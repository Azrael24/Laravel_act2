@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-4 rounded" style="width: 40%; margin:auto; margin-top: 30px; border: 1px solid black;">
        <h5>Update Information</h5>
        <div class="lead">
            
        </div>
        
        <div class="container mt-4">
            <form method="post" action="{{ route('users.update', $user->id) }}">
                @method('patch')
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input value="{{ $user->name }}" 
                        type="text" 
                        class="form-control" 
                        name="name" 
                        placeholder="Name" required>

                    @if ($errors->has('name'))
                        <span class="text-danger text-left">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input value="{{ $user->email }}"
                        type="email" 
                        class="form-control" 
                        name="email" 
                        placeholder="Email address" required>
                    @if ($errors->has('email'))
                        <span class="text-danger text-left">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input value="{{ $user->username }}"
                        type="text" 
                        class="form-control" 
                        name="username" 
                        placeholder="Username" required>
                    @if ($errors->has('username'))
                        <span class="text-danger text-left">{{ $errors->first('username') }}</span>
                    @endif
                </div>

                <div class="mb-3" >
                    <label for="password" class="form-label" >Password</label>
                    <input disabled="disable" value="{{ $user->password }}" 
                        type="password" 
                        class="form-control" 
                        name="password" 
                        placeholder="Username" required>
                    @if ($errors->has('password'))
                        <span class="text-danger text-left">{{ $errors->first('password') }}</span>
                    @endif
                </div>

                <button type="submit" class="btn btn-outline-success">Update user</button>
                <a href="{{ route('users.index') }}" class="btn btn-default">Cancel</button>
            </form>
        </div>

    </div>
@endsection