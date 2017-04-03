@extends('layouts.app')

@section('content')
   
    <nav class="panel">
        <p class="panel-heading">
            Settings
        </p>        
        <div class="panel-block">
            Account Types:
                @foreach($accountTypes as $type)
                    <br/>{{$type->account_type}}
                @endforeach
        </div>
        <form method="post" action="{{route('new-account-type')}}">
            <div class="field has-addons">            
                {{csrf_field()}}
                <p class="control">
                    <input class="input" type="text" name="account_type" placeholder="New Account Type">
                </p>
                <p class="control">
                    <button type="submit" class="button is-info">
                        Submit
                    </button>
                </p>            
            </div>
        </form>
</nav>

@stop