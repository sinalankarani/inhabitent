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

3 Types of custom loops are used :
get_terms( $query ) - is used in front-page.php to display SHOP STUFF and used in archive-product.php to display categories

get_posts( $query ) - is used in front-page.php to display INHABITENT JOURNAL, LATEST ADVENTURES

new WP_Query( $query ) - is used in archive-product.php to display products
 
<img src="screenshots/shop-page.png" width=600px>

2. Theme Plugins

Business hours widget

Create custom widgets in the sidebar for contact info and business hours to change information easily.
