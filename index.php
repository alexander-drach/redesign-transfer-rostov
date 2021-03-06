<?php include 'header.php'?>
<main class="main">
  <?php include 'includes/hero.php'?>

  <?php include 'includes/block-phones.php'?>

  <section id="services" class="servises">
    <h2 class="title-section">Наши услуги</h2>
    <div class="services__wrap container">
      <div class="wrapper-list-services">
        <div class="wrapper__item">
          <ul class="list">
            <li class="list__item">Круглосуточный прием заказов.</li>
            <li class="list__item">Онлайн-касса (предоставляем квитанцию, БСО).</li>
            <li class="list__item">Встреча на вокзале и в аэропорту.</li>
            <li class="list__item">Курьерские услуги.</li>
            <li class="list__item">Трансфер из/в Аэропорта Платов.</li>
            <li class="list__item">Детские кресла и Автолюльки.</li>
          </ul>
        </div><!-- wrapper__item -->
        <div class="wrapper__item">
          <h2 class="title-section sub-title">А также</h2>
          <ul class="list">
            <li class="list__item">Обслуживание корпоративных клиентов.</li>
            <li class="list__item">Обслуживание гостиниц и отелей.</li>
            <li class="list__item">Встреча на автомобилях бизнес и премиум классов.
            </li>
            <li class="list__item">Транспортное обслуживание деловых мероприятий.</li>
            <li class="list__item">Доставка багажа.</li>
          </ul>
        </div><!-- wrapper__item -->
      </div> <!-- wrapper-list-services -->

      <div class="contacts__item">
        <p class="item-title">Забронировать автомобиль можете любым удобным для Вас способом:</p>
        <p class="about-text">Позвонить по телефонам:</p>
        <div class="contacts__phones">
          <?php include 'includes/phones.php'?>
        </div>

        <p class="about-text">Связаться через мессенджеры:</p>

        <div class="messengers">
          <?php include 'includes/messengers.php'?>
        </div>

        <p class="about-text">Написать в соц. сети:</p>

        <ul class="list list_social contacts__social">
          <?php include 'includes/social.php'?><?php include 'includes/messengers.php'?>
        </ul>

        <p class="item-title">Заполнить форму <a href="page-booking.php">бронирования</a></p>
      </div><!-- contacts__item -->
    </div><!-- container -->
  </section><!-- servises -->

  <div class="booking">
    <p class="booking__slogan">Забронируйте поездку прямо сейчас</p>
    <p class="booking__call">Позвоните нам <?php include 'includes/phones.php'?></p>
    <p class="booking__online">или забронируйте <a href="page-booking.php">онлайн</a> на сайте</p>
    <a class="order-btn" href="page-booking.php">Забронировать</a>
  </div><!-- booking -->

  <div class="rates">
    <div class="container">
      <h2 class="title-section">Тарифы</h2>
      <ul class="list list_rates">

        <li class="list__item">
          <h3 class="rates__title">Стандарт</h3>
          <div class="rates__thumb">
            <img src="img/rates/Kia.png" alt="auto">
          </div>
          <div class="rates__info">
            <p class="list__desc">Hyundai Solaris, Kia Rio, Škoda Rapid, Lada Vesta и аналогичные</p>
          </div>
        </li><!-- list__item -->
        <li class="list__item">
          <h3 class="rates__title">Комфорт</h3>
          <div class="rates__thumb">
            <img src="img/rates/Hyndai.png" alt="auto">
          </div>
          <div class="rates__info">
            <p class="list__desc">Hyundai Elantra, Kia Cerato, Hyundai i40, Škoda Octavia и аналогичные</p>
          </div>
        </li><!-- list__item -->
        <li class="list__item">
          <h3 class="rates__title">Бизнес</h3>
          <div class="rates__thumb">
            <img src="img/rates/Audi.png" alt="auto">
          </div>
          <div class="rates__info">
            <p class="list__desc">Audi A7, BMW, Toyota Camry, Škoda Superb, Mercedes и аналогичные</p>
          </div>
        </li><!-- list__item -->
      </ul>
      <div class="booking__btn">
        <a class="booking__link" href="page-booking.php">Забронировать</a>
      </div>
    </div><!-- container -->
  </div><!-- rates -->

  <section class="features">
    <h2 class="title-section">Наши дополнительные преимущества</h2>
    <ul class="list list_features container">

      <li class="list__item">
        <div class="features__icon">
          <img src="img/icons/features/icon-comfort.svg" alt="">
        </div>
        <h3 class="features__title">Комфорт</h3>
        <div class="list__desc">
          Поездка должна быть комфортной. Это обеспечивают наши автомобили известных брендов
        </div>
      </li><!-- list__item -->

      <li class="list__item">
        <div class="features__icon">
          <img src="img/icons/features/icon-time.svg" alt="">
        </div>
        <h3 class="features__title">Точность</h3>
        <div class="list__desc">
          Мы ценим Ваше время. Наши пунктуальные водители никогда не опаздывают на заказ
        </div>
      </li><!-- list__item -->

      <li class="list__item">
        <div class="features__icon">
          <img src="img/icons/features/icon-price.svg" alt="">
        </div>
        <h3 class="features__title">Цена</h3>
        <div class="list__desc">
          Фиксированная цена поездки вне зависимости от времени в пути и пробок
        </div>
      </li><!-- list__item -->

      <li class="list__item">
        <div class="features__icon">
          <img src="img/icons/features/icon-doc.svg" alt="">
        </div>
        <h3 class="features__title">Квитанция</h3>
        <div class="list__desc">
          Предоставляем документы о поездке, Бланки Строгой Отчетности
        </div>
      </li><!-- list__item -->

    </ul>
  </section><!-- features -->

  <section class="routs" id="routs">
    <h2 class="title-section">Популярные направления</h2>
    <div class="container">
      <ul class="list list_routs">

        <?php foreach ($routs as $item) : ?>
        <li class="list__item">
          <img class="routs__img" src="<?php echo $item['img']; ?>" alt="">
          <h3 class="routs__title"><?php echo $item['title']; ?></h3>
          <a class="booking__link" href="./page-booking.php?title=<?php echo $item['title']; ?>">Заказать</a>
          <div class="routs__overlay"></div>
        </li><!-- list__item -->

        <?php endforeach; ?>

      </ul>
    </div>
  </section><!-- routs -->

</main>
<?php include 'footer.php'?>