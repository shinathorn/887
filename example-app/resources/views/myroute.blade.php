<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .scroll {
        width: 500px;
        height: 480px;
        border: 1px solid rgb(255, 255, 255);
        color: rgb(255, 255, 255);
        overflow: auto;
        font-family:Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
        font-size: 25px;
        background-image: url(https://i.pinimg.com/originals/b0/7b/5b/b07b5bbfc32b4958810d59a79cd3aac9.gif);
        background-size: 50%;

    }
    body{
        background-image: url(https://i.pinimg.com/originals/0f/d3/fc/0fd3fcc6ba35a9015aa7f0017d96a079.gif);
        background-size: cover;
        background-repeat: no-repeat;
    }
    h1{
        height: 70px;
        width: 400px;
        background-color: rgb(226, 220, 220);
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 40px;
        color:rgb(155, 88, 218);
    }
    input{
        padding: 10px;
    }
</style>

<body>
    <center>
        <h1>Multiplication Table x{{ $myinput }}</h1>
        <div class="scroll">
            <?php
            $myinput = $_POST['myinput'];
            $number = 24;
            if (!is_numeric($myinput)) {
                $myinput = 1;
            }
            ?>
            <table>
                <?php
                for ($i = 1; $i <= $number; $i++) {
                    echo '<tr><td>' . $myinput . ' x ' . $i . ' = ' . $myinput * $i . '</td></tr>';
                }
                ?>
            </table>
        </div>
        <br>
        <form method="post" action="/my-route">
            @csrf
            <input type="text" name="myinput">
            <button type="submit">Next</button>
        </form>
        <br>
        <form method="post" action="/my-page">
            @csrf
            <button type="submit">Back</button>
        </form>
    </center>
</body>

</html>
