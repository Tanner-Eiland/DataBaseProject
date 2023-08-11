
<?php include("view/header.php") ?>




    <section id = "list" class = "list">
        <header>
            <h1> Card List</h1>
            <form action ="." method="get" id= "list_header_select" class="list__header__select">
                <input type="hidden" name ="action" value="home_page">
                <select name="set_id" required>
                <option value=0>View All Sets</option>
                <?php foreach ($sets as $set) : ?>
                    <?php if ($card_set_id == $set['set_id']) { ?>
                        <option value="<?= $set['set_id'] ?>" selected>
                        <?php } else { ?>
                        <option value="<?= $set['set_id'] ?>">
                        <?php } ?>
                        <?= $set['mtg_set'] ?>
                        </option>
                <?php endforeach; ?>
                </select>

                <select name="type_id" required>
                <option value=NULL>View All Types</option>
                <?php foreach ($types as $type) : ?>
                    <?php if ($card_type_id == $type['type_id']) { ?>
                        <option value="<?= $type['type_id'] ?>" selected>
                        <?php } else { ?>
                        <option value="<?= $type['type_id'] ?>">
                        <?php } ?>
                        <?= $type['type'] ?>
                        </option>
                    <?php endforeach; ?>
                </select>

                <select name="color_id" required>
                    <option value=NULL>View All Colors</option>
                <?php foreach ($colors as $color) : ?>
                    <?php if ($card_color_id == $color['color_id']) { ?>
                        <option value="<?= $color['color_id'] ?>" selected>
                        <?php } else { ?>
                        <option value="<?= $color['color_id'] ?>">
                        <?php } ?>
                        <?= $color['Color'] ?>
                        </option>
                <?php endforeach; ?>
                </select>
                <br>
                <br>
                <label>Mana Cost: </label>
                <input type="text" id="cmc" name="cmc">
                </select>
                <button class="add-button bold">Go</button>
            </form>
        </header>
        <?php if($cardsBy) { ?>
            <?php foreach ($cardsBy as $card ) : ?>
                <div class="list__row">
                    <div class="list__item">
                        <p> 
                            <img src= "<?= $card['picture'] ?>" alt="<?= $card['Name'] ?>" width=225 height= 300><br>
                            <?= $card['Name'] ?><br> Converted Mana Cost: <?= $card['CMC'] ?><br> Color: <?= $card['Color'] ?><br>
                            <?= $card['type'] ?><br> <?= $card['Description'] ?><br><br>
                        </p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php } else { ?>
            <br>
            <?php if (!$cardsBy) { ?>
                <p> No cards exist with these specifications </p>
            <?php } else { ?>
                <p> No cards exist yet. </p>
            <?php } ?>
            <br>
            <?php } ?>
    </section>
    <p><a href=".?action=image_scan">Image Scan</a></p>
    <?php include('view/footer.php'); ?>