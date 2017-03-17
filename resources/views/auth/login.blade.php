@extends('layouts.app')

@section('content')
    <div class="box">
        <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
            <div class="field">
                <p class="control has-icon">
                    <input class="input{{ $errors->has('email') ? ' has-error' : '' }}" type="email" name="email" placeholder="Email">
                    <span class="icon is-small">
                        <i class="fa fa-envelope"></i>
                    </span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </p>
                </div>
                <div class="field">
                    <p class="control has-icon">
                        <input class="input{{ $errors->has('password') ? ' has-error' : '' }}" name="password" type="password" placeholder="Password">
                        <span class="icon is-small">
                            <i class="fa fa-lock"></i>
                        </span>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </p>
                </div>
                <div class="field">
                    <p class="control">
                        <label class="checkbox">
                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                        </label>
                    </p>
                </div>
                <div class="field">
                <p class="control">
                    <button class="button is-success">
                    Login
                    </button>
                </p>
            </div>
        </form>
    </div>
@endsection
