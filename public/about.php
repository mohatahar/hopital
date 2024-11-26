<?php 
$page_title = "À propos de nous";
include('../includes/header.php'); 
?>
<main>
    <section class="about-us">
        <h2>À propos de <?php echo $site_name; ?></h2>
        
        <div class="about-content">
            <p><?php echo $site_name; ?> est un établissement de santé moderne situé au cœur de votre communauté, fort d'une riche histoire d'excellence médicale et d'engagement envers le bien-être de nos patients.</p>
            
            <h3>Notre mission</h3>
            <p>Offrir des soins de santé de qualité, personnalisés et accessibles, en combinant expertise médicale de pointe et approche humaine et attentionnée.</p>
            
            <h3>Nos valeurs</h3>
            <ul>
                <li>Respect du patient</li>
                <li>Excellence médicale</li>
                <li>Innovation continue</li>
                <li>Compassion et empathie</li>
            </ul>
            
            <h3>Notre engagement</h3>
            <p>Nous nous engageons à fournir des services médicaux de haute qualité, en mettant l'accent sur la prévention, le diagnostic précoce et des traitements personnalisés.</p>
        </div>
    </section>
</main>
<?php include('../includes/footer.php'); ?>