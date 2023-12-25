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
                width: 361px;
                height: 498px;
                border: 1px solid black;
                color: white;
                overflow: auto;
                font-family:Georgia, 'Times New Roman', Times, serif;
                font-size: 20px;
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