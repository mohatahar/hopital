<?php include('../config/config.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="assets/style.css">
    <title><?php echo $site_name; ?></title>
    <style>
        .compact-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .compact-nav .nav-menu {
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }
        .compact-nav .nav-menu li {
            margin-left: 15px;
        }
        .compact-nav .nav-menu li a {
            text-decoration: none;
            color: #333;
            font-size: 14px;
            display: flex;
            align-items: center;
        }
        .compact-nav .nav-menu li a i {
            margin-right: 5px;
        }
        .menu-toggle, .menu-icon {
            display: none;
        }
        @media (max-width: 768px) {
            .compact-nav .nav-menu {
                display: none;
                flex-direction: column;
                position: absolute;
                top: 100%;
                left: 0;
                width: 100%;
                background: white;
                box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            }
            .compact-nav .nav-menu li {
                margin: 10px 0;
                text-align: center;
            }
            .menu-toggle, .menu-icon {
                display: block;
                cursor: pointer;
            }
            .menu-toggle:checked ~ .nav-menu {
                display: flex;
            }
        }
    </style>
</head>
<body>
    <header class="header-modern">
        <div class="container">
            <div class="header-content compact-nav">
                <div class="logo-container">
                    <h1><?php echo $site_name; ?></h1>
                </div>
                <input type="checkbox" id="menu-toggle" class="menu-toggle">
                <label for="menu-toggle" class="menu-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </label>
                <nav>
                    <ul class="nav-menu">
                        <li><a href="index.php"><i class="fas fa-home"></i> Accueil</a></li>
                        <li><a href="about.php"><i class="fas fa-info-circle"></i> À propos</a></li>
                        <li><a href="services.php"><i class="fas fa-tasks"></i> Services</a></li>
                        <li><a href="team.php"><i class="fas fa-users"></i> Équipe</a></li>
                        <li><a href="recrutement.php"><i class="fas fa-briefcase"></i>Recrutement</a></li>
                        <li><a href="actualites.php"><i class="fas fa-newspaper"></i>Actualités</a></li>
                        <li><a href="espace_media.php"><i class="fas fa-photo-video"></i>Espace Média</a></li>
                        <li><a href="contact.php"><i class="fas fa-envelope"></i> Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
</body>
</html>