{extends file="layout.tpl"}

{block name=body}
<script src="./assets/js/users.js"></script>
    <div class="container" id="accueil">
        <div class="content">
            <h1>Gestion des classes</h1>
            
            <table class="flatTableClasse">
                <tr class="titleTr">
                    <td id="titleTdClasse">CLASSES</td>
                    <td colspan="2"></td>
                    <td class="plusTd button" onClick='OpenAddorUpdate("AddClasse")'></td>
                </tr>
                <tr class="headingTr">
                    <td>NIVEAU</td>
                    <td>GROUPE</td>
                    <td>DEMI-GROUPE</td>
                    <td></td>
                </tr>
                {foreach from=$classe item=$row}
                <tr id="trClasse">
                    <td>{$row['niveau']}</td>
                    <td>{$row['groupe']}</td>
                    <td>{$row['demi_groupe']}</td>
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><a href='./classes?classedel={$row['num_classe']}'><img src="./assets/images/minus.png" alt="Supprimer" style="width:50%"/></a></span>
                        </div>  
                    </td>
                </tr>
                {foreachelse}
                <tr>
                    <td>Aucun élément</td><td>Aucun élément</td><td>Aucun élément</td><td>Aucun élément</td>
	 	        </tr>
                {/foreach}
            </table> 

            <div id="AddClasse">
                <h1 style="cursor:default;">Ajouter une classe</h1>
                <span class="close-btn">
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddorUpdate("AddClasse")'></img></a>
                </span>
                <form action="" method="POST">
                    <input type="text" name="niveau" placeholder="Niveau" style="text-transform: uppercase;" maxlength=10 required>
                    <input type="text" name="groupe" placeholder="Groupe" style="text-transform: uppercase;" maxlength=1 required>
                    <input type="number" name="demi-groupe" placeholder="Demi-groupe" required>
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