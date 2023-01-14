{extends file="layout.tpl"}

{block name=body}
<script src="./assets/js/users.js"></script>
    <div class="container" id="accueil">
        <div class="content">
            <h1>Gestion des salles</h1>
            
            <table class="flatTableClasse">
                <tr class="titleTr">
                    <td id="titleTdSalle">SALLES</td>
                    <td colspan="3"></td>
                    <td class="plusTd button" onClick='OpenAddorUpdate("AddSalle")'></td>
                </tr>
                <tr class="headingTr">
                    <td>NOM</td>
                    <td colspan="2"></td>
                    <td>CAPACITÉ</td>
                    <td></td>
                </tr>
                {foreach from=$salle item=$row}
                <tr id="trClasse">
                    <td>{$row['nom']}</td>
                    <td colspan="2"></td>
                    <td>{$row['capacite']}</td>
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><a href='./salles?salledel={$row['num_salle']}'><img src="./assets/images/minus.png" alt="Supprimer" style="width:50%"/></a></span>
                        </div>  
                    </td>
                </tr>
                {foreachelse}
                <tr>
                    <td>Aucun élément</td><td colspan="2"></td><td>Aucun élément</td>
	 	        </tr>
                {/foreach}
            </table> 

            <div id="AddSalle">
                <h1 style="cursor:default;">Ajouter une salle</h1>
                <span class="close-btn">
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddorUpdate("AddSalle")'></img></a>
                </span>
                <form action="" method="POST">
                    <input type="text" name="nom" placeholder="Nom" required>
                    <input type="number" name="capacite" placeholder="Capacité" required>
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