<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package HeartOnFire
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <?php require_once locate_template('templates/partials/head.php'); ?>
</head>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <?php require_once locate_template('includes/main-navigation.php'); ?>
        <?php require_once locate_template('includes/mobile-navigation.php'); ?>
    </header>
    