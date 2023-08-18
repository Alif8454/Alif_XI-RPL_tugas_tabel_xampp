<!DOCTYPE html>
<html>
<head>
    <title>Data Bank Mini SMKN 6 Jakarta</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid black;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Data Bank Mini SMKN 6 Jakarta</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>NIS</th>
            <th>Saldo</th>
        </tr>
        <?php
        include "koneksi.php";
        $no=1;
        $ambildata = mysqli_query($koneksi, "select * from data_bank_mini_smkn6jakarta")
        ?>
    </table>
</body>
</html>
