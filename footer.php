<footer>

  <footer class="footer-page">
    <div class="container">
      <h2 class="title-section" id="contact">Контакты</h2>
      <h3 class="phones-title">Наши телефоны</h3>
      <div class="phones phohes_footer">
        <?php include 'includes/phones.php'?>
      </div>
      <p class="email-footer">
        Эл. почта: <a href="mailto:taxiizrostova@gmail.com">taxiizrostova@gmail.com</a>
      </p>
      <h3 class="social-title">Мы в соц. сетях</h3>
      <ul class="list list_social footer__social">

        <?php include 'includes/social.php'?>

      </ul>
      <ul class="list footer__menu">
        
        <li><a href="index.php">Главная</a></li>
        <li><a href="index.php#services">Услуги</a></li>
        <li><a href="index.php#routs">Направления</a></li>
        <li><a href="page-booking.php">Бронирование</a></li>
        <li><a href="page-about.php">О нас</a></li>
        <li><a href="index.php#contact">Контакты</a></li>
      </ul>
      <div class="copyright">
        <div class="law">
          <a href="#">Пользовательское соглашение</a>
          <a href="#">Оферта</a>
        </div>
        <span>&copy; <?php echo date('Y') ?> РостовЮгТрансфер</span>
        <a class="author" href="#">Design by S. Polyanskay@</a>
      </div><!-- copyright -->
    </div><!-- container -->
  </footer>
  <button class="btn-up visually-hidden" type="button"><span class="visually-hidden">Наверх</span></button>
  <script src="js/script.js"></script>
  </body>

  </footer>
</body>

</html>