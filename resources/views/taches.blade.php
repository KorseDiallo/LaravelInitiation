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
        @for($i=1;$i<8;$i++)
        <div class="col-12 col-md-4 my-1">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Nom de la Tâche {{$i}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="card-link">Modifier</a>
                    <a href="#" class="card-link">Supprimer</a>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>


