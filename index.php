<?php require_once "form.php" ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style lang="css">
        .reg-form{
            text-align: center;
            width: 100%;
        }
    </style>

</head>
<body>

<div class="reg-form" style="text-align: center;margin-left: auto;margin-right: auto;width: 20em">
    <form action="./" method="post" style="float:left;">
        <!— <h1>Авторизация</h1>
        <div style="clear:both; text-align:right; padding:">
            <span style="float: left"> Логин:</span>
            <input type ="text" name="login" /> <br>
        </div>


        <div style="clear:both; text-align:right;">
            <span style="float: left"> Пароль: </span>
            <input type ="password" name="password" /> <br>
        </div>

        <div style="clear:both; text-align:right;">
            <span style="float: left"> Имя: </span>
            <input type ="text" name="name" /> <br>
        </div>

        <div style="clear:both; text-align:right;">
            <span style="float: left"> Фамилия: </span>
            <input type ="text" name="surname" /> <br>
        </div>


        <div style="clear:both; text-align:center;">
            <button type ="submit" style="clear:both; text-align:center;">
                Ввести
            </button>
        </div>

    </form>

</div>

<?php $validate = valid($_POST) ?>

<?php if (!empty($validate['error']) && $validate['error']):?>
    <?php foreach ($validate['messages'] as $message): ?>
        <p style ="color: white">
            <?=$message?>
        </p>
    <?php endforeach;?>
<?php endif;?>



<?php if (!empty($validate['success']) && $validate['success']):?>

    <?php foreach ($validate['messages'] as $message): ?>
        <p style ="color: green">
            <?=$message?>
        </p>
    <?php endforeach;?>
<?php endif; ?>
<style>
    body {
        background: #0000FF url(https://media.tenor.com/images/a7296c2d53d494b60e7ab479b845db0c/tenor.gif);
        color: #000000;
    }

</style>

</body>
</html>