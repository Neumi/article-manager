
<div class="w3-col m7" style="margin-top: 30px">
    <div class="w3-row-padding">
        <div class="w3-col m12">
            <div class="w3-card w3-round w3-white">

                <div class="w3-container w3-padding">
                    <span class="w3-tag w3-small w3-theme-d5 w3-right"><?php echo $article->artikelnummer; ?></span>
                    <h6 class="w3-opacity"><?php echo $article->bezeichnung; ?></h6>
                    <h7 class="w3-opacity"><?php echo $article->beschreibung; ?></h7>
                    <br>
                    <i class="w3-tag w3-small w3-theme-d5" style="margin-top: 10px">Ek Preis: <?php echo $article->einkaufspreis; ?> €</i>
                    <br>
                    <i class="w3-tag w3-small w3-theme-d5" style="margin-top: 10px">Vk Preis: <?php echo $article->verkaufspreis; ?> €</i>
                    <br>
                    <i class="w3-tag w3-small w3-theme-d1" style="margin-top: 10px"><?php echo $article->erstellungsdatum; ?> </i>
                    <br>
                    <br>

                    <a href='?controller=articles&action=deleteEntryById&id=<?php echo $article->id; ?>' class="w3-button w3-red w3-right"><i class="fa fa-trash"></i>  Delete</a>
                </div>

            </div>
        </div>
    </div>
</div>