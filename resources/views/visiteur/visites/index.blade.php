@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Gérer les visites</div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Numéro de la visite</th>
                                <th scope="col">Status</th>
                                <th scope="col">Jour de la visite</th>
                                <th scope="col">Heure de la visite</th>
                                <th scope="col">Compte rendu</th>
                                <th scope="col">Praticien consulté</th>
                                <th scope="col">Echantillon(s) laissé(s)</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $visiteur = auth()->user();?>
                        <?php $visites = $visiteur->visites;?>
                        
                        
                        
                            @foreach($visites as $visite)
                            <tr>
                                <td>Visite N°{{ $visite->idVisite }}</td>
                                @if($visite->status == NULL)
                                    <td class="badge badge-danger">En attente</td>
                                @else
                                    <td class="badge badge-success">Compléter</td>
                                @endif
                                <!-- btn btn-primary btn-sm -->

                                <td>{{ $visite->jourVisite }}</td>
                                <td>{{ $visite->heureVisite }}</td>


                                @if($visite->compteRendu == NULL)
                                    <td>A remplir</td>
                                @else
                                    <td>{{ $visite->compteRendu }}</td>
                                @endif







                                @foreach($praticiens as $praticien)
                                <?php $idPraticien = $visite->idPraticien;?>
                                    @if($praticien->idPraticien == $idPraticien)
                                        <!-- <td><a href="{{route('visiteur.users.edit', $visite['idVisite'])}}">{{ $praticien->nom }} {{ $praticien->prenom }}</a></td> -->
                                        <td><a href="">{{ $praticien->nom }} {{ $praticien->prenom }}</a></td>

                                        <!-- return view('visiteur.visites.index')->with(['visites'=> Visite::all() -->
                                    @endif
                                @endforeach










                                @foreach($echantillons as $echantillon)
                                <?php $idEchantillon = $visite->idEchantillon;?>
                                <?php $qteEchantillon = $echantillon->quantite;?>

                                
                                    @if($echantillon->idEchantillon == $idEchantillon)

                                        @if($qteEchantillon > 0)
                                            <td><a href="" data-toggle="modal" data-target="#infos">Oui (Cliqués pour détails)</a></td>
                                            <div class="modal fade" id="infos">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <span>&times;</span>
                                                            <h4 class="modal-title">Echantillons :</h4>
                                                        </div>
                                                            <div class="modal-body">
                                                                @foreach($medicaments as $medicament)
                                                                    @if($medicament->idMedicament == $echantillon->idMedicament)
                                                                        {{ $medicament->idMedicament }} x{{ $echantillon->qteEchantillon }}
                                                                    @endif
                                                                @endforeach
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Fermer</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        @elseif($qteEchantillon == -1)
                                            <td>A remplir</td>
                                        @else
                                            <td>Non</td>
                                        @endif

                                    @endif
                                @endforeach

                                @if($visite->status == NULL)
                                    <th>
                                        <a href="{{route('visiteur.users.edit', $visite['idVisite'],$visite['idVisite'])}}">
                                            <button type="button" class="btn btn-primary btn-sm" value="on">Remplir</button>
                                        </a>
                                    </th>
                                @else
                                    <th>
                                        <a href="{{route('visiteur.users.edit', $visite['idVisite'])}}">
                                            <button type="button" class="btn btn-success btn-sm" disabled="disabled" value="off">Valider</button>
                                        </a>
                                    </th>
                                @endif
                                



                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
