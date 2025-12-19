<?php include_once '../app/views/partials/header.php'; ?>
<div class="container">
    <a href="index.php?action=admin_dashboard" class="btn-back">← Annuler et retourner au tableau de bord</a>

    <div class="form-card">
        <h2><?php echo isset($event) ? "✏️ Modifier l'événement" : "➕ Ajouter un nouvel événement"; ?></h2>

        <form action="index.php?action=save_event" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="id" value="<?php echo $event['id'] ?? ''; ?>">

            <div class="form-group">
                <label>Titre de l'événement :</label>
                <input type="text" name="title" value="<?php echo $event['title'] ?? ''; ?>" placeholder="Ex: Masterclass PHP" required>
            </div>

            <div class="form-group">
                <label>Lieu :</label>
                <input type="text" name="location" value="<?php echo $event['location'] ?? ''; ?>" placeholder="Ex: Salle de conférence A" required>
            </div>

            <div class="form-group">
                <label>Date et heure :</label>
                <input type="datetime-local" name="date"
                    value="<?php echo isset($event['date']) ? date('Y-m-d\TH:i', strtotime($event['date'])) : ''; ?>" required>
            </div>

            <div class="form-group">
                <label>Description détaillée :</label>
                <textarea
                    name="description"
                    rows="10"
                    style="width: 100%;"
                    placeholder="Décrivez l'événement en quelques lignes..."><?php echo $event['description'] ?? ''; ?></textarea>
            </div>

            <div class="form-group">
                <label>Nombre de places disponibles :</label>
                <input type="number" name="seats" value="<?php echo $event['seats'] ?? ''; ?>" min="1" required>
            </div>

            <div class="form-group">
                <label>Image de l'événement :</label>
                <input type="file" name="image" accept="image/*">
            </div>

            <?php if (!empty($event['image'])): ?>
                <div class="form-group">
                    <p>Image actuelle :</p>
                    <img src="uploads/events/<?php echo htmlspecialchars($event['image']); ?>"
                        style="max-width: 200px; border-radius: 8px;">
                </div>
            <?php endif; ?>

            <button type="submit" class="btn-save">
                <?php echo isset($event) ? "Mettre à jour" : "Créer l'événement"; ?>
            </button>
        </form>
    </div>
</div>
<?php include_once '../app/views/partials/footer.php'; ?>