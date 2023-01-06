<?php
/* Smarty version 4.2.1, created on 2023-01-06 20:14:48
  from 'C:\Users\fouqu\OneDrive\Bureau\Travail\S3\R3.01\www\EDT MANAGER\pages\users.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63b88138e3a6f3_82714188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7bac1c1018bc6bbf277af44ea240664b41c4e48b' => 
    array (
      0 => 'C:\\Users\\fouqu\\OneDrive\\Bureau\\Travail\\S3\\R3.01\\www\\EDT MANAGER\\pages\\users.tpl',
      1 => 1673036058,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b88138e3a6f3_82714188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105133352863b88138e30bc0_33944580', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_105133352863b88138e30bc0_33944580 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_105133352863b88138e30bc0_33944580',
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
                    <td class="plusTd button" onClick='AddEleve()'></td>
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
                            <span class="settingsIcon"><img src="./assets/images/pencil.png" alt="Modifier" /></span>
                            <span class="settingsIcon"><img src="./assets/images/minus.png" alt="Supprimer" /></span>
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
                    <td class="plusTd button" onClick='AddEnseignant()'></td>
                </tr>
                <tr class="headingTr">
                    <td>IDENTIFIANT</td>
                    <td>NOM</td>
                    <td>PRENOM</td>
                    <td></td>
                    <td></td>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prof']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['identifiant'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['prenom'];?>
</td>
                    <td></td>
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><img src="./assets/images/pencil.png" alt="Modifier" /></span>
                            <span class="settingsIcon"><img src="./assets/images/minus.png" alt="Supprimer" /></span>
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
<?php
}
}
/* {/block 'body'} */
}
