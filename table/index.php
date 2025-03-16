<?php

?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HTML Table</title>
    <style>
        body {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
            width: 100vw;
            height: 100vh;
            display: flex;
            justify-content: center;
            overflow-x: hidden;
            align-items: flex-start;
        }

        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: center;
            border: 1px solid black;
        }

        th,
        td {
            padding: 10px;
            border-bottom: 1px solid black;
        }

        th {
            background-color: #f4f4f4;
        }

        .combined-header {
            background-color: #ff0000;
            color: #fff;
        }
    </style>
</head>

<body>

    <table>
        <tr>
            <th colspan="3" class="combined-header">Combined Header</th>
        </tr>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
        </tr>
        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
            <td>Data 3</td>
        </tr>
        <tr>
            <th colspan="3" class="combined-header">Combined Oyehoye</th>
        </tr>
        <tr>
            <th>Column 1</th>
            <th>Column 2</th>
            <th>Column 3</th>
        </tr>
        <tr>
            <td>Data 1</td>
            <td>Data 2</td>
            <td>Data 3</td>
        </tr>
    </table>

</body>