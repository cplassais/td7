<div class="container">
    <div class="row text-center">
        <form class="form row" action="/subjectupdate/" method="post">
            <p>
                <label for="name">Nom</label>
                <input type="text" id="name" name="name"
                       value="<?php if (!empty($aListSubjects) and !empty($aListSubjects['name'])): echo $aListSubjects['name']; endif; ?>"/>
            </p>
            <p>
                <label for="duree">Durée</label>
                <input type="text" id="duration" name="duration"
                       value="<?php if (!empty($aListSubjects) and !empty($aListSubjects['duration'])): echo $aListSubjects['duration']; endif; ?>"/>
            </p>
            <p>
                <label for="description">Description</label>
                <textarea type="text" id="description"
                          name="description"><?php if (!empty($aListSubjects) and !empty($aListSubjects['description'])): echo $aListSubjects['description']; endif; ?></textarea>
            </p>
            <p>
                <label for="coefficient">Coefficient</label>
                <input type="text" id="coefficient" name="coefficient"
                       value="<?php if (!empty($aListSubjects) and !empty($aListSubjects['coefficient'])): echo $aListSubjects['coefficient']; endif; ?>"/>
            </p>
            <p>
                <?php
                if (isset($aParamsURL[2]) and $aParamsURL[2] >= 0):
                    ?>
                    <input type="hidden" value="<?php echo $aParamsURL[2]; ?>" id="id" name="id"/>
                <?php
                endif;
                ?>
                <input type="submit" value="valider" id="valider" name="valider"/>
            </p>
        </form>
    </div>
</div>