<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="<?= site_url('asset/font/material-icon/material-icons.css'); ?>" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="<?= site_url('asset/css/materialize.min.css'); ?>" media="screen,projection"/>
        <title>DagingMart | Stok Makanan</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    </head>
    <body class="theme-meatshop">
        <script type="text/javascript" src="<?= site_url('asset/js/materialize.min.js'); ?>"></script>

        <div class="navbar-fixed">
            <nav class="z-depth-0 top-nav">
                <div class="nav-wrapper container">
                    <a href="<?= site_url(); ?>" class="brand-logo">DagingMart</a>
                    <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                    <ul class="right hide-on-med-and-down">
                        <li><a href="<?= site_url(); ?>">Dashboard Stok</a></li>
                        <li><a href="<?= base_url('welcome/create'); ?>" class="btn btn-add-stock">Tambah Stok</a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <ul class="sidenav" id="mobile-demo">
            <li><a href="<?= site_url(); ?>">Dashboard Stok</a></li>
            <li><a href="<?= site_url('welcome/create'); ?>">Tambah Stok</a></li>
        </ul>

        <main class="container section">