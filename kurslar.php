<?php include('partials/_db.php') ?>
<?php include('partials/_header.php') ?>
<?php include('partials/_navbar.php') ?>

<div class="cointainer my-3">
    <div class="row">
        <div class="col-3">
            <?php include('partials/_listGroup.php') ?>
            <div class="col-9">
                <?php foreach ($kurslar as $kurs): ?>


                    <?php if ($kurs["onayliMi"]): ?>
                        <?php include('partials/_kurs.php') ?>
                    <?php endif; ?>

                <?php endforeach; ?>

            </div>

        </div>
    </div>
</div>
<?php include('partials/_footer.php') ?>