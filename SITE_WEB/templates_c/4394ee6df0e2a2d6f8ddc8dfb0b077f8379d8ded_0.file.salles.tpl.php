<?php
/* Smarty version 4.2.1, created on 2023-01-13 19:50:37
  from 'D:\GitHub\SAE3GestionEmploiDuTemps\pages\salles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c1b60da1b749_22190618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4394ee6df0e2a2d6f8ddc8dfb0b077f8379d8ded' => 
    array (
      0 => 'D:\\GitHub\\SAE3GestionEmploiDuTemps\\pages\\salles.tpl',
      1 => 1673216217,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c1b60da1b749_22190618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_39597789463c1b60d825e95_39912859', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_39597789463c1b60d825e95_39912859 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_39597789463c1b60d825e95_39912859',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="./assets/js/users.js"><?php echo '</script'; ?>
>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['salle']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr id="trClasse">
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
</td>
                    <td colspan="2"></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['capacite'];?>
</td>
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><a href='./salles?salledel=<?php echo $_smarty_tpl->tpl_vars['row']->value['num_salle'];?>
'><img src="./assets/images/minus.png" alt="Supprimer" style="width:50%"/></a></span>
                        </div>  
                    </td>
                </tr>
                <?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
                <tr>
                    <td>Aucun élément</td><td colspan="2"></td><td>Aucun élément</td>
	 	        </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
