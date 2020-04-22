@extends('layouts.app', ['class' => 'register-page', 'page' => __('Register Page'), 'contentClass' => 'register-page'])

@section('content')
    <div class="row">
        <div class="col-md-5 ml-auto">
            <div class="info-area info-horizontal mt-5">
                <div class="icon icon-warning">
                    <i class="tim-icons icon-world"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Venturi') }}</h3>
                    <p class="description">
                        {{ __('Défis technologiques et humains, les Venturi Global Challenges nous permettent de repousser les limites du véhicule électrique tout en rendant hommage aux plus grandes épopées automobiles du siècle dernier.') }}
                    </p>
                </div>
            </div>
            <br>
            <br>
            <div class="info-area info-horizontal">
                <div class="icon icon-primary">
                    <i class="fas fa-tachometer-alt"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Racing') }}</h3>
                    <p class="description">
                        {{ __('Première équipe à s’être engagée dans le Championnat du monde de Formule Électrique, Venturi concourt désormais sous le nom de ROKiT Venturi Racing. ') }}
                    </p>
                </div>
            </div>
            <br>
            <br>
            <div class="info-area info-horizontal">
                <div class="icon icon-info">
                    <i class="tim-icons icon-trophy"></i>
                </div>
                <div class="description">
                    <h3 class="info-title">{{ __('Voxan Motors') }}</h3>
                    <p class="description">
                        {{ __('L’emblématique marque française de moto Voxan a pris le virage de la motorisation électrique en 2010 lors de son rachat par Venturi.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-7 mr-auto">
            <img class="card-img" src="{{ asset('black') }}/img/card-primary.png" alt="Card image">
            <br>
            <br>
            <br>
            <div class="card card-register card-white">
                <br>
                <form class="form" method="post" action="{{ route('register') }}">
                    @csrf

                    <div class="card-body">
                        <div class="input-group{{ $errors->has('name') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-single-02"></i>
                                </div>
                            </div>
                            <input type="text" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}">
                            @include('alerts.feedback', ['field' => 'name'])
                        </div>
                        <div class="input-group{{ $errors->has('email') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-email-85"></i>
                                </div>
                            </div>
                            <input type="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('Email') }}">
                            @include('alerts.feedback', ['field' => 'email'])
                        </div>
                        <div class="input-group{{ $errors->has('password') ? ' has-danger' : '' }}">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}">
                            @include('alerts.feedback', ['field' => 'mot de passe'])
                        </div>
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="tim-icons icon-lock-circle"></i>
                                </div>
                            </div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="{{ __('Confirm Password') }}">
                        </div>
                        <div class="form-check text-left">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox">
                                <span class="form-check-sign"></span>
                                {{ __('I agree to the') }}
                                <a href="#">{{ __('termes et conditions') }}</a>.
                            </label>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-round btn-lg">{{ __('Créer son compte') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
