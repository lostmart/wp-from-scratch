<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php  wp_head();  ?>


<header>

<div class="px-3 py-2 text-bg-dark border-bottom">

    <div class="container">

        
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small'
                )            
                )
                ?>

    </div><!-- end container   -->
</div><!-- text-bg-dark border-bottom   -->


    <!-- <div class="px-3 py-2 text-bg-dark border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="#" class="nav-link text-secondary">
                Home
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                About
              </a>
            </li>
            <li>
              <a href="#" class="nav-link text-white">
                Contact
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div> -->

  </header>


