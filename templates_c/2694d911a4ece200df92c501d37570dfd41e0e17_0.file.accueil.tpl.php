<?php
/* Smarty version 4.2.1, created on 2023-01-04 11:21:52
  from 'C:\Users\fouqu\OneDrive\Bureau\Travail\S3\R3.01\www\EDT MANAGER\pages\accueil.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_63b56150906e06_68704454',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2694d911a4ece200df92c501d37570dfd41e0e17' => 
    array (
      0 => 'C:\\Users\\fouqu\\OneDrive\\Bureau\\Travail\\S3\\R3.01\\www\\EDT MANAGER\\pages\\accueil.tpl',
      1 => 1672830953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63b56150906e06_68704454 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_44884284263b56150873b69_82400338', 'body');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_44884284263b56150873b69_82400338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_44884284263b56150873b69_82400338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="container">
        <div class="content">
            <h1>Bienvenue sur la plateforme <span>EDT MANAGER !</span></h1>
            <section id="notification">
                <p class="empty-section">Aucune notification</p>
            </section>

            <section id="profil">
                <?php if ((isset($_smarty_tpl->tpl_vars['_SESSION']->value['user_id']))) {?>
                    <div id="profil-connect">
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
                        <button type="button" id="btnUnconnect" name="SeDeconnecter" onClick="window.location.href='/logout'">Se déconnecter</button>
                    </div>
                <?php } else { ?>
                    <div id="profil-unconnect">
                        <a href="/login" class="btn"><img src="../assets/images/login-icon.png" alt="Icone pour se connecter" id="login-button"></img></a>
                        <button type="button" id="btnConnect" name="SeConnecter" onClick="window.location.href='/login'">Se connecter</button>
                    </div>
                <?php }?>
            </section>
            
            <section id="actualite">
                <p class="empty-section">Aucune actualité</p>
            </section>
        </div>
    </div>
<?php
}
}
/* {/block 'body'} */
}
