{extends file="layout.tpl"}

{block name=body}
<script src="./assets/js/users.js"></script>
    <div class="container" id="accueil">
        <div class="content">
            <h1>Saisie des disponibilités</h1>
            
            <table class="flatTableClasse">
                <tr class="titleTr">
                    <td id="titleTdClasse">DISPONIBILITÉS</td>
                    <td colspan=""></td>
                    {if $_SESSION['role'] == 'prof'}
                        <td></td>
                        <td class="plusTd button" onClick='OpenAddorUpdate("AddDispo")'></td>
                    {else}
                        <td colspan="3"></td>
                    {/if}
                </tr>
                <tr class="headingTr">
                    {if $_SESSION['role'] == 'admin'}
                        <td>ENSEIGNANT</td>
                    {/if}
                    <td>DATE</td>
                    <td>HEURE DEBUT</td>
                    <td>HEURE FIN</td>
                    {if $_SESSION['role'] == 'prof'}
                        <td></td>
                    {/if}
                </tr>
                {foreach from=$dispo item=$row}
                <tr id="trClasse">
                    {if $_SESSION['role'] == 'admin'}
                        <td>{$row['nom']} {$row['prenom']}</td>
                    {/if}
                        <td>{$row['date']}</td>
                        <td>{$row['heure_deb']}</td>
                        <td>{$row['heure_fin']}</td>
                    {if $_SESSION['role'] == 'prof'}
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><a href='./saisir-dispo?dispoprofdel={$row['prof']}&dispodatedel={$row['date']}&dispoheuredebdel={$row['heure_deb']}'><img src="./assets/images/minus.png" alt="Supprimer" style="width:50%"/></a></span>
                        </div>  
                    </td>
                    {/if}
                </tr>
                {foreachelse}
                <tr>
                    <td>Aucun élément</td><td>Aucun élément</td><td>Aucun élément</td><td></td>
	 	        </tr>
                {/foreach}
            </table> 

            <div id="AddDispo">
                <h1 style="cursor:default;">Ajouter une disponibilité</h1>
                <span class="close-btn">
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddorUpdate("AddDispo")'></img></a>
                </span>
                <form action="" method="POST">
                        <input type="date" id="date-dispo" name="date-dispo">
                        <p>Heure début</p>
                        <input type="time" id="heure-deb-cours" name="heure-deb-cours" min="08:00" max="20:00" required>
                        <p>Heure fin</p>
                        <input type="time" id="heure-fin-cours" name="heure-fin-cours" min="08:00" max="20:00" required>
                    <input type="submit" name="submit" class="btn-connect" value="Ajouter">
                </form>
            </div>

            <div id="error">
            {if isset($error)}
                {foreach from=$error item=$e}
                    <span class="error-msg">{$e}</span>
                {{/foreach}}
            {/if}
        </div>
        </div>
    </div>
{/block}