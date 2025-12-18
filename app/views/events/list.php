<?php include_once '../app/views/partials/header.php'; ?>
<section class="welcome-section">
    <h1 style="text-align: center; color:#f557ae; margin-bottom: 40px;">
        📅 Événements à venir
    </h1>
    
    <div class="event-container">
        <?php if (!empty($events)): ?>
            <?php foreach ($events as $event): ?>
                <div class="event-card">
                    <h2><?php echo htmlspecialchars($event['title']); ?></h2>
                    
                    <p><strong>📍 Lieu :</strong> <?php echo htmlspecialchars($event['location']); ?></p>
                    
                    <p><strong>🕒 Date :</strong> 
                        <?php 
                            echo date('d/m/Y à H:i', strtotime($event['date'])); 
                        ?>
                    </p>
                    
                     <a href="index.php?action=details&id=<?php echo $event['id']; ?>" class="btn-details">
                        Voir les détails
                    </a>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <div style="text-align: center; grid-column: 1 / -1; padding: 50px;">
                <p>Aucun événement n'est disponible pour le moment.</p>
            </div>
        <?php endif; ?>
    </div>
</section>
<?php include_once '../app/views/partials/footer.php'; ?>