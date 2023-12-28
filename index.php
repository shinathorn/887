<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="w3.css" />
</head>

<body>
    <center>
        <?php $multi_x = 2; ?>
        <header>
            <h1>ตารางสูตรคูณแม่
                <?php echo $multi_x ?>
            </h1>
        </header>
        <style>
            .scroll {
                background-image: url(https://i.pinimg.com/originals/f0/47/95/f04795cef907929f142f270c3ab5218a.gif);
                width: 361px;
                height: 498px;
                border: 1px solid black;
                color: white;
                overflow: auto;
                font-family: Georgia, 'Times New Roman', Times, serif;
                font-size: 20px;
            }

            body {
                background-image: url(https://64.media.tumblr.com/a606b8ee6f960875fae7d03c57ef8aff/e304ae7feb788a98-0e/s1280x1920/e9b3bc50db540138f128254bf50c53230693ea18.gif);
                background-position: center;
                background-size: cover;
                background-repeat: no-repeat;
            }
        </style>
        <div class="scroll">
            <tr>
                <?php
                if (!empty($multi_x)) {
                    for ($i = 1; $i <= 24; $i++) {
                        echo "<k>";
                        echo "$multi_x x {$i} = " . ($multi_x * $i) . "</br><br>";
                        echo "</k>";
                    }
                }
                ?>
        </div>
    </center>
</body>

</html>