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
                    <td class="plusTd button" onClick='AddUpdateUsers("AddEleve")'></td>
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
                            <span class="settingsIcon"><img src="./assets/images/pencil.png" alt="Modifier" onClick='AddUpdateUsers("UpdtEleve")' /></span>
                            <span class="settingsIcon"><a href='./users?identifiantdel={$row['identifiant']}'><img src="./assets/images/minus.png" alt="Supprimer" /></a></span>
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
                    <td class="plusTd button" onClick='AddUpdateUsers("AddEnseignant")'></td>
                </tr>
                <tr class="headingTr">
                    <td>IDENTIFIANT</td>
                    <td>NOM</td>
                    <td>PRENOM</td>
                    <td></td><td></td>
                </tr>
                {foreach from=$prof item=$row}
                <tr id="trEnseignant">
                    <td>{$row['identifiant']}</td>
                    <td>{$row['nom']}</td>
                    <td>{$row['prenom']}</td>
                    <td></td>
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><img src="./assets/images/pencil.png" alt="Modifier" onClick='AddUpdateUsers("UpdtEnseignant")'/></span>
                            <span class="settingsIcon"><a href='./users?identifiantdel={$row['identifiant']}'><img src="./assets/images/minus.png" alt="Supprimer" /></a></span>
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
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddUpdateUsers("AddEleve")'></img></a>
                </span>
                <form action="" method="POST">
                    <input type="text" name="identifiant" placeholder="Identifiant" style="text-transform: lowercase;" required>
                    <input type="text" name="nom" placeholder="Nom" style="text-transform: uppercase;" required>
                    <input type="text" name="prenom" placeholder="Prénom" style="text-transform: capitalize;" required>
                    <select class="Selector" name="classe" required>
                        <option value="" disabled selected hidden>Classe</option>
                        {foreach from=$classe item=$row}
                            <option value={$row['num_classe']}>{$row['niveau']} {$row['groupe']}-{$row['demi_groupe']}</option>
                        {/foreach}
                    </select>
                    <input type="password" name="mdp" placeholder="Mot de passe" required>
                    <input type="submit" name="submit" class="btn-connect" value="Ajouter">
                </form>
            </div>
            
            <div id="AddEnseignant">
                <h1 style="cursor:default;">Ajouter un enseignant</h1>
                <span class="close-btn">
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddUpdateUsers("AddEnseignant")'></img></a>
                </span>
                <form action="" method="POST">
                    <input type="text" name="identifiant" placeholder="Identifiant" style="text-transform: lowercase;" required>
                    <input type="text" name="nom" placeholder="Nom" style="text-transform: uppercase;" required>
                    <input type="text" name="prenom" placeholder="Prénom" style="text-transform: capitalize;" required>
                    <input type="password" name="mdp" placeholder="Mot de passe" required>
                    <input type="submit" name="submit" class="btn-connect" value="Ajouter">
                </form>
            </div>

            <div id="UpdtEleve">
                <h1 style="cursor:default;">Modifier l'étudiant</h1>
                <span class="close-btn">
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddUpdateUsers("UpdtEleve")'></img></a>
                </span>
                <form action="" method="POST">
                    <input type="text" name="identifiant" placeholder="Identifiant" style="text-transform: lowercase;" required>
                    <input type="text" name="nom" placeholder="Nom" style="text-transform: uppercase;" required>
                    <input type="text" name="prenom" placeholder="Prénom" style="text-transform: capitalize;" required>
                    <select class="Selector" name="classe" required>
                        <option value="" disabled selected hidden>Classe</option>
                        {foreach from=$classe item=$row}
                            <option value={$row['num_classe']}>{$row['niveau']} {$row['groupe']}-{$row['demi_groupe']}</option>
                        {/foreach}
                    </select>
                    <input type="password" name="mdp" placeholder="Mot de passe" required>
                    <input type="submit" name="submit" class="btn-connect" value="Modifier">
                </form>
            </div>

            <div id="UpdtEnseignant">
                <h1 style="cursor:default;">Modifier l'enseignant</h1>
                <span class="close-btn">
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddUpdateUsers("UpdtEnseignant")'></img></a>
                </span>
                <form action="" method="POST">
                    <input type="text" name="identifiant" placeholder="Identifiant" style="text-transform: lowercase;" required>
                    <input type="text" name="nom" placeholder="Nom" style="text-transform: uppercase;" required>
                    <input type="text" name="prenom" placeholder="Prénom" style="text-transform: capitalize;" required>
                    <input type="password" name="mdp" placeholder="Mot de passe" required>
                    <input type="submit" name="submit" class="btn-connect" value="Modifier">
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