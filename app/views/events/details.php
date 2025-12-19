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
            <div class="info-item">
                <p><strong>📅 Date :</strong><br> <?= htmlspecialchars($event['date']) ?></p>
                <div id="countdown-timer" class="timer-style"></div>
            </div>

            <div class="info-item">
                <p><strong>📍 Lieu :</strong><br> <?= htmlspecialchars($event['location']) ?></p>
            </div>
        </div>
    </div>

    <h3>Réserver votre place</h3>
    <form action="index.php?action=reserve" method="POST" onsubmit="return validateFinalReservation()">
        <input type="hidden" name="event_id" value="<?= htmlspecialchars($event['id'] ?? '') ?>">

        <label for="name">Nom complet :</label>
        <input type="text" id="name" name="name" placeholder="Ex: Mohamed Ali" required>

        <label for="email">Email :</label>
        <input type="email" id="email" name="email" placeholder="mohamed@example.com" required>

        <label for="phone">Téléphone :</label>
        <input type="text" id="phone" name="phone" placeholder="Ex: 22333444" required>

        <button type="submit">Confirmer la réservation</button>
    </form>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        setupPhoneValidation();
        const eventDate = "<?= $event['date'] ?>";
        startCountdown(eventDate, "countdown-timer");

        const urlParams = new URLSearchParams(window.location.search);
        if (urlParams.has('success')) {
            showToast("✅ Réservation effectuée avec succès !");
            const cleanUrl = window.location.href.split('&success')[0];
            window.history.replaceState({}, document.title, cleanUrl);
        }

        if (urlParams.has('error')) {
            showToast("❌ Une erreur est survenue.", "error");
        }
    });
</script>

<?php include_once '../app/views/partials/footer.php'; ?>