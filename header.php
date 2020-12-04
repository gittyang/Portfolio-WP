<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/css/main.css' ?>">
  <?php wp_head(); ?>
  <title>Tou Toua Yang</title>
</head>
 
<body <?php body_class(); ?> >
  <!-- Menu Nav -->
  <header>
    <nav class="menu">
      <ul class="menu-nav">
        <li class="nav-item">
          <a href="#home" class="nav-link">
            HOME PAGE
          </a>
        </li>
        <div class="nav-item-line"></div>

        <li class="nav-item">
          <a href="#about" class="nav-link">
            ABOUT ME
          </a>
        </li>
        <div class="nav-item-line"></div>

        <li class="nav-item">
          <a href="#projects" class="nav-link">
            PROJECTS
          </a>
        </li>
        <div class="nav-item-line"></div>

        <li class="nav-item">
          <a href="#contact" class="nav-link">
            CONTACT ME
          </a>
        </li>
        <div class="nav-item-line"></div>

      </ul>
    </nav>
  </header> 