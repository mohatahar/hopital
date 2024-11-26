<?php 
$page_title = "Accueil";
include('../includes/header.php'); 
?>
<main>
    <section class="hero">
        <img src="assets/images/accueil.jpg" alt="Notre établissement de santé" />
        <h2>Bienvenue à <?php echo $site_name; ?></h2>
        <p class="hero-description">Votre santé, notre priorité. Des soins humains, des technologies innovantes.</p>
        <a href="services.php" class="btn">Découvrez nos services</a>
    </section>

    <section id="why-choose-us">
        <h2>Pourquoi nous choisir ?</h2>
        <ul>
            <li>
                <h3>Soins personnalisés</h3>
                <p>Chaque patient est unique. Nous créons des parcours de soins individualisés, adaptés à vos besoins spécifiques.</p>
            </li>
            <li>
                <h3>Technologies de pointe</h3>
                <p>Nous investissons continuellement dans les technologies médicales les plus récentes pour garantir des diagnostics précis et des traitements efficaces.</p>
            </li>
            <li>
                <h3>Équipe experte</h3>
                <p>Notre équipe multidisciplinaire combine expertise médicale et compassion pour vous offrir les meilleurs soins possibles.</p>
            </li>
        </ul>
    </section>

    <section id="quick-services">
        <h2>Nos services principaux</h2>
        <ul>
            <li>
                <h3>Médecine générale</h3>
                <p>Des consultations complètes et attentionnées.</p>
            </li>
            <li>
                <h3>Urgences</h3>
                <p>Une équipe disponible 24h/24, 7j/7.</p>
            </li>
            <li>
                <h3>Services spécialisés</h3>
                <p>Cardiologie, neurologie, pédiatrie et plus encore.</p>
            </li>
        </ul>
    </section>
</main>
<?php include('../includes/footer.php'); ?>