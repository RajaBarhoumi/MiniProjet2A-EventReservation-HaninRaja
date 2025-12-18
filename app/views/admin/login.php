<?php include_once '../app/views/partials/header.php'; ?>
<div class="login-container">
    <div class="login-card">
        <h2>Administration</h2>
        
        <form action="index.php?action=admin_login" method="POST" style="box-shadow: none; padding: 0;">
            <div class="form-group">
                <label>Nom d'utilisateur</label>
                <input type="text" name="username" placeholder="Identifiant" required>
            </div>
            
            <div class="form-group">
                <label>Mot de passe</label>
                <input type="password" name="password" placeholder="mot de passe" required>
            </div>
            
            <button type="submit" class="btn-login">
                Se connecter
            </button>
        </form>
        
        <p style="text-align: center; margin-top: 1rem; font-size: 0.8rem; color: #aaa;">
            Accès réservé au personnel autorisé
        </p>
    </div>
</div>
<?php include_once '../app/views/partials/footer.php'; ?>