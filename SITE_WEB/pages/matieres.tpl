{extends file="layout.tpl"}

{block name=body}
<script src="./assets/js/users.js"></script>
    <div class="container" id="accueil">
        <div class="content">
            <h1>Gestion des matières</h1>
            
            <table class="flatTableClasse">
                <tr class="titleTr">
                    <td id="titleTdMatiere">MATIERES</td>
                    <td colspan="3"></td>
                    <td class="plusTd button" onClick='OpenAddorUpdate("AddMatiere")'></td>
                </tr>
                <tr class="headingTr">
                    <td>NOM</td>
                    <td colspan="4"></td>
                </tr>
                {foreach from=$matiere item=$row}
                <tr id="trClasse">
                    <td>{$row['nom']}</td>
                    <td colspan="3"></td>
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><a href='./matieres?matieredel={$row['num_matiere']}'><img src="./assets/images/minus.png" alt="Supprimer" style="width:50%"/></a></span>
                        </div>  
                    </td>
                </tr>
                {foreachelse}
                <tr>
                    <td>Aucun élément</td><td colspan="3">
	 	        </tr>
                {/foreach}
            </table> 

            <div id="AddMatiere">
                <h1 style="cursor:default;">Ajouter une matière</h1>
                <span class="close-btn">
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddorUpdate("AddMatiere")'></img></a>
                </span>
                <form action="" method="POST">
                    <input type="text" name="nom" placeholder="Nom" required>
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