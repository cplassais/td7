<div class="container">
    <div class="row text-center justify-content-center">
        <div class="card col-6">
            <h2 class="text-center">Détails matière</h2>
            <p>Id : <?php echo $oSubject->getId(); ?></p>
            <p>Nom : <?php echo $oSubject->getName(); ?></p>
            <p>Durée : <?php echo $oSubject->getDuration(); ?></p>
            <p>Description : <?php echo $oSubject->getDescription(); ?></p>
            <p>Coefficient : <?php echo $oSubject->getCoefficient(); ?></p>

            <a type ="button" class="btn btn-dark" href="/subjectlist/">Retour à la liste </a>
        </div>
    </div>
</div>