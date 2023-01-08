{extends file="layout.tpl"}

{block name=body}
    <div class="container" id="accueil">
        <div class="content">
            <h1>Création d'Emploi du Temps</h1>
            <div id="containerCreateEDT">

                <ul class="calendar weekly-byhour">
                    <!--  DATA:      CATEGORY                         DAY              START  /  END     EVENT DETAILS  -->
                    <!-- <li class="event work"      style="grid-column:   mon;   grid-row:  h08   /  h11;  ">Finish this calendar</li>
                    <li class="event work"      style="grid-column:   wed;   grid-row:  h10   /  h19;  ">Master the grid!</li>
                    <li class="event personal"  style="grid-column:   fri;   grid-row:  h16   /  h23;  ">After work drinks</li>
                    <li class="event personal"  style="grid-column:   tue;   grid-row:  h18   /  h20;  ">Soccer game</li> -->

                    <li class="day mon">Lundi</li>
                    <li class="day tue">Mardi</li>
                    <li class="day wed">Mercredi</li>
                    <li class="day thu">Jeudi</li>
                    <li class="day fri">Vendredi</li>
                    <li class="day sat">Samedi</li>

                    <li class="time h08">8:00</li><li class="time h09">9:00</li><li class="time h10">10:00</li><li class="time h11">11:00</li>
                    <li class="time h12">12:00</li><li class="time h13">13:00</li><li class="time h14">14:00</li><li class="time h15">15:00</li>
                    <li class="time h16">16:00</li><li class="time h17">17:00</li><li class="time h18">18:00</li><li class="time h19">19:00</li>
                    <li class="time h20">20:00</li>

                    <li class="corner"></li>

                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                </ul>

                <div id="btnControlCreateEDT">
                    <button type="button" class="btnCrontol" name="Sauvegarder">Sauvegarder</button>
                    <button type="button" class="btnCrontol" name="Publier">Publier</button>
                </div>
                <button type="button" id="btnAddCours" name="AjouterCours">Ajouter un cours</button>
                <div id="btnDownload"><button type="button" class="btnCrontol" name="Telecharger">Télécharger</button></div>
            </div>
        </div>
    </div>
{/block}