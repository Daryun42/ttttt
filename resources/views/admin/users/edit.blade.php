@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Modifier {{$user->nom}} {{$user->prenom}}</div>

                <div class="card-body">




                    <form method="post" action="{{ route('admin.users.update', $user->id) }}"enctype="multipart/form-data">
                        @csrf
                        <input name ="_method" type="hidden" value="PATCH">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="Pseudo">Nom :</label>
                                <input type="text"class="form-control"name='nom' value="{{$user->nom}}">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="Pseudo">Prénom :</label>
                                <input type="text"class="form-control"name='prenom' value="{{$user->prenom}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                <label for="Pseudo">Email :</label>
                                <input type="text"class="form-control"name='email' value="{{$user->email}}">
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4"style="margin-top:60px">
                                <button type="submit"class="btn btn-success">Valider</button>
                            </div>
                        </div>

                
                    </form>







                </div>
            </div>
        </div>
    </div>
</div>
@endsection
