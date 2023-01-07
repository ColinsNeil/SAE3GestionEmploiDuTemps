<?php
/* Smarty version 4.2.1, created on 2023-01-07 21:42:39
  from 'C:\Users\fouqu\OneDrive\Bureau\Travail\S3\R3.01\www\EDT MANAGER\pages\classes.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63b9e74fccaa17_04893640',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '261f077811ed3a6c88fdd79413556e6378480190' => 
    array (
      0 => 'C:\\Users\\fouqu\\OneDrive\\Bureau\\Travail\\S3\\R3.01\\www\\EDT MANAGER\\pages\\classes.tpl',
      1 => 1673127680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b9e74fccaa17_04893640 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_212289267963b9e74fcbf748_27587031', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_212289267963b9e74fcbf748_27587031 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_212289267963b9e74fcbf748_27587031',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="./assets/js/users.js"><?php echo '</script'; ?>
>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['classe']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr id="trClasse">
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['niveau'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['groupe'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['demi_groupe'];?>
</td>
                    <td class="controlTd">
                        <div class="settingsIcons">
                            <span class="settingsIcon"><a href='./classes?classedel=<?php echo $_smarty_tpl->tpl_vars['row']->value['num_classe'];?>
'><img src="./assets/images/minus.png" alt="Supprimer" style="width:50%"/></a></span>
                        </div>  
                    </td>
                </tr>
                <?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
                <tr>
                    <td>Aucun élément</td><td>Aucun élément</td><td>Aucun élément</td><td>Aucun élément</td>
	 	        </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
