@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Modifier la visite du {{$visite->jourVisite}}</div>
                <div class="card-body">
                    <form method="post" action="{{ route('visiteur.users.update', $idVisite) }}"enctype="multipart/form-data">
                        @csrf
                        <input name ="_method" type="hidden" value="PATCH">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="form-group col-md-4">
                                
                                <!-- <input type="text"class="form-control"name='compteRendu' value="{{$visite->compteRendu}}"> -->
                                <div class="form-group shadow-textarea">
                                    <label for="compteRendu">Compte Rendu :</label>
                                    <textarea class="form-control z-depth-1" name="compteRendu" id="compteRendu5" rows="3" required></textarea>
                                </div>

                                <br>
                                <label for="Pseudo">Echantillon(s) laissé(s) ?</label>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" onclick="medicament.disabled = false; qteEchantillon.disabled = false" id="defaultUnchecked" name="defaultExampleRadios">
                                    <label class="custom-control-label" for="defaultUnchecked">Oui</label>
                                </div>
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" onclick="medicament.disabled = true, qteEchantillon.disabled = true" id="defaultChecked" name="defaultExampleRadios" checked>
                                    <label class="custom-control-label" for="defaultChecked">Non</label>
                                </div>
                                <br>

                                <label for="medicament">Selectionnez le médicament :</label>
                                <select class="browser-default custom-select" disabled="true" name="medicament">
                                    @foreach($medicaments as $medicament)
                                        <option value="{{$medicament->idMedicament}}">{{$medicament->nomMedicament}}</option>
                                    @endforeach
                                </select>
                                <br>
                                <br>
                                <label for="qteEchantillon">Quantité d'echantillon(s) laissé(s) :</label>
                                <input type="text"class="form-control" required name='qteEchantillon' disabled="true">
                        
                                <br>

                                <label for="Pseudo">Confirmez :</label>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" onclick="" id="status" name='status' required>
                                    <label class="custom-control-label" onclick="myFunction()" for="status">Oui, je valide mon compte rendu.</label>
                                </div>
                                <br>
                          
                   
                                <button type="submit"class="btn btn-success">Valider</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function myFunction() {
        confirm("Attention, vous ne pourrez plus modifier cette visite.");
    }
</script>
@endsection