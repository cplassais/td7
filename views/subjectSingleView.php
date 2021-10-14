<div class="container">
    <div class="row text-center justify-content-center">
        <div class="card col-6">
            <h2 class="text-center">Détails matière</h2>
            <p>Id : <?php echo $aListSubjects['id']; ?></p>
            <p>Nom : <?php echo $aListSubjects['name']; ?></p>
            <p>Durée : <?php echo $aListSubjects['duration']; ?></p>
            <p>Description : <?php echo $aListSubjects['description']; ?></p>
            <p>Coefficient : <?php echo $aListSubjects['coefficient']; ?></p>

            <a type ="button" class="btn btn-dark" href="/subjectlist/">Retour à la liste </a>
        </div>
    </div>
</div>