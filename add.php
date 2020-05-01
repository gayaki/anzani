<html>
<body>
    <a href="index.php">Penambahan Anggota Pekerja</a>
    <br/><br/>

    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr> 
                <td>alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr> 
                <td>noktp</td>
                <td><input type="text" name="noktp"></td>
            </tr>
            <tr> 
                <td>Jabatan</td>
                <td><input type="text" name="jabatan"></td>
            </tr>
            
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Add"></td>
            </tr>
        </table>
    </form>

    <?php

    if(isset($_POST['Submit'])) {
        $name = $_POST['name'];
        $alamat = $_POST['alamat'];
        $noktp = $_POST['noktp'];
        $jabatan = $_POST ['jabatan'];

        include_once("config.php");


        $result = mysqli_query($mysqli, "INSERT INTO datapekerja(name,alamat,noktp,jabatan) VALUES('$name','$alamat','$noktp','$jabatan')");


        echo "User added successfully. <a href='index.php'>View datapekerja</a>";
    }
    ?>
</body>
</html> 