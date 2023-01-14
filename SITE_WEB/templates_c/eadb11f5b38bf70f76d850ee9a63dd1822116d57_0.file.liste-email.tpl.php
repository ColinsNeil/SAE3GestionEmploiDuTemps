<?php
/* Smarty version 4.2.1, created on 2023-01-13 20:02:47
  from 'D:\GitHub\SAE3GestionEmploiDuTemps\pages\liste-email.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c1b8e7d31ef9_55027805',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eadb11f5b38bf70f76d850ee9a63dd1822116d57' => 
    array (
      0 => 'D:\\GitHub\\SAE3GestionEmploiDuTemps\\pages\\liste-email.tpl',
      1 => 1673262196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c1b8e7d31ef9_55027805 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_104863260563c1b8e7d29357_27536163', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_104863260563c1b8e7d29357_27536163 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_104863260563c1b8e7d29357_27536163',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="./assets/js/tools.js"><?php echo '</script'; ?>
>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prof']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr id="trEmail">
                    <td style="padding-right: 50px;"><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['prenom'];?>
</td>
                    <td style="padding-right: 10px;" onClick='copyKeyboard()'>
                        <input type="text" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['prenom'];?>
-<?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
@u-picardie.fr" id="EmailText" disabled style="cursor:pointer; text-transform: lowercase;">
                    </td>
                </tr>
                <?php
}
if ($_smarty_tpl->tpl_vars['row']->do_else) {
?>
                <tr>
                    <td>Aucun élément</td><td>Aucun élément</td>
	 	        </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </table> 
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
