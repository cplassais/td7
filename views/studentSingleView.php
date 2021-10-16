<div class="container">
    <div class="row text-center justify-content-center">
        <div class="card col-6">
            <h2 class="text-center">Détails Apprenant</h2>
            <p>Id : <?php echo $oStudent->getId(); ?></p>
            <p>Nom : <?php echo $oStudent->getName(); ?></p>
            <p>Prénom : <?php echo $oStudent->getFirstname(); ?></p>
            <p>Date de Naissance : <?php echo $oStudent->getBirthdate(); ?></p>

            <a type ="button" class="btn btn-dark" href="/studentlist/">Retour à la liste </a>
        </div>
    </div>
</div>