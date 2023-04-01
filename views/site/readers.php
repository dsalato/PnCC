<main>
    <div class="choice">
        <div class="container">
            <h3>Все читатели</h3>
            <div class="choice_inner">
                <select name="readers">
                    <option value="Гордость и предубеждение">Нужны связи</option>
                    <option value="Джейн Эйр">Нужны связи</option>
                    <option value="Тихий Дон">Нужны связи</option>
                    <option value="Война и мир">Нужны связи</option>
                </select>
                <p>Выбор книги</p>
            </div>
        </div>
    </div>

    <div class="books">
        <div class="container">
            <div class="books_inner">
                <?php
                foreach ($readers as $reader) {
                ?>
                <div class="book">
                    <div class="books_content">
                        <p><?= $reader->first_name ?> <?= $reader->last_name ?></p>
                        <p>Номер читательского билета: <?= $reader->id ?></p>
                        <p><?= $reader->number ?></p>
                    </div>
                    <div class="date">
                        <p>Дата выдачи <?= $date[0]->date_of_issue ?></p>
                        <p>Дата сдачи <?= $date[0]->delivery_date ?></p>
                    </div>
                </div>
                    <?php
                }
                ?>
            </div>
        </div>
    </div>
</main>
<style>
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
</style>