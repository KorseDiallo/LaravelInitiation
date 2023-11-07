@include ("header");

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="my-5">
                Listes Des Tâches
            </h1>
          
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
    @foreach($taches as $tache)
        <div class="col-12 col-md-4 my-1">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nom de la Tâche :{{$tache->nom_tache}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    <p class="card-text">{{$tache->description_tache}}</p>
                    <a href="#" class="card-link">Modifier</a>
                    <a href="#" class="card-link">Supprimer</a>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
</div>


