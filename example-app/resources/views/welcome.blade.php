{{-- <!DOCTYPE html>
<html>

<head>
    <title>Javascript 101</title>
</head>

<body>
    <h1>Before</h1>
    <h1 id = "myh1">
        <h1>Prepend</h1>Javascript<h1>Append</h1>
    </h1>
    <h1>After</h1>
    <button onclick="alert('Hello World!')">Click me!</button>
    <input type="text" id="my_number" value="10">
    <button onclick="myfunction()">submit number</button>
    <br>
    <button onclick="myfunvtion2()">submit my function2</button>
    <br>
    <table>
        <thead>
            <tr>
                <td>#</td>
                <td>result</td>
            </tr>
        </thead>
        <tbody id = "my_tbody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            console.log("Hello World! - doucment.ready")
            console.log($('#myh1').text())
            console.log($('#my_number').val())
            $('#myh1').text("Javascript 101")
            $('#my_number').val(100)
        });

        function myfunvtion2(){
            //$($('#my_table').childen()[1].html("<tr><td>1</td><td>test</td><tr>"))
        }

        function myfunction() {
            let my_nmuber = parseInt($('#my_number').val())
            for (let i = 0; i < my_number; i++) {
                $('#myh1').after(`<h1 class="my_gen_number"> ${i} </h1>`)
            }
            console.log(document.getElementById('my_number').value);
            console.log('Click submit number')
            setTimeout(function() {
                $('my_gen_number').each(function(val, index) {
                    $(val).remove();
                    //val.remove()
                })
            }, 2000);
        }
        console.log("Hello World!");
        let myval;
        myval = '10';
        myval2 = '2';
        console.log(myval, myval2)
        myval3 = parseInt(myval) + myval2
        console.log(myval3)
        myval3 = myval - myval2
        console.log(myval3)
        myval3 = myval * myval2
        console.log(myval3)
        myval3 = myval / myval2
        console.log(myval3)
    </script>
    <script>
        let myval4 = [1, 2, 3, 4];

        myval4[5] = 5;
        myval4[6] = [6, 5, 4, 5]
        console.log(myval4)
        for (i = 0; i < myval4.lenght; i++) {
            console.log("in forEach", myval4[i])
        }
        myval4.forEach(function(value, index) {
            console.log("in forEach", value, index)
        });

        console.log(document.getElementById('myh1').innerHTML)
        /*
        //php
        forEach($myval4 as $index => $value){

        }
        //
        */
    </script>
</body>

</html> --}}

<!DOCTYPE html>

<head>
    <title>Javascript 101</title>
</head>
<style>
    h1 {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #f8d175cb;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    button {
        font-size: 15px;
        padding: 5px;
        border-radius: 20px;
    }

    #submit {
        background-color: #79d9b6;
    }

    #submit:hover {
        background-color: #3e8e41;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }

    #clear {
        background-color: #f25555;
    }

    #clear:hover {
        background-color: #fe0000;
        box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
    }

    .scroll {
        width: 361px;
        height: 498px;
        border: 1px solid black;
        border-radius: 20px;
        overflow: auto;
        font-size: 20px;
    }

    label:focus {

        border: 3px solid #555;
    }

    th {
        background-color: #f8d175cb;
        color:black;
        border-radius: 20px;
    }

    body {
        background-color: antiquewhite;
    }

    center {
        max-width: 800px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
</style>

<body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <center>
        <h1>ตารางสูตรคูณ</h1>
        <div>
            <label for="inputnum">กรุณากรอกเลข :</label>
            <input type="number" id = "my_number">
            <button id = "submit">ตกลง</button>
            <button id = "clear">ยกเลิก</button>
        </div>
        <br>
        <div class="scroll">
            <div id="my_tbody">
            </div>
    </center>
    <script>
        $(document).ready(function() {
            $("#submit").click(function() {
                let number = $("#my_number").val();
                let result = "<tr><th> สูตรคูณแม่ " + number + "</th></tr>";

                for (let i = 1; i <= 24; i++) {
                    result += "<tr><td><br>" + number + " x " + i + " = " + (number * i) + "</td></tr>";
                }
                $("#my_tbody").html(result);
            });

            $("#clear").click(function() {
                cleartable();
            });

            function cleartable() {
                $("#my_number").val("");
                $("#my_tbody").empty();
            }
        });
    </script>
    </div>
</body>

</html>
