<div class="choice">
    <div class="container">
        <h3>Все книги</h3>
        <?php
        if (app()->auth::check()):
            ?>
        <form method="post">
            <div class="choice_inner">
                <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                <select name="library_card_id">
                    <?php
                    foreach ($readers as $reader) {
                    ?>
                    <option value="<?= $reader->id?>"><?= $reader->last_name?></option>
                        <?php
                    }
                    ?>
                </select>

                <p>Выбор читателя</p>
                <button>Найти</button>
            </div>
        </form>
        <?php
        endif;
        ?>
    </div>
</div>

<div class="books">
    <div class="container">
        <div class="books_inner">
            <?php
            foreach ($books as $key=>$book) {
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
                        <?php
                        if(!is_null($bookq)):
                            ?>
                        <p class="book_data">Дата выдачи: <?= $bookq[$key]->date_of_issue?></p>
                        <p class="book_data">Дата сдачи: <?= $bookq[$key]->delivery_date?></p>
                        <?php
                        endif;
                        ?>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</div>

<style>
    .book_data{
        margin-top: 20px;
    }
    .div {
        width: 300px;
        height: 500px;
        border: 2px solid black;
    }
    button{
        padding: 3px 30px;
        margin-left: 40px;
        background-color: lightblue;
        border: 1px solid darkslategrey;
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