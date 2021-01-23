<?php include 'header.php'?>
  <main class="main">
    <?php include 'includes/hero.php'?>

    <?php include 'includes/block-phones.php'?>

    <div class="rates">
      <div class="container">
        <h2 class="title-section">Тарифы</h2>
        <div class="tabs-wrapper">
          <div class="tabs">
            <header class="tabs-header">
              <button class="tabs-header__item">Стандарт</button>
              <button class="tabs-header__item">Комфорт</button>
              <button class="tabs-header__item">Бизнес</button>
            </header><!-- tabs__header -->
            <div class="tabs-content">
              <section class="tabs-content__item">
                <h3 class="tabs-content__title">Стандарт</h3>
                <div class="slider">
                  <div class="slides-wrapper">
                    <img src="img/slider/s-1.png" alt="">
                    <img src="img/slider/s-2.png" alt="">
                    <img src="img/slider/s-3.png" alt="">
                  </div>
                </div>
                <ul class="list tabs-features">
                  <li class="tabs-features__item">
                    <div class="tabs-features__icon">
                      <img src="img/icons/icon-condition.svg" alt="">
                    </div>
                    <span class="tabs-features__text">кондиционер</span>
                  </li>
                  <li class="tabs-features__item">
                    <div class="tabs-features__icon">
                      <img src="img/icons/icon-place.svg" alt="">
                    </div>
                    <span class="tabs-features__text">до 4 мест</span>
                  </li>
                </ul>
                <div class="slider__nav">
                  <button class="slider__dot slider__dot_active"></button>
                  <button class="slider__dot"></button>
                  <button class="slider__dot"></button>
                </div>
              </section><!-- tabs-content__item -->
            </div><!-- tabs-content -->
          </div><!-- tabs -->
          <a class="routs__link" href="./page-booking.php?rate=">Заказать</a>
        </div><!-- tabs-wrapper -->
      </div><!-- container -->
    </div><!-- rates -->

    <section id="services" class="servises">
      <h2 class="title-section">Наши услуги</h2>
      <div class="wrapper-list-services container">
        <div class="wrapper__item">
          <ul class="list list_services">
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
          <ul class="list list_services">
            <li class="list__item">Обслуживание корпоративных клиентов.</li>
            <li class="list__item">Обслуживание гостиниц и отелей.</li>
            <li class="list__item">Встреча на автомобилях бизнес и премиум классов.
            </li>
            <li class="list__item">Транспортное обслуживание деловых мероприятий.</li>
            <li class="list__item">Доставка багажа.</li>
          </ul>
        </div><!-- wrapper__item -->
      </div><!-- container -->
    </section><!-- servises -->

    <div class="booking">
      <p class="booking__slogan">Забронируйте поездку прямо сейчас</p>
      <p class="booking__call">Позвоните нам  <?php include 'includes/phones.php'?></p>
      <p class="booking__online">или забронируйте <a href="page-booking.php">онлайн</a> на сайте</p>
      <button class="order-btn" type="button">Забронировать</button>
    </div><!-- booking -->

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

    <section id="routs" class="routs">
      <h2 class="title-section">Популярные направления</h2>
      <div class="container">
        <ul class="list list_routs">

          <?php foreach ($routs as $item) : ?>
            <li class="list__item">
              <img class="routs__img" src="<?php echo $item['img']; ?>" alt="">
              <h3 class="routs__title"><?php echo $item['title']; ?></h3>
              <a class="routs__link" href="./page-booking.php?title=<?php echo $item['title']; ?>">Заказать</a>
              <div class="routs__overlay"></div>
            </li><!-- list__item -->

          <?php endforeach; ?>

        </ul>
      </div>
    </section><!-- routs -->

  </main>
<?php include 'footer.php'?>