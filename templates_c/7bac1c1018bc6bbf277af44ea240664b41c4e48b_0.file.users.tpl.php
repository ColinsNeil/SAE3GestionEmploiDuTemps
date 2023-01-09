<?php
/* Smarty version 4.2.1, created on 2023-01-09 09:09:44
  from 'C:\Users\fouqu\OneDrive\Bureau\Travail\S3\R3.01\www\EDT MANAGER\pages\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bbd9d89a5ac8_25127468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bac1c1018bc6bbf277af44ea240664b41c4e48b' => 
    array (
      0 => 'C:\\Users\\fouqu\\OneDrive\\Bureau\\Travail\\S3\\R3.01\\www\\EDT MANAGER\\pages\\users.tpl',
      1 => 1673252008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bbd9d89a5ac8_25127468 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64089307863bbd9d8993668_13890123', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_64089307863bbd9d8993668_13890123 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_64089307863bbd9d8993668_13890123',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="./assets/js/users.js"><?php echo '</script'; ?>
>
    <div class="container" id="accueil">
        <div class="content">
            <h1>Gestion des utilisateurs</h1>
            <table class="flatTable">
                <tr class="titleTr">
                    <td id="titleTdEleve">ETUDIANTS</td>
                    <td colspan="3"></td>
                    <td class="plusTd button" onClick='OpenAddorUpdate("AddEleve")'></td>
                </tr>
                <tr class="headingTr">
                    <td>IDENTIFIANT</td>
                    <td>NOM</td>
                    <td>PRENOM</td>
                    <td>CLASSE</td>
                    <td></td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['eleve']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr id="trEleve">
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['identifiant'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['prenom'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['niveau'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['groupe'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['demi_groupe'];?>
</td>
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><img src="./assets/images/pencil.png" alt="Modifier" onClick='OpenAddorUpdate("UpdtEleve")' /></span>
                            <span class="settingsIcon"><a href='./users?identifiantdel=<?php echo $_smarty_tpl->tpl_vars['row']->value['identifiant'];?>
'><img src="./assets/images/minus.png" alt="Supprimer" /></a></span>
                        </div>  
                    </td>
                </tr>
                <?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
                <tr>
                    <td>Aucun élément</td><td>Aucun élément</td><td>Aucun élément</td><td>Aucun élément</td><td></td>
	 	        </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table> 

            <table class="flatTable">
                <tr class="titleTr">
                    <td id="titleTdProf">ENSEIGNANTS</td>
                    <td colspan="3"></td>
                    <td class="plusTd button" onClick='OpenAddorUpdate("AddEnseignant")'></td>
                </tr>
                <tr class="headingTr">
                    <td>IDENTIFIANT</td>
                    <td>NOM</td>
                    <td>PRENOM</td>
                    <td></td><td></td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prof']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr id="trEnseignant">
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['identifiant'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['prenom'];?>
</td>
                    <td></td>
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><img src="./assets/images/pencil.png" alt="Modifier" onClick='OpenAddorUpdate("UpdtEnseignant")'/></span>
                            <span class="settingsIcon"><a href='./users?identifiantdel=<?php echo $_smarty_tpl->tpl_vars['row']->value['identifiant'];?>
'><img src="./assets/images/minus.png" alt="Supprimer" /></a></span>
                        </div>
                    </td>
                </tr>
                <?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
                <tr>
                    <td>Aucun élément</td><td>Aucun élément</td><td>Aucun élément</td><td></td><td></td>
	 	        </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table>

            <div id="AddEleve">
                <h1 style="cursor:default;">Ajouter un étudiant</h1>
                <span class="close-btn">
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddorUpdate("AddEleve")'></img></a>
                </span>
                <form action="" method="POST">
                    <input type="text" name="identifiant" placeholder="Identifiant" style="text-transform: lowercase;" required>
                    <input type="text" name="nom" placeholder="Nom" style="text-transform: uppercase;" required>
                    <input type="text" name="prenom" placeholder="Prénom" style="text-transform: capitalize;" required>
                    <select class="Selector" name="classe" required>
                        <option value="" disabled selected hidden>Classe</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['classe']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                            <option value=<?php echo $_smarty_tpl->tpl_vars['row']->value['num_classe'];?>
><?php echo $_smarty_tpl->tpl_vars['row']->value['niveau'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['groupe'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['demi_groupe'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <input type="password" name="mdp" placeholder="Mot de passe" required>
                    <input type="submit" name="submit" class="btn-connect" value="Ajouter">
                </form>
            </div>
            
            <div id="AddEnseignant">
                <h1 style="cursor:default;">Ajouter un enseignant</h1>
                <span class="close-btn">
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddorUpdate("AddEnseignant")'></img></a>
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
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddorUpdate("UpdtEleve")'></img></a>
                </span>
                <form action="" method="POST">
                    <input type="text" name="identifiant" placeholder="Identifiant" style="text-transform: lowercase;" required>
                    <input type="text" name="nom" placeholder="Nom" style="text-transform: uppercase;" required>
                    <input type="text" name="prenom" placeholder="Prénom" style="text-transform: capitalize;" required>
                    <select class="Selector" name="classe" required>
                        <option value="" disabled selected hidden>Classe</option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['classe']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                            <option value=<?php echo $_smarty_tpl->tpl_vars['row']->value['num_classe'];?>
><?php echo $_smarty_tpl->tpl_vars['row']->value['niveau'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['groupe'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['demi_groupe'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                    <input type="password" name="mdp" placeholder="Mot de passe" required>
                    <input type="submit" name="submit" class="btn-connect" value="Modifier">
                </form>
            </div>

            <div id="UpdtEnseignant">
                <h1 style="cursor:default;">Modifier l'enseignant</h1>
                <span class="close-btn">
                    <img src="./assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddorUpdate("UpdtEnseignant")'></img></a>
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
            <?php if ((isset($_smarty_tpl->tpl_vars['error']->value))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['error']->value, 'e');
$_smarty_tpl->tpl_vars['e']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['e']->value) {
$_smarty_tpl->tpl_vars['e']->do_else = false;
?>
                    <span class="error-msg"><?php echo $_smarty_tpl->tpl_vars['e']->value;?>
</span>
                <?php ob_start();
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>

            <?php }?>
        </div>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
