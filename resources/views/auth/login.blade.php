@extends('layouts.app')

<style type="text/css">
    .theme-mix2{
        background: #00c6ff !important; /* fallback for old browsers */
        background: -webkit-linear-gradient(to bottom, #00c6ff, #0072ff) !important; /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to bottom, #00c6ff, #0072ff)  !important; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }
</style>
@section('content')
    <div class="theme-mix2 uk-section uk-section-muted uk-flex uk-flex-middle uk-animation-fade" uk-height-viewport>
        <div class="uk-width-1-1">
            <div class="uk-container">
                <div class="uk-grid-margin uk-grid uk-grid-stack" uk-grid>
                    <div class="uk-width-1-1@m">
                        <div class="uk-margin uk-width-large uk-margin-auto uk-card uk-card-default uk-card-body uk-box-shadow-large">
                            <h3 class="uk-card-title uk-text-center">CRM</h3>
                            <form  method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: mail"></span>
                                        <input class="uk-input uk-form-large" type="text" name="email" value="{{ old('email') }}" required autofocus>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <div class="uk-inline uk-width-1-1">
                                        <span class="uk-form-icon" uk-icon="icon: lock"></span>
                                        <input class="uk-input uk-form-large" type="password" name="password" required>
                                    </div>
                                </div>
                                <div class="uk-margin">
                                    <button type="submit" class="uk-button uk-button-primary uk-button-large uk-width-1-1">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
