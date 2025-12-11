<?php
require ('config.php');
global $conn;

$editId = $_REQUEST['edit'];

$query = $conn->prepare("SELECT id, model, description, year, mileage, price, image FROM cars WHERE id=?");
$query->bind_result($id, $model, $description, $year, $mileage, $price, $image);
$query->bind_param('i', $editId);
$query->execute();
$query->fetch();
?>

<form action="admin.php">
    <input type='hidden' name='edit' value='<?=$id?>'/>

    <table class="admin-table">
        <tr>
            <td><label for="mudel">Mudel</label></td>
            <td>
                <input type="text" name="mudel" id="mudel" value="<?=$model?>">
            </td>
        </tr>
        <tr>
            <td><label for="kirjeldus">Kirjeldus</label></td>
            <td>
                <input type="text" name="kirjeldus" id="kirjeldus" value="<?=$description?>">
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
                <input type="text" name="hind" id="hind" value="<?=$price?>">
            </td>
        </tr>
        <tr>
            <td><label for="pilt">Pildi link</label></td>
            <td>
                <input type="text" name="pilt" id="pilt" value="<?=$image?>">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Uuenda">
            </td>
        </tr>
    </table>
</form>