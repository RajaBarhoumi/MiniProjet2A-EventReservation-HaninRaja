<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>MiniEvent - Admin</title>
    <link rel="stylesheet" href="../public/style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a href="index.php" style="color: #e27396; font-weight: bold; text-decoration: none; font-size: 1.5rem;">MiniEvent</a>
            </div>
            <ul>
                <li><a href="index.php?action=list">Événements</a></li>
                <?php if(isset($_SESSION['admin_id'])): ?>
                    <li><a href="index.php?action=admin_dashboard">Dashboard</a></li>
                    <li><a href="index.php?action=logout" style="border: 1px solid var(--accent-color);">Déconnexion</a></li>
                <?php else: ?>
                    <li><a href="index.php?action=admin_login">Connexion</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main class="container">