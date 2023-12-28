<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    form {
        margin-top: 10px;
    }
    button {
        border-radius: 50px;
        box-shadow: 0;
        font-size: 30px;
    }
    div {
        border-radius: 50px;
        width: 90px;
        height: 50px;
        background-color: red;
        position: relative;
        animation: myfirst 10s linear 2s infinite alternate;
    }
    @keyframes myfirst {
        0% {background-color: red;left: 0px;top: 0px;}
        25% {background-color: yellow;left: 100px;top: 0px;}
        50% {background-color: blue;left: 400px;top: 200px;}
        75% {background-color: green;left: -400px;top: 200px;}
        100% {background-color: red;left: 0px;top: 0px;}
    }
    body {
        background-size: cover;
        background-image: url(https://i.pinimg.com/originals/b6/ee/ca/b6eecaa83cc89622f9a2597b65023ad4.gif);
        background-repeat: no-repeat;
    }
    b{
        color: aliceblue;
        font-size: 30px;
    }
    input{
        padding:15px;
    }
</style>
<body>
    <center>
        <b>
            <h1>{{ $head }}</h1>
            <h1>Insert Number</h1>
        </b>
        <form method="post" action="/my-route">
            @csrf
            <input type="text" name="myinput">
            <div>
                <button type="submit">Next</button>
            </div>
        </form>
    </center>
</body>

</html>
