<?php
/* Smarty version 4.2.1, created on 2023-01-13 21:37:34
  from 'D:\GitHub\SAE3GestionEmploiDuTemps\pages\EDTedit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c1cf1e1cdfb7_30258910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9be7d9350e9d49af7892b24408548228bbe58ad1' => 
    array (
      0 => 'D:\\GitHub\\SAE3GestionEmploiDuTemps\\pages\\EDTedit.tpl',
      1 => 1673645816,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c1cf1e1cdfb7_30258910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161641541463c1cf1e1c0a05_42285576', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_161641541463c1cf1e1c0a05_42285576 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_161641541463c1cf1e1c0a05_42285576',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 src="../assets/js/tools.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="../assets/js/users.js"><?php echo '</script'; ?>
>
    <div class="container" id="accueil">
        <div class="content">
            <h1>Création d'Emploi du Temps</h1>
            <div id="containerCreateEDT">

                <ul class="calendar weekly-byhour">
                    <li class="day mon">Lundi</li>
                    <li class="day tue">Mardi</li>
                    <li class="day wed">Mercredi</li>
                    <li class="day thu">Jeudi</li>
                    <li class="day fri">Vendredi</li>
                    <li class="day sat">Samedi</li>

                    <li class="time h08">8:00</li><li class="time h09">9:00</li><li class="time h10">10:00</li><li class="time h11">11:00</li>
                    <li class="time h12">12:00</li><li class="time h13">13:00</li><li class="time h14">14:00</li><li class="time h15">15:00</li>
                    <li class="time h16">16:00</li><li class="time h17">17:00</li><li class="time h18">18:00</li><li class="time h19">19:00</li>
                    <li class="time h20">20:00</li>

                    <li class="corner"></li>

                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                    <li></li><li></li><li></li><li></li><li></li><li></li><li></li><li></li>
                </ul>

                <div id="btnControlCreateEDT">
                    <button type="button" class="btnCrontol" name="Sauvegarder">Sauvegarder</button>
                    <button type="button" class="btnCrontol" name="Publier">Publier</button>
                </div>
                <button type="button" id="btnAddCours" name="AjouterCours" onClick='OpenAddorUpdate("AddCours")'>Ajouter un cours</button>
                <div id="btnDownload"><button type="button" class="btnCrontol" name="Telecharger" onClick='downloadPDFWithBrowserPrint()'>Télécharger</button></div>
                <div id="select-classe">
                    <input type="week" id="week-select" name="week-select">
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
                </div>

                <div id="AddCours">
                    <h1 style="cursor:default;">Ajouter un cours</h1>
                    <span class="close-btn">
                        <img src="../assets/images/cross.png" alt="Croix pour fermer la fenêtre" onClick='CloseAddorUpdate("AddCours")'></img></a>
                    </span>
                    <form action="/cours" method="POST">
                        <select class="Selector" name="prof" required>
                            <option value="" disabled selected hidden>Enseignant</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['prof']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['row']->value['num_util'];?>
><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
 <?php echo $_smarty_tpl->tpl_vars['row']->value['prenom'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <select class="Selector" name="matiere" required>
                            <option value="" disabled selected hidden>Matière</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['matiere']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['row']->value['num_matiere'];?>
><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <select class="Selector" name="salle" required>
                            <option value="" disabled selected hidden>Salle</option>
                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['salle']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                                <option value=<?php echo $_smarty_tpl->tpl_vars['row']->value['num_salle'];?>
><?php echo $_smarty_tpl->tpl_vars['row']->value['nom'];?>
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
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
</option>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </select>
                        <input type="date" id="date" name="date">
                        <p>Heure début</p>
                        <input type="time" id="heure-deb-cours" name="heure-deb-cours" min="08:00" max="20:00" required>
                        <p>Heure fin</p>
                        <input type="time" id="heure-fin-cours" name="heure-fin-cours" min="08:00" max="20:00" required>
                        <select class="Selector" name="jour" required>
                            <option value="" disabled selected hidden>Jour</option>
                            <option value="Lundi">Lundi</option>
                            <option value="Mardi">Mardi</option>
                            <option value="Mercredi">Mercredi</option>
                            <option value="Jeudi">Jeudi</option>
                            <option value="Vendredi">Vendredi</option>
                            <option value="Samedi">Samedi</option>
                        </select>
                        <input type="submit" name="submit" class="btn-connect" value="Ajouter">
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
