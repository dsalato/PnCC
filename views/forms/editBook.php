<main>
    <div class="choice">
        <div class="container">
            <h3>Добавление книги</h3>
        </div>
    </div>
    <p class="Error"><?= $message ?? ''; ?></p>

    <div class="forms">
        <div class="container">
            <form action="" method="post">
                <div class="form_inner">
                    <input name="csrf_token" type="hidden" value="<?= app()->auth::generateCSRF() ?>"/>
                    <div class="form_item">
                        <label for="name">Название</label>
                        <input id="name" value="<?= $books[0]->name?>" name="name" type="text">
                    </div>
                    <div class="form_item">
                        <label for="author">Автор</label>
                        <input id="author" value="<?= $books[0]->author?>" name="author" type="text">

                    </div>
                    <div class="form_item">
                        <label for="year">Год публикации</label>
                        <input id="year" value="<?= $books[0]->year?>" name="year" type="text">

                    </div>
                    <div class="form_item">
                        <label for="count">Количество</label>
                        <input id="count" value="<?= $books[0]->count?>" name="count" type="number">
                    </div>
                    <div class="form_item">
                        <label for="description">Анотация</label>
                        <textarea id="description"  name="description"
                                  rows="5" cols="30"><?= $books[0]->description?></textarea>
                    </div>

                    <button class="form_submit">Изменить</button>
                </div>
            </form>
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
    form{
        margin: 0 auto;
        max-width: 300px;
    }
    .form_inner{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        align-items: center;
        width: 200px;
        margin-bottom: 100px;

    }
    .form_item{
        margin: 10px 0 0 30px;
    }
    .form_item_photo{
        margin: 10px 0 0 10px;
    }
    .form_item_photo label {
        margin: 10px 0 0 20px;

    }
    input{
        padding: 5px 30px;
    }
    .form_item_date{
        padding: 5px 60px;
    }
    textarea{
        resize: none;
    }
    .form_submit{
        margin: 20px auto;
        margin-right: 5px;
        padding: 5px 30px;
        background-color: lightblue;
        border: 1px solid lightslategray;
    }
</style>
