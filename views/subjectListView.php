
<table class="table table-striped text-center">
    <thead>
    <tr>
        <th scope="col">INDEX</th>
        <th scope="col">NOM</th>
        <th scope="col">ACTIONS</th>
        <th scope="col"><a type ="button" class="btn btn-dark " href="/subjectadd/">Ajouter une matière </a></th
    </tr>
    </thead>
    <tbody>
    <?php foreach ($aListSubjects as $subject => $value) { ?>
        <tr>
            <td><?php echo $value['id']; ?></td>
            <td><?php echo $value['name']; ?></td>
            <td><a type="button" class="btn btn-outline-success" href="/subjectsingle/<?php echo $value['id']; ?>"
                   title="modifier">Détails</a>
                <a type="button" class="btn btn-outline-dark" href="/subjectupdate/<?php echo $value['id']; ?>"
                   title="editer">Editer</a>
                <a type="button" class="btn btn-outline-info" href="/subjectduplicate/<?php echo $value['id']; ?>"
                   title="dupliquer">Dupliquer</a>
                <a type="button" class="btn btn-outline-danger" href="/subjectdelete/<?php echo $value['id']; ?>"
                title="supprimer">Supprimer</a>
            </td>
            <td></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
