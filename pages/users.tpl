{extends file="layout.tpl"}

{block name=body}
<script src="./assets/js/users.js"></script>
    <div class="container" id="accueil">
        <div class="content">
            <h1>Gestion des utilisateurs</h1>
            <table class="flatTable">
                <tr class="titleTr">
                    <td id="titleTdEleve">ETUDIANTS</td>
                    <td colspan="3"></td>
                    <td class="plusTd button" onClick='AddEleve()'></td>
                </tr>
                <tr class="headingTr">
                    <td>IDENTIFIANT</td>
                    <td>NOM</td>
                    <td>PRENOM</td>
                    <td>CLASSE</td>
                    <td></td>
                </tr>
                {foreach from=$eleve item=$row}
                <tr id="trEleve">
                    <td>{$row['identifiant']}</td>
                    <td>{$row['nom']}</td>
                    <td>{$row['prenom']}</td>
                    <td>{$row['niveau']} {$row['groupe']}-{$row['demi_groupe']}</td>
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><img src="./assets/images/pencil.png" alt="Modifier" /></span>
                            <span class="settingsIcon"><img src="./assets/images/minus.png" alt="Supprimer" /></span>
                        </div>  
                    </td>
                </tr>
                {foreachelse}
                <tr>
                    <td>Aucun élément</td><td>Aucun élément</td><td>Aucun élément</td><td>Aucun élément</td><td></td>
	 	        </tr>
                {/foreach}
            </table>

            <table class="flatTable">
                <tr class="titleTr">
                    <td id="titleTdProf">ENSEIGNANTS</td>
                    <td colspan="3"></td>
                    <td class="plusTd button" onClick='AddEnseignant()'></td>
                </tr>
                <tr class="headingTr">
                    <td>IDENTIFIANT</td>
                    <td>NOM</td>
                    <td>PRENOM</td>
                    <td></td>
                    <td></td>
                </tr>
                {foreach from=$prof item=$row}
                <tr>
                    <td>{$row['identifiant']}</td>
                    <td>{$row['nom']}</td>
                    <td>{$row['prenom']}</td>
                    <td></td>
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><img src="./assets/images/pencil.png" alt="Modifier" /></span>
                            <span class="settingsIcon"><img src="./assets/images/minus.png" alt="Supprimer" /></span>
                        </div>  
                    </td>
                </tr>
                {foreachelse}
                <tr>
                    <td>Aucun élément</td><td>Aucun élément</td><td>Aucun élément</td><td></td><td></td>
	 	        </tr>
                {/foreach}
            </table>

            <div id="AddEleve">
                <h1 style="cursor:default;">Ajouter un étudiant</h1>
                <span class="close-btn">
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='closeAddEleve()'></img></a>
                </span>
                <form action="" method="POST">
                    <input type="text" name="identifiant" placeholder="Identifiant">
                    <input type="text" name="nom" placeholder="Nom">
                    <input type="text" name="prenom" placeholder="Prénom">
                    <input type="text" name="classe" placeholder="Classe">
                    <input type="password" name="mdp" placeholder="Mot de passe">
                    <input type="submit" name="submit" class="btn-connect" value="Ajouter">
                </form>
            </div>
            
            <div id="AddEnseignant">
                <h1 style="cursor:default;">Ajouter un enseignant</h1>
                <span class="close-btn">
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='closeAddEnseignant()'></img></a>
                </span>
                <form action="" method="POST">
                    <input type="text" name="identifiant" placeholder="Identifiant">
                    <input type="text" name="nom" placeholder="Nom">
                    <input type="text" name="prenom" placeholder="Prénom">
                    <input type="password" name="mdp" placeholder="Mot de passe">
                    <input type="submit" name="submit" class="btn-connect" value="Ajouter">
                </form>
            </div>
        </div>
    </div>
{/block}