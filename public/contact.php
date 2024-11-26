<?php 
$page_title = "Contactez-nous";
include('../includes/header.php'); 
?>
<main>
    <section class="contact">
        <h2>Contactez-nous</h2>
        
        <div class="contact-container">
            <form action="send_contact.php" method="post" id="contact-form">
                <div class="form-group">
                    <label for="name">Nom complet :</label>
                    <input type="text" id="name" name="name" required placeholder="Votre nom et prénom">
                </div>

                <div class="form-group">
                    <label for="email">Adresse email :</label>
                    <input type="email" id="email" name="email" required placeholder="votre.email@exemple.com">
                </div>

                <div class="form-group">
                    <label for="phone">Téléphone (optionnel) :</label>
                    <input type="tel" id="phone" name="phone" placeholder="Votre numéro de téléphone">
                </div>

                <div class="form-group">
                    <label for="subject">Sujet :</label>
                    <select id="subject" name="subject" required>
                        <option value="">Choisissez un sujet</option>
                        <option value="appointment">Prendre rendez-vous</option>
                        <option value="information">Demande d'information</option>
                        <option value="other">Autre</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="message">Votre message :</label>
                    <textarea id="message" name="message" required placeholder="Écrivez votre message ici..." rows="5"></textarea>
                </div>

                <button type="submit">Envoyer votre message</button>
            </form>

            <div class="contact-info">
                <h3>Nos coordonnées</h3>
                <p><strong>Téléphone :</strong> 01 23 45 67 89</p>
                <p><strong>Email :</strong> contact@<?php echo str_replace('www.', '', $_SERVER['SERVER_NAME']); ?></p>
                <p><strong>Adresse :</strong> 123 Avenue de la Santé, 75000 Paris</p>
                
                <h3>Horaires d'ouverture</h3>
                <p>Lundi - Vendredi : 8h - 20h</p>
                <p>Samedi : 9h - 13h</p>
                <p>Urgences : 24h/24, 7j/7</p>
            </div>
        </div>
    </section>
</main>
<?php include('../includes/footer.php'); ?>