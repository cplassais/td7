
<table class="table table-striped text-center">
    <thead>
    <tr>
        <th scope="col">INDEX</th>
        <th scope="col">NOM</th>
        <th scope="col">PRENOM</th>
        <th scope="col">DATE NAISSANCE</th>
        <th scope="col"><a type ="button" class="btn btn-dark " href="/studentadd/">Ajouter un apprenant </a></th
    </tr>
    </thead>
    <tbody>
    <?php foreach ($aResponses as $response) { ?>
        <tr>
            <td><?php echo $response->getId(); ?></td>
            <td><?php echo $response->getName(); ?></td>
            <td><?php echo $response->getFirstname(); ?></td>
            <td><?php echo $response->getBirthdate(); ?></td>
            <td><a type="button" class="btn btn-outline-success" href="/studentsingle/<?php echo $response->getId(); ?>"
                   title="modifier">Détails</a>
                <a type="button" class="btn btn-outline-dark" href="/studentupdate/<?php echo $response->getId(); ?>"
                   title="editer">Editer</a>
                <a type="button" class="btn btn-outline-info" href="/studentduplicate/<?php echo $response->getId(); ?>"
                   title="dupliquer">Dupliquer</a>
                <a type="button" class="btn btn-outline-danger" href="/studentdelete/<?php echo $response->getId(); ?>"
                title="supprimer">Supprimer</a>
            </td>
            <td></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
