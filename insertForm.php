<form action="admin.php">
    <input type='hidden' name='insert' value='jah'/>

    <table class="admin-table">
        <tr>
            <td><label for="mudel">Mudel</label></td>
            <td>
                <input type="text" name="mudel" id="mudel">
            </td>
        </tr>
        <tr>
            <td><label for="kirjeldus">Kirjeldus</label></td>
            <td>
                <input type="text" name="kirjeldus" id="kirjeldus">
            </td>
        </tr>
        <tr>
            <td><label for="aasta">Aasta</label></td>
            <td>
                <input type="number" value="2025" name="aasta" id="aasta">
            </td>
        </tr>
        <tr>
            <td><label for="labisoit">Läbisõit</label></td>
            <td>
                <input type="number" value="0" name="labisoit" id="labisoit">
            </td>
        </tr>
        <tr>
            <td><label for="hind">Hind</label></td>
            <td>
                <input type="text" value="0" name="hind" id="hind">
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" value="Lisa">
            </td>
        </tr>
    </table>
</form>