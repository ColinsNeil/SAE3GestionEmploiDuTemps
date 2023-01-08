<?php
/* Smarty version 4.2.1, created on 2023-01-08 20:40:57
  from 'C:\Users\fouqu\OneDrive\Bureau\Travail\S3\R3.01\www\EDT MANAGER\pages\EDTedit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63bb2a599f1fc0_90516293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd2c3da21d09758e17360c6bfb0bc8178a1988528' => 
    array (
      0 => 'C:\\Users\\fouqu\\OneDrive\\Bureau\\Travail\\S3\\R3.01\\www\\EDT MANAGER\\pages\\EDTedit.tpl',
      1 => 1673210454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63bb2a599f1fc0_90516293 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_190047331463bb2a599f18b7_07353941', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_190047331463bb2a599f18b7_07353941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_190047331463bb2a599f18b7_07353941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container" id="accueil">
        <div class="content">
            <h1>Création d'Emploi du Temps</h1>
            <div id="containerCreateEDT">

                <ul class="calendar weekly-byhour">
                    <!--  DATA:      CATEGORY                         DAY              START  /  END     EVENT DETAILS  -->
                    <!-- <li class="event work"      style="grid-column:   mon;   grid-row:  h08   /  h11;  ">Finish this calendar</li>
                    <li class="event work"      style="grid-column:   wed;   grid-row:  h10   /  h19;  ">Master the grid!</li>
                    <li class="event personal"  style="grid-column:   fri;   grid-row:  h16   /  h23;  ">After work drinks</li>
                    <li class="event personal"  style="grid-column:   tue;   grid-row:  h18   /  h20;  ">Soccer game</li> -->

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
                <button type="button" id="btnAddCours" name="AjouterCours">Ajouter un cours</button>
                <div id="btnDownload"><button type="button" class="btnCrontol" name="Telecharger">Télécharger</button></div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
