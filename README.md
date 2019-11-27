<h1>Inhabitent</h1>

A multi-page website with a blog for a camping supply company called Inhabitent Camping Supply Co. using WordPress as a content management system.

<img src="screenshots/front-page.png" width=600px>

<h2>Preview</h2>

PHP, MySql, WordPress, JavaScript

gulp, gulp-sass, jQquery


Contact Form 7, Advanced Custom Fields, Show Current Template

Ten Biz Hours (Custom Widget for Inhabitent Business Hours Functionality) 

- Gives administrators easy access to adjusting the business hours

<img src="screenshots/find-us.png" width=600px>

Wordpress Theme Template hierarchy

<h3>Menu</h3>

[Home] front-page.php  - [Shop] archive.php - [Journal] home.php - [About] page-about.php - [Find Us] page-find-us.php
header.php  template-parts/content.php	footer.php	sidebar.php	footer.php	sidebar.php
 
Other pages

single-product.php	taxonomy-product-type.php  single.php
archive-product.php

<h3>Features</h3>

* Custom Loops

2 Types of custom loops are used :

new WP_Query ( $query ) - is used in archive-product.php to display products and used in front-page.php to display INHABITENT JOURNAL.

get_terms ( $query ) - is used in archive-product.php to display products and used in front-page.php to display SHOP Categories.
 
<img src="screenshots/shop-page.png" width=600px>

Stretch Goal:

JavaScript (Intersection Observer) is used to alter the style of the header to be absolutely positioned with a reverse colour scheme on pages with hero images at the top, and transition to the standard site header once the user has scrolled past the hero image to the rest of the page content.

![web-gif-sd](https://user-images.githubusercontent.com/55861803/69760622-db572f00-1119-11ea-977c-f08e54367ce0.gif)
