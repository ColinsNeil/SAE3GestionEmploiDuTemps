{extends file="layout.tpl"}

{block name=body}
<script src="./assets/js/copy.js"></script>
    <div class="container" id="accueil">
        <div class="content">
            <h1>Liste des emails</h1>
            <h2 id="Email-h2">Ci-dessous vous retrouverez l'ensemble des mails professionnels des enseignants.</h2>
            
            <table class="flatTableEmail">
                <tr class="titleTr">
                    <td id="titleTdEmail">EMAILS ENSEIGNANTS</td>
                    <td></td>
                </tr>
                <tr class="headingTrEmail">
                    <td>ENSEIGNANT</td>
                    <td>EMAIL</td>
                </tr>
                {foreach from=$prof item=$row}
                <tr id="trEmail">
                    <td style="padding-right: 50px;">{$row['nom']} {$row['prenom']}</td>
                    <td style="padding-right: 10px;" onClick='copyKeyboard()'>
                        <input type="text" value="{$row['prenom']}-{$row['nom']}@u-picardie.fr" id="EmailText" disabled style="cursor:pointer; text-transform: lowercase;">
                    </td>
                </tr>
                {foreachelse}
                <tr>
                    <td>Aucun élément</td><td>Aucun élément</td>
	 	        </tr>
                {/foreach}
            </table> 
        </div>
    </div>
{/block}