<?php

  include 'includes/db.php';

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
    content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat+Alternates:wght@400;600;700;800&family=Open+Sans:wght@400;700&family=Roboto:wght@700&display=swap"
    rel="stylesheet">
  <title>РостовЮгТрансфер</title>
</head>

<body>
  <header class="header-page">
    <div class="container container_header">
      <a class="logo" href="/">
        <picture>
          <source srcset="img/logo-mobile.svg" media="(max-width: 480px)">
          <source srcset="img/logo-tablet.svg" media="(max-width: 1024px)">
          <img src="img/logo.svg" alt="Логотип РостовЮг Трансфер">
        </picture>
      </a>
      <div class="header-contact-menu">
        <div class="messengers messengers_header">
          <?php include 'includes/messengers.php'?>
        </div>
        <div class="phones phones_header">
          <?php include 'includes/phones.php'?>
        </div>
        <nav class="nav">
          <ul class="list main-menu">
            <li><a href="index.php">Главная</a></li>
            <li><a href="index.php#services">Услуги</a></li>
            <li><a href="index.php#routs">Направления</a></li>
            <li><a href="page-booking.php">Бронирование</a></li>
            <li><a href="page-about.php">О нас</a></li>
            <li><a href="index.php#contact">Контакты</a></li>
          </ul>
          <button class="hamb" type="button">
            <span class="visually-hidden">открыть меню</span>
            <span class="hamb__line"></span>
          </button>
          <button class="close-menu" type="button">
            <span class="visually-hidden">закрыть меню</span>
          </button>
        </nav><!-- nav end -->
      </div><!-- header-contact-menu -->
    </div><!-- container -->
  </header>