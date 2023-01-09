{extends file="layout.tpl"}

{block name=body}
<script src="./assets/js/tools.js"></script>
    <div class="container" id="accueil">
        <div class="content">
            <h1>Emploi du temps de cette semaine</h1>
            <div id="containerCreateEDT">

                <ul class="calendar weekly-byhour">
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

                <div id="btnDownloadCetteSemaine"><button type="button" id="btnCrontolCetteSemaine" name="Telecharger" onClick='downloadPDFWithBrowserPrint()'>Télécharger</button></div>
            </div>
        </div>
    </div>
{/block}