<?php include_once '../app/views/partials/header.php'; ?>
<div class="admin-container">
    <a href="index.php?action=admin_dashboard" class="btn-back">← Retour au tableau de bord</a>

    <div class="admin-header">
        <h1>
            Inscriptions : <?= htmlspecialchars($event['title']); ?>
            <span class="count-badge"><?= count($reservations); ?></span>
        </h1>
    </div>

    <table class="admin-table">
        <thead>
            <tr>
                <th>👤 Nom de l'inscrit</th>
                <th>📧 Email</th>
                <th>📞 Téléphone</th>
                <th>📅 Date d'inscription</th>
            </tr>
        </thead>
        <tbody>
            <?php if (!empty($reservations)): ?>
                <?php foreach ($reservations as $res): ?>
                    <tr>
                        <td><strong><?= htmlspecialchars($res['name']); ?></strong></td>
                        <td>
                            <a href="mailto:<?= htmlspecialchars($res['email']); ?>" style="color: black;t-decoration: none;">
                                <?= htmlspecialchars($res['email']); ?>
                            </a>
                        </td>
                        <td><?= htmlspecialchars($res['phone']); ?></td>
                        <td>
                            <small><?= date('d/m/Y H:i', strtotime($res['created_at'])); ?></small>
                        </td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="4" style="text-align:center; padding: 50px; color: #999;">
                        Aucune réservation enregistrée pour cet événement pour le moment.
                    </td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>
<?php include_once '../app/views/partials/footer.php'; ?>