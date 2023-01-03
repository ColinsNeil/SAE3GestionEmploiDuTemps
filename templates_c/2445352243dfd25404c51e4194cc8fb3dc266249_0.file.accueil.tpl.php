<?php
/* Smarty version 4.2.1, created on 2023-01-03 22:16:10
  from 'D:\GitHub\SAE3GestionEmploiDuTemps\pages\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63b4a92a985420_84330999',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2445352243dfd25404c51e4194cc8fb3dc266249' => 
    array (
      0 => 'D:\\GitHub\\SAE3GestionEmploiDuTemps\\pages\\accueil.tpl',
      1 => 1672784165,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b4a92a985420_84330999 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_43339335563b4a92a97e7a8_61275395', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_43339335563b4a92a97e7a8_61275395 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_43339335563b4a92a97e7a8_61275395',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="content">
            <h1>Bienvenue sur la plateforme <span>EDT MANAGER !</span></h1>
            <section id="notification">
                <p>Aucune notification</p>
            </section>

            <section id="profil">
                <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['user_id']))) {?>
                    <p>Identifiant : <span><?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['user_id'];?>
</span></p>
                    <p>Nom : <span><?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['nom'];?>
</span></p>
                    <p>Prénom : <span><?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['prenom'];?>
</span></p>
                    <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['classe']))) {?>
                        <p>Classe : <span><?php echo $_smarty_tpl->tpl_vars['_SESSION']->value['classe'];?>
</span></p>
                    <?php }?>
                    <a href="/logout" class="btn">logout</a>
                <?php } else { ?>
                    <a href="/login" class="btn"><img src="../assets/images/login-icon.png" alt="Icone pour se connecter" id="login-button"></img></a>
                    <button type="button" id="btnConnect" name="SeConnecter" onClick="window.location.href='/login'">Se connecter</button>
                <?php }?>
            </section>
            
            <section id="actualite">
                <p>Aucune actualité</p>
            </section>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
