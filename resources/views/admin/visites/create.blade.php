@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajouter une visite') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('admin.visites.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="jourVisite" class="col-md-4 col-form-label text-md-right">{{ __('Jour de la visite') }}</label>

                            <div class="col-md-6">
                                <input id="jourVisite" type="date" class="form-control @error('jourVisite') is-invalid @enderror" name="jourVisite" value="{{ old('jourVisite') }}" required autocomplete="jourVisite" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="heureVisite" class="col-md-4 col-form-label text-md-right">{{ __('Heure de la visite') }}</label>

                            <div class="col-md-6">
                                <input id="heureVisite" type="time" class="form-control @error('heureVisite') is-invalid @enderror" name="heureVisite" value="{{ old('heureVisite') }}" required autocomplete="heureVisite" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="praticien" class="col-md-4 col-form-label text-md-right">{{ __('Praticien') }}</label>
                                <select class="" name="idPraticien">
                                    @foreach($praticiens as $praticien)
                                        <option value="{{$praticien->idPraticien}}" selected>{{$praticien->nom}} {{$praticien->prenom}}</option>
                                    @endforeach
                                </select>
                        </div>


                        <div class="form-group row">
                            <label for="visiteur" class="col-md-4 col-form-label text-md-right">{{ __('Visiteur médical') }}</label>
                                <select class="" name="idVisiteur">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}" selected>{{$user->nom}} {{$user->prenom}}</option>
                                    @endforeach
                                </select>
                        </div>
    

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Validez') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
