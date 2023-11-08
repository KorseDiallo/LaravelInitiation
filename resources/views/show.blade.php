
@include ("header");




<div class="container">
    <div class="row">
        <div class="col-12 col-md-4 my-1">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$tacheTrouver->nom_tache}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">{{$tacheTrouver->description_tache}}</h6>
                    <p class="card-text">{{$tacheTrouver->priorite}}</p>
                    <p class="card-text"> Status:
                        @if($tacheTrouver->is_terminer)
                            Terminer
                        @else 
                        En cours   
                        <a href="/tache/termine/{{$tacheTrouver->id}}" class="card-link">Terminer</a>
                        @endif
                    </p>
                   
                </div>
            </div>
        </div>
    </div>
</div>
