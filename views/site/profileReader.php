<div class="choice">
    <div class="container">
        <h3><?= $readers[0]->first_name?> <?= $readers[0]->last_name?></h3>
    </div>
</div>

<div class="books">
    <div class="container">
        <div class="books_inner">
            <?php
            foreach ($readers[0]->readBook as $book) {
                ?>
                <div class="books_item">
                    <div class="div"></div>
                    <div class="books_content">
                        <p><?= $book->book->name ?></p>
                        <p><?= $book->book->author ?></p>
                        <p><?= $book->book->year ?></p>
                        <p class="book_text"><?= $book->book->description ?></p>
                        <p class="book_data">Дата выдачи : <?= $book->date_of_issue ?></p>
                        <p class="book_data">Дата сдачи : <?= $book->delivery_date ?></p>
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
    .books_item{
        display: flex;
        justify-content: space-around;
        align-items: center;
        margin: 30px 0;
    }
    .book{
        border: 1px solid lightgray;
        width: 500px;
        margin: 20px auto;
        padding: 20px 30px;

    }
    .date{
        text-align: right;
    }
    .books_content{
        width: 50%;
    }
    img{
        width: 230px;
        margin-left: 100px;
    }
    .book_text{
        margin-top: 20px;
    }
    .book_data{
        margin-top: 20px;
    }
</style>