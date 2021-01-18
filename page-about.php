<?php
/*
Template Name: Страница - о нас
*/
?><?php include 'header.php'?>
  <main class="about-main">
    <?php include 'includes/hero.php'?>

    <?php include 'includes/block-phones.php'?>

    <section class="about">
      <h2 class="title-section">О нас</h2>
      <div class="container container_about">
        <div class="about-item about-item_services">
          <p class="item-title">Услуги междугороднего такси и трансфера</p>
          <div class="about-text">
            <p>
              Наша команда профессионалов начала свою работу
              в 2017 году с организации пассажирских перевозок
              из города Ростов-на-Дону по области.
            </p>
            <p>
              На тот момент в нашем автопарке насчитывалось
              около 10 автомобилей.
            </p>
            <p>
              Сейчас мы работаем по всему Югу России
              и республике Крым, в Волгоградской,
              Астраханской и других областях, Калмыкии,
              поездки на границу с Украиной (таможня), по РФ.
            </p>
          </div>
        </div><!-- services -->

        <div class="about-item about-item_methods">
          <p class="item-title">Забронировать автомобиль можете любым удобным для Вас способом:</p>
          <p class="about-text">Позвонить по телефонам:</p>
          <div class="about-phones">
            <?php include 'includes/phones.php'?>
          </div>

          <p class="about-text">Связаться через мессенджеры:</p>

          <div class="messengers">
            <?php include 'includes/messengers.php'?>
          </div>

          <p class="about-text">Написать в соц. сети:</p>

          <ul class="list list_social about-social">
            <?php include 'includes/social.php'?><?php include 'includes/messengers.php'?>
          </ul>

          <p class="item-title">Заполнить форму <a href="page-booking.php">бронирования</a></p>
        </div><!-- methods -->
      </div><!-- container_about -->
    </section><!-- about -->

    <section class="transfer">
      <p class="item-title">Трансфер Аэропорт “Платов”</p>
      <div class="wrapper-transfer container">
        <div class="item transfer-text">
          <div class="about-text">
            <p>
              Если Вы планируете свой отпуск заблаговременно, то можете воспользоваться нашей службой
              такси.
            </p>
            <p>
              Выберите требуемый маршрут, класс машины, впишите время, дату прибытия и контактный телефон.
            </p>
            <p>
              В день поездки водитель свяжется с Вами
              и встретит в зоне прилета.
            </p>
            <p>
              Мы оказываем целый ряд дополнительных услуг:
            </p>
            <ul class="list">
              <li>
                - встреча с табличкой,
              </li>
              <li>
                - помощь с багажом,
              </li>
              <li>
                - отслеживание прилета/отлета самолетов
              </li>
              <li>
                и многое другое.
              </li>
            </ul>
          </div>
        </div>
        <div class="item transfer-img">

        </div>
      </div>
    </section><!-- transfer -->

  </main>
<?php include 'footer.php'?>