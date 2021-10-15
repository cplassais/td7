
<table class="table table-striped text-center">
    <thead>
    <tr>
        <th scope="col">INDEX</th>
        <th scope="col">NOM</th>
        <th scope="col">COEF</th>
        <th scope="col">MESSAGE</th>
        <th scope="col">NB JOURS</th>
        <th scope="col">ACTIONS</th>
        <th scope="col"><a type ="button" class="btn btn-dark " href="/subjectadd/">Ajouter une matière </a></th
    </tr>
    </thead>
    <tbody>
    <?php foreach ($aResponses as $response) { ?>
        <tr>
            <td><?php echo $response->getId(); ?></td>
            <td><?php echo $response->getName(); ?></td>
            <td><?php echo $response->getCoefficient(); ?></td>
            <td><?php echo $response->coefMessage(); ?></td>
            <td><?php echo $response->getDurationByDay(); ?></td>
            <td><a type="button" class="btn btn-outline-success" href="/subjectsingle/<?php echo $response->getId(); ?>"
                   title="modifier">Détails</a>
                <a type="button" class="btn btn-outline-dark" href="/subjectupdate/<?php echo $response->getId(); ?>"
                   title="editer">Editer</a>
                <a type="button" class="btn btn-outline-info" href="/subjectduplicate/<?php echo $response->getId(); ?>"
                   title="dupliquer">Dupliquer</a>
                <a type="button" class="btn btn-outline-danger" href="/subjectdelete/<?php echo $response->getId(); ?>"
                title="supprimer">Supprimer</a>
            </td>
            <td></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
