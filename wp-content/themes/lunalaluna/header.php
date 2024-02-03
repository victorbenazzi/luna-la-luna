<!DOCTYPE html>
<html lang="<?php bloginfo('language') ?>">
	<head>
		<meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="<?php bloginfo('description') ?>">
        <title><?php bloginfo('name') ?></title>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
        <?php wp_head() ?>
	</head>
<body>
    <header class="header">
        <div class="container">
            <img src="http://localhost/luna-la-luna/wp-content/uploads/2024/02/logo.png" class="logo" alt="Luna La Luna" >
            <nav class="header-menu">
                <?php wp_nav_menu(array('theme_location' => 'header-menu')) ?>
            </nav>
            <a href="#" class="button" aria-label="Botão de contato">Botão</a>
        </div>
    </header>

