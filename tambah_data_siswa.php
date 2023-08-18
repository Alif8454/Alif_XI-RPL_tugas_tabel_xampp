<h3>Tambah Data Siswa</h3>
    <title>Form Data Siswa</title>
            <form method="post" action="">
                <table>
                    <tr>
                        <td>Nama</td>
                        <td><input type="text" id="nama" name="nama" required><br><br></td>
                        
                        <td>NIS</td>
                        <td><input type="text" id="nis" name="nis" required><br><br></td>
                        
                        <td>Saldo</td>
                        <td><input type="number" id="saldo" name="saldo" required><br><br>  </td>
                        
                        <td></td>
                        <td><input type="submit" value="Simpan" name="proses"></td>
                    </tr>
                </table>
            </form>
<?php
    include "koneksi.php";

    if (isset($_POST['proses'])){
        mysqli_query($koneksi, "insert into data_bank_mini_smkn6jakarta set
        Nama = '$_POST[Nama]',
        NIS =   '$_POST[NIS]',
        Saldo = '$_POST[Saldo]' ");
    }
        echo "Data siswa baru telah tersimpan";
    

?>