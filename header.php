<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>
<body>
	<h1>
		Sitio en construcción...
	</h1>
	Autor: José Alberto Núñez Magadán<br>
    Aprendiendo y enseñando<br>
    Matemático, gusto por la ciencia de datos, entusiasta de la web<br>
    
     
<header>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-4">
                <img src="<?php echo get_template_directory_uri()?>/assets/img/logo.png" alt="logo">
            </div>
            <div class="col-8">
                <nav>
                    <?php wp_nav_menu( 
                        array(
                            'thme_location' => 'top_menu',
                            'menu_class' => 'menu-principal',
                            'container_class' => 'container-menu',
                        )                        
                    );?>
                </nav>
            </div>
        </div>
    </div>

</header>

