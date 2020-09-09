@extends('layouts.app')

@section('title','sign up')

@push('css')
<style>
    .content {width: 50%;}
    .title { font-size: 35px; margin: 10px;}
    .form-group { margin: 10px;}
</style>
@endpush

@section('content')        
<div class="content">
    <div class="title">Sign Up</div>
        <div class="body">
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="form-group">
                    <p for="name" class="sub-title">Name</p>

                    <div class="input">
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <p for="email" class="sub-title">Mail Address</p>

                    <div class="input">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <p class="sub-title">PassWord</p>

                    <div class="input">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <p for="password-confirm" class="sub-title">Confirm PassWord</p>

                    <div class="input">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group">
                    <div class="input offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            Sign Up
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
