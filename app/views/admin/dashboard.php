<?php include_once '../app/views/partials/header.php'; ?>
<div class="admin-header">
    <h1>Tableau de Bord Admin</h1>
    <a href="index.php?action=add_event" class="btn-add">+ Ajouter un événement</a>
</div>

<table class="admin-table">
    <thead>
        <tr>
            <th>Titre de l'événement</th>
            <th>Date prévue</th>
            <th>Actions de gestion</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($events) && is_array($events)): ?>
            <?php foreach ($events as $event): ?>
                <tr>
                    <td><strong><?php echo htmlspecialchars($event['title']); ?></strong></td>
                    <td><?php echo date('d/m/Y', strtotime($event['date'])); ?></td>
                    <td class="action-links">
                        <a href="index.php?action=edit_event&id=<?php echo $event['id']; ?>" class="link-edit">✏️ Modifier</a>
                        
                        <a href="index.php?action=view_reservations&id=<?php echo $event['id']; ?>" class="link-view">👥 Inscriptions</a>
                        
                        <a href="index.php?action=delete_event&id=<?php echo $event['id']; ?>" 
                           class="link-delete" 
                           onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet événement ?')">🗑️ Supprimer</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="3" style="text-align: center; padding: 30px; color: #999;">
                    Aucun événement n'a été créé pour le moment.
                </td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<?php include_once '../app/views/partials/footer.php'; ?>