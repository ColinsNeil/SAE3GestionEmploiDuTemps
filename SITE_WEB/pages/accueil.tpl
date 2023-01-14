{extends file="layout.tpl"}

{block name=body}
    <div class="container" id="accueil">
        <div class="content">
            <h1>Bienvenue sur la plateforme EDT MANAGER !</h1>
            <section id="notification">
                <p class="empty-section">Aucune notification</p>
            </section>

            <section id="profil">
                {if isset($_SESSION['user_id'])}
                    <div id="profil-connect">
                        <p>Identifiant : <span>{$_SESSION['user_id']}</span></p>
                        {if isset($_SESSION['nom']) && isset($_SESSION['prenom'])}
                            <p>Nom : <span>{$_SESSION['nom']}</span></p>
                            <p>Prénom : <span>{$_SESSION['prenom']}</span></p>
                        {/if}
                        {if isset($_SESSION['niveau'])}
                            <p>Classe : <span>{$_SESSION['niveau']} {$_SESSION['groupe']}-{$_SESSION['demi-groupe']}</span></p>
                        {/if}
                        <button type="button" id="btnUnconnect" name="SeDeconnecter" onClick="window.location.href='logout'">Se déconnecter</button>
                    </div>
                {else}
                    <div id="profil-unconnect">
                        <a href="login" class="btn"><img src="./assets/images/login-icon.png" alt="Icone pour se connecter" id="login-button"></img></a>
                        <button type="button" id="btnConnect" name="SeConnecter" onClick="window.location.href='login'">Se connecter</button>
                    </div>
                {/if}
            </section>
            
            <section id="actualite">
                <p class="empty-section">Aucune actualité</p>
            </section>
        </div>
    </div>
{/block}