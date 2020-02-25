<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>flex box</title>
    <style>
    .container {
        height: 400px;
        width: 100%;
        border: 2px solid black;
        display: flex;
        /* flex-direction: row-reverse; */
        /* flex-wrap: wrap; */
        /* flex-wrap: wrap-reverse; */
        flex-flow: row-reverse wrap;
        /* justify-content: center;
            justify-content: space-between; */
        justify-content: space-evenly;
        justify-content: space-around;
        align-items: center;
        align-items: stretch;
        /* align-items: flex-end; */



    }

    .item {
        width: 100px;
        height: 100px;
        background-color: tomato;
        border: 2px solid green;
        margin: 10px;
        padding: 3px;

    }
    </style>
</head>

<body>
    <h1>this is flexbox</h1>
    <div class="container">
        <div class="item" id="item1">
            first box
        </div>

        <div class="item" id="item2">
            first2 box
        </div>

        <div class="item" id="item3">
            first3 box
        </div>

        <div class="item" id="item4">
            first4 box
        </div>

        <div class="item" id="item5">
            first5 box
        </div>

        <div class="item" id="item6">
            first6 box
        </div>
        </di v>
</body>

</html>