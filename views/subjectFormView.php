<div class="container">
    <div class="row text-center">
        <form class="form row" action="<?php echo ($actionForm) ?>" method="post">
            <p>
                <label for="name">Nom</label>
                <input type="text" id="name" name="name"
                       value="<?php if (!empty($oSubjects) and !empty($oSubjects->getName())): echo $oSubjects->getName(); endif; ?>"/>
            </p>
            <p>
                <label for="duree">Durée</label>
                <input type="text" id="duration" name="duration"
                       value="<?php if (!empty($oSubjects) and !empty($oSubjects->getDuration())): echo $oSubjects->getDuration(); endif; ?>"/>
            </p>
            <p>
                <label for="description">Description</label>
                <textarea type="text" id="description"
                          name="description"><?php if (!empty($oSubjects) and !empty($oSubjects->getDescription())): echo ($oSubjects->getDescription()); endif; ?></textarea>
            </p>
            <p>
                <label for="coefficient">Coefficient</label>
                <input type="text" id="coefficient" name="coefficient"
                       value="<?php if (!empty($oSubjects) and !empty($oSubjects->getCoefficient())): echo $oSubjects->getCoefficient(); endif; ?>"/>
            </p>
            <p>
                <?php
                if (isset($aParamsURL[2]) and $aParamsURL[2] >= 0):
                    ?>
                    <input type="hidden" value="<?php echo $aParamsURL[2]; ?>" id="id" name="id"/>
                <?php
                endif;
                ?>
                <input type="submit"
                       class="btn btn-secondary"
                       value="valider"
                       id="valider"
                       name="valider"/>
                <a type ="button" class="btn btn-secondary " href="/subjectlist/">Annuler </a>
            </p>
        </form>
    </div>
</div>