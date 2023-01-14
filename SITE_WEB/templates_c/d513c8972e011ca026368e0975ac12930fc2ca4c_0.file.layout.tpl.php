<?php
/* Smarty version 4.2.1, created on 2023-01-13 09:01:13
  from 'D:\GitHub\SAE3GestionEmploiDuTemps\pages\layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63c11dd9901860_62819242',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd513c8972e011ca026368e0975ac12930fc2ca4c' => 
    array (
      0 => 'D:\\GitHub\\SAE3GestionEmploiDuTemps\\pages\\layout.tpl',
      1 => 1673262196,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63c11dd9901860_62819242 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="fr" and dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta name="description" content="Application de gestion des emplois du temps pour l'IUT d'Amiens - UPJV.">
        <meta name="keywords" content="Emploi du temps, IUT Amiens, UPJV"/>
        <meta name="author" content="Thomas FOUQUEROLLE, Loryne BALLESTER, Colins NEIL NIMALARAJ, Quentin LOISEL, Matheo BACHELIER">
        <meta name="copyright" content="Thomas FOUQUEROLLE, Loryne BALLESTER, Colins NEIL NIMALARAJ, Quentin LOISEL, Matheo BACHELIER">
        <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
        <title>EDT MANAGER</title>
        <link rel="icon" type="image/png" href="./assets/images/favicon-EDTMANAGER.png">
        <link rel="stylesheet" href="./assets/css/style.css">
    </head>

    <header>
        <div id="page">
            <div id="header" class="site-header">
                <div id="logo">
                    <a href="./"><img src="./assets/images/logo-EDTMANAGER.png" alt="Logo EDT MANAGER"></img></a>
                </div>
                <div class="wrap">
                    <div id="branding" role="banner">
                        <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['user_id']))) {?>
                            <div class="section-header">
                                <h2>Emploi du temps</h2>
                                <p><a href="cette-semaine">Cette semaine</a></p>
                                <p><a href="cette-semaine">Ensemble des semaines</a></p>
                                <?php if ($_smarty_tpl->tpl_vars['_SESSION']->value['role'] == 'prof' || $_smarty_tpl->tpl_vars['_SESSION']->value['role'] == 'admin') {?>
                                    <p><a href="saisir-dispo">Saisir disponibilités</a></p>
                                <?php }?>
                            </div>
                        <?php }?>

                        <div class="section-header">
                            <h2>Outils UPJV</h2>
                            <p><a href="https://pedag.u-picardie.fr/moodle/upjv/">Moodle</a></p>
                            <p><a href="https://sconotes.iut-amiens.fr/">Sconotes</a></p>
                            <p><a href="https://webmail.etud.u-picardie.fr/">Webmail</a></p>
                        </div>

                        <div class="section-header">
                            <h2>Informations</h2>
                            <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['user_id']))) {?>
                                <p><a href="liste-email">Les adresses mails</a></p>
                            <?php }?>
                            <p><a href="https://www.iut-amiens.fr/">Site IUT</a></p>
                        </div>

                        <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['user_id'])) && $_smarty_tpl->tpl_vars['_SESSION']->value['role'] == 'admin') {?>
                            <div class="section-header">
                                <h2>Espace administrateur</h2>
                                <p><a href="users">Gérer les utilisateurs</a></p>
                                <p><a href="classes">Gérer les classes</a></p>
                                <p><a href="salles">Gérer les salles</a></p>
                                <p><a href="matieres">Gérer les matières</a></p>
                                <p><a href="EDTedit">Créer un EDT</a></p>
                            </div>
                        <?php }?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <body>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97722737863c11dd98fe631_56239915', 'body');
?>
   
    </body>

    <footer>
        <div class="container">
            <p>Copyright &copy; <?php echo '<script'; ?>
>document.write(new Date().getFullYear());<?php echo '</script'; ?>
> - EDT MANAGER</p> 
        </div>
    </footer>
</html><?php }
/* {block 'body'} */
class Block_97722737863c11dd98fe631_56239915 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_97722737863c11dd98fe631_56239915',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
}
