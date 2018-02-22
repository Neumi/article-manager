<p>Add a new Article: </p>

<div>
    <form action="?controller=articles&action=addEntryToDb" method="post" accept-charset="UTF-8">
        <input type="text" name="artikelnummer" placeholder="Artikelnummer"><br><br>
        <input type="text" name="bezeichnung" placeholder="Bezeichnung" required><br><br>
        <input type="text" name="beschreibung" placeholder="Beschreibung" required><br><br>
        <input type="text" name="einkaufspreis" placeholder="Einkaufspreis" required><br><br>
        <input type="text" name="verkaufspreis" placeholder="Verkaufspreis" required><br><br>
        <input type="submit" value="Submit" class="w3-green w3-button">
    </form>
</div>