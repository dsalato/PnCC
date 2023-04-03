<div class="choice">
    <div class="container">
        <h3>Все книги</h3>
        <?php
        if (app()->auth::check()):
            ?>
            <div class="choice_inner">

                <select name="readers">
                    <?php
                    foreach ($readers as $reader) {
                    ?>
                    <option value="<?= $reader->last_name?>"><?= $reader->last_name?></option>
                        <?php
                    }
                    ?>
                </select>

                <p>Выбор читателя</p>
            </div>
        <?php
        endif;
        ?>
    </div>
</div>

<div class="books">
    <div class="container">
        <div class="books_inner">
            <?php
            foreach ($books as $book) {
                ?>
                <div class="books_item">
                    <div class="div"></div>
                    <div class="books_content">
                <?php
                if (app()->auth::check()):
                    ?>
                        <a href="<?= app()->route->getUrl("/editbook?id=$book->id") ?>">Редактировать</a>
                <?php
                endif;
                ?>
                        <p><?= $book->name ?></p>
                        <p><?= $book->author ?></p>
                        <p><?= $book->year ?></p>
                        <p class="book_text"><?= $book->description ?></p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<style>
    .div {
        width: 300px;
        height: 500px;
        border: 2px solid black;
    }

    .choice{
        margin: 30px 0;
    }
    h3{
        text-align: center;
        text-transform: uppercase;
    }
    .choice_inner{
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 30px 0;
    }
    select{
        margin-right: 40px;
    }

    /* books */
    .books_item {
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: 30px 0;
    }


    .books_content {
        position: relative;
        width: 50%;
    }
    .books_content a{
        position: absolute;
        top: 0;
        right: 0;
        z-index: 1;
        color: lightcoral;
    }
    img {
        width: 230px;
        margin-left: 100px;
    }

    .book_text {
        margin-top: 20px;
    }
</style>