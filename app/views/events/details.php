<?php
if (!isset($event) || !is_array($event)) {
    echo "<div class='container'><p>Événement non trouvé.</p></div>";
    return; 
}
?>
<?php include_once '../app/views/partials/header.php'; ?>

<div class="event-details-container">
    <div class="event-details">
        <h1><?= htmlspecialchars($event['title'] ?? 'Titre indisponible') ?></h1>
        <p class="description"><strong>Description : </strong><br><?= nl2br(htmlspecialchars($event['description'] ?? 'Description indisponible')) ?></p>
        
        <div class="event-info">
            <p><strong>📅 Date :</strong><br> <?= htmlspecialchars($event['date'] ?? 'Date indisponible') ?></p>
            <p><strong>📍 Lieu :</strong><br> <?= htmlspecialchars($event['location'] ?? 'Lieu indisponible') ?></p>
        </div>
    </div>


    <h3>Réserver votre place</h3>
    <form action="index.php?action=reserve" method="POST">
        <input type="hidden" name="event_id" value="<?= htmlspecialchars($event['id'] ?? '') ?>">

        <label for="name">Nom complet :</label>
        <input type="text" id="name" name="name" placeholder="Ex: bob " required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="bob@example.com" required>

        <label for="phone">Téléphone :</label>
        <input type="text" id="phone" name="phone" placeholder="Ex: +216 22 333 444" required>

        <button type="submit">Confirmer la réservation</button>
    </form>
</div>
<?php include_once '../app/views/partials/footer.php'; ?>