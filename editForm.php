<?php
require ('config.php');
global $conn;
$query = $conn->prepare("SELECT * FROM cars WHERE id=?");
$editId = $_REQUEST['edit'];
$query->bind_param('i', $editId);
$query->bind_result($id, $nimi, $kirjeldus, $year, $mileage, $price);
$query->execute();
?>

<form action="admin.php">
    <input type='hidden' name='edit' value='<?=$id?>'/>

    <table class="admin-table">
        <tr>
            <td><label for="mudel">Mudel</label></td>
            <td>
                <input type="text" name="mudel" id="mudel" value="<?=$nimi?>">
            </td>
        </tr>
        <tr>
            <td><label for="kirjeldus">Kirjeldus</label></td>
            <td>
                <input type="text" name="kirjeldus" id="kirjeldus" value="<?=$kirjeldus?>">
            </td>
        </tr>
        <tr>
            <td><label for="aasta">Aasta</label></td>
            <td>
                <input type="number" name="aasta" id="aasta" value="<?=$year?>">
            </td>
        </tr>
        <tr>
            <td><label for="labisoit">Läbisõit</label></td>
            <td>
                <input type="number" name="labisoit" id="labisoit" value="<?=$mileage?>">
            </td>
        </tr>
        <tr>
            <td><label for="hind">Hind</label></td>
            <td>
                <input type="text" value="0" name="hind" id="hind" value="<?=$price?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Uuenda">
            </td>
        </tr>
    </table>
</form>