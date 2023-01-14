<?php
/* Smarty version 4.2.1, created on 2023-01-03 22:19:17
  from 'D:\GitHub\SAE3GestionEmploiDuTemps\pages\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63b4a9e553c1a1_66712997',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2978748cf55a970f4ba0c767fa9f46851b311496' => 
    array (
      0 => 'D:\\GitHub\\SAE3GestionEmploiDuTemps\\pages\\login.tpl',
      1 => 1672784329,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b4a9e553c1a1_66712997 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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

    <body>
        <div id="container-connection">
            <h1 style="cursor:default;">Connexion</h1>
            <span class="close-btn">
                <a href="/"><img src="../assets/images/cross.png" alt="Croix pour fermer la fenêtre de connexion"></img></a>
            </span>
            <form action="" method="POST">
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
                <input type="text" name="identifiant" placeholder="Identifiant">
                <input type="password" name="mdp" placeholder="Mot de passe">
                <input type="submit" name="submit" class="btn-connect" value="Se connecter">
            </form>
        </div>
    <body>
<html><?php }
}
