<?php
/* Smarty version 4.2.1, created on 2023-01-13 19:59:39
  from 'D:\GitHub\SAE3GestionEmploiDuTemps\pages\saisir-dispo.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c1b82b5204b3_18285037',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23611f2a9e80fdd472d77502228e226b3e6290ff' => 
    array (
      0 => 'D:\\GitHub\\SAE3GestionEmploiDuTemps\\pages\\saisir-dispo.tpl',
      1 => 1673262196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c1b82b5204b3_18285037 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_168932602963c1b82b50cf03_61812232', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_168932602963c1b82b50cf03_61812232 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_168932602963c1b82b50cf03_61812232',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="./assets/js/users.js"><?php echo '</script'; ?>
>
    <div class="container" id="accueil">
        <div class="content">
            <h1>Saisie des disponibilités</h1>
            
            <table class="flatTableClasse">
                <tr class="titleTr">
                    <td id="titleTdClasse">DISPONIBILITÉS</td>
                    <td colspan=""></td>
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['role'] == 'prof') {?>
                        <td></td>
                        <td class="plusTd button" onClick='OpenAddorUpdate("AddDispo")'></td>
                    <?php } else { ?>
                        <td colspan="3"></td>
                    <?php }?>
                </tr>
                <tr class="headingTr">
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['role'] == 'admin') {?>
                        <td>ENSEIGNANT</td>
                    <?php }?>
                    <td>DATE</td>
                    <td>HEURE DEBUT</td>
                    <td>HEURE FIN</td>
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['role'] == 'prof') {?>
                        <td></td>
                    <?php }?>
                </tr>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['dispo']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr id="trClasse">
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['role'] == 'admin') {?>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['prenom'];?>
</td>
                    <?php }?>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['heure_deb'];?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['heure_fin'];?>
</td>
                    <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['role'] == 'prof') {?>
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><a href='./saisir-dispo?dispoprofdel=<?php echo $_smarty_tpl->tpl_vars['row']->value['prof'];?>
&dispodatedel=<?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
&dispoheuredebdel=<?php echo $_smarty_tpl->tpl_vars['row']->value['heure_deb'];?>
'><img src="./assets/images/minus.png" alt="Supprimer" style="width:50%"/></a></span>
                        </div>  
                    </td>
                    <?php }?>
                </tr>
                <?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
                <tr>
                    <td>Aucun élément</td><td>Aucun élément</td><td>Aucun élément</td><td></td>
	 	        </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
