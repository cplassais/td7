<div class="container">
    <div class="row text-center justify-content-center">
        <div class="card d-flex col-4">
            <h2 class="text-center">Détails matière</h2>
            <p><strong>Id : </strong><?php echo $oSubject->getId(); ?></p>
            <p><strong>Nom : </strong><?php echo $oSubject->getName(); ?></p>
            <p><strong>Durée : </strong><?php echo $oSubject->getDuration(); ?> heures</p>
            <p><strong>Description : </strong><?php echo $oSubject->getDescription(); ?></p>
            <p><strong>Coefficient : </strong><?php echo $oSubject->getCoefficient(); ?></p>

            <a type ="button" class="btn btn-dark" href="/subjectlist/">Retour à la liste </a>
        </div>
    </div>
</div>