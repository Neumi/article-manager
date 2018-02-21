<p>Add a new Article: </p>

<div>
    <form action="?controller=articles&action=addEntryToDb" method="post" accept-charset="UTF-8">
        <input type="text" name="artikelnummer" placeholder="artikelnummer"><br><br>
        <input type="text" name="bezeichnung" placeholder="bezeichnung" required><br><br>
        <input type="text" name="beschreibung" placeholder="beschreibung" required><br><br>
        <input type="text" name="einkaufspreis" placeholder="einkaufspreis" required><br><br>
        <input type="text" name="verkaufspreis" placeholder="verkaufspreis" required><br><br>
        <input type="submit" value="Submit" class="w3-green w3-button">
    </form>
</div>