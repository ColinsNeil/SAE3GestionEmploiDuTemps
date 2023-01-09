{extends file="layout.tpl"}

{block name=body}
<script src="./assets/js/tools.js"></script>
<script src="./assets/js/users.js"></script>
    <div class="container" id="accueil">
        <div class="content">
            <h1>Création d'Emploi du Temps</h1>
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

                <div id="btnControlCreateEDT">
                    <button type="button" class="btnCrontol" name="Sauvegarder">Sauvegarder</button>
                    <button type="button" class="btnCrontol" name="Publier">Publier</button>
                </div>
                <button type="button" id="btnAddCours" name="AjouterCours" onClick='OpenAddorUpdate("AddCours")'>Ajouter un cours</button>
                <div id="btnDownload"><button type="button" class="btnCrontol" name="Telecharger" onClick='downloadPDFWithBrowserPrint()'>Télécharger</button></div>
                <div id="select-classe">
                    <input type="week" id="week-select" name="week-select">
                    <select class="Selector" name="classe" required>
                        <option value="" disabled selected hidden>Classe</option>
                        {foreach from=$classe item=$row}
                            <option value={$row['num_classe']}>{$row['niveau']} {$row['groupe']}-{$row['demi_groupe']}</option>
                        {/foreach}
                    </select>
                </div>

                <div id="AddCours">
                    <h1 style="cursor:default;">Ajouter un cours</h1>
                    <span class="close-btn">
                        <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddorUpdate("AddCours")'></img></a>
                    </span>
                    <form action="" method="POST">
                        <select class="Selector" name="prof" required>
                            <option value="" disabled selected hidden>Enseignant</option>
                            {foreach from=$prof item=$row}
                                <option value={$row['num_util']}>{$row['nom']} {$row['prenom']}</option>
                            {/foreach}
                        </select>
                        <select class="Selector" name="matiere" required>
                            <option value="" disabled selected hidden>Matière</option>
                            {foreach from=$matiere item=$row}
                                <option value={$row['num_matiere']}>{$row['nom']}</option>
                            {/foreach}
                        </select>
                        <select class="Selector" name="salle" required>
                            <option value="" disabled selected hidden>Salle</option>
                            {foreach from=$salle item=$row}
                                <option value={$row['num_salle']}>{$row['nom']}</option>
                            {/foreach}
                        </select>
                        <p>Heure début</p>
                        <input type="time" id="heure-deb-cours" name="heure-deb-cours" min="08:00" max="20:00" required>
                        <p>Heure fin</p>
                        <input type="time" id="heure-fin-cours" name="heure-fin-cours" min="08:00" max="20:00" required>
                        <select class="Selector" name="jour" required>
                            <option value="" disabled selected hidden>Jour</option>
                            <option value="Lundi">Lundi</option>
                            <option value="Mardi">Mardi</option>
                            <option value="Mercredi">Mercredi</option>
                            <option value="Jeudi">Jeudi</option>
                            <option value="Vendredi">Vendredi</option>
                            <option value="Samedi">Samedi</option>
                        </select>
                        <input type="submit" name="submit" class="btn-connect" value="Ajouter">
                    </form>
                </div>
            </div>
        </div>
    </div>
{/block}