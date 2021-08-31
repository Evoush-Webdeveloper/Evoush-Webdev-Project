@extends('layouts.app')

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

                   @if(in_array("ADMIN", json_decode(Auth::user()->roles)))
                    {{ "__Hallo ".Auth::user()->username." you are login as Administrator" }}
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
