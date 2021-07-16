@extends('layoutadmin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <form method="post" action="/info">
                    @CSRF
                    <input type="email" name="email"><br>
                    <input type="submit" name="send me email">
                    </form>
                    @if(session('email_sent'))
                     <span>{{session('email_sent')}}</span>
                    @endif
                                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
