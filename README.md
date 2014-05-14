# Feather

Feather is a WordPress starter theme based on Bootstrap and influenced by Roots and Underscores. Feather is simple and easy to use and employs the simplest implementations of Twitter's Bootstrap3, WordPress Codex, and libraries from the popular WordPress starter themes Roots and Underscores.

This is very near to a WordPress skeleton theme. There are no wrappers, no rewriting, no advanced configurations, no init scripts, and it's not all that DRY.  You'll see familiar template files such as index, single, archive, and page, sidebars, a few widgets/sidebars, and a couple menus.

This is meant for hacking away at. Don't bother creating a child theme for it. Once you grab it, don't feel compelled to update it. It uses enough WordPress functionality that we're essentially outsourcing backwards compatibility to WordPress, which they have taken pretty seriously. This means this thing should last you a good long while.

This starter theme optionally employes a number of popular and well regarded plugins to enhance functionality. A list of these plugins can be found below. These can be activated to enhance functionality, but are not required.

### Frameworks, Libraries, and Resources:

This theme makes use of and the following frameworks, libraries, and resources:

* Bootstrap
* Google Fonts
* Roots
* Underscores
* Font Awesome (Override)

### Template Files:

This theme includes the following template files:

* archive.php
* author.php
* index.php
* page.php
* single.php
* template-no-container.php
* template-single-column.php

### Widgets:

This theme registers the following widgets/sidebar areas:

$id | name | Description
------------ | ------------- | -------------
sidebar-primary | Primary Sidebar | Default primary sidebar usually containing blog specific widets.
sidebar-page | Page Sidebar | Used on page templates usually containg page/site menus and other material.

Feel free to update these to match any registered widgets/sidebars on already existing sites.

### Menus:

This theme registers the following menu areas:

$location | $description
------------ | -------------
primary | Primary Menu
secondary | Secondary Menu
footer | Footer Menu

Feel free to update these to match any registered menus on already existing sites.

### Recommended Plugins:

We defer to popular and wellregarded plugins to extend functionality withing the theme. 

Plugin Name | Description
------------ | -------------
WordPress SEO | SEO, Breadcrumbs, Sitemap solution.
Jetpack | Stats, subscriptions, carousel, related posts, sharing, contact form, widget visbility, custom css, shortcode embeds, extra sidebar widgets, monitor, enhanced distribution.
WP Minify | JS and CSS concantenation and minification. https://wordpress.org/plugins/wp-minify/
WP Paginate | Pagination
Custom Field Suite | Appears as (Field Groups) and allows for creating custom fields. Basic port of ACM with available repeatable fields functionality.
Custom Content Type Manager | (Custom Content Types) post types (use field groups for custom fields).

### Optional Plugins:

A documenation of plugins we have made use of to achieve certain requirements and functionality.

Plugin Name | Description
------------ | -------------
Gravity Forms | Forms creation. Requires a License to use and replaces Contact Form & (which is a great free option).
Configure SMTP | SMTP Manager. For times in which your server does not provide a mail server.
Google Analytics for WordPress | Google Analytics.
Posts 2 Posts | Create many-to-many relationships between posts of any type.
Members | A user, role, and content management plugin.
WP Session Manager | Adds $_SESSION-like functionality to WordPress.

### Reference:

* <http://codex.wordpress.org/Theme_Development#Theme_Development_Standards>




