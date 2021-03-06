<?php
  session_start();
  include "../methods/Helper/mysql_connect.php";
  include "../methods/Helper/sql_operation.php";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/misc/favicon.png">
    <title>中秋禮皂系列 - 月兔捉迷藏｜三三吾鄉手工皂Trisoap</title>
    <meta name="description" content="三三吾鄉人氣繽紛贈禮，採用大膽的混搭色，襯托出月兔的活潑感，不同於傳統的月兔形象，硬是給你不一樣的三三感受。">
    <!-- Bootstrap Core CSS-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS-->
    <link href="css/trisoap.css" rel="stylesheet">
  </head>
  <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" class="top">
    <!-- GA -->
    <?php include_once("../methods/Helper/analyticstracking.php") ?>

    <!-- Preloader-->
    <div id="preloader">
      <div id="status"></div>
    </div>

    <!-- Navigation-->
    <?php include 'nav.php'; ?>

    <!-- Header-->
    <header data-background="img/jumbotrons/moonfest.jpg" class="intro introhalf">
      <!-- Intro Header-->
      <div class="intro-body">
        <h1>商品一覽</h1>
        <h4>中秋禮皂</h4>
      </div>
    </header>
    <!-- shop-->
    <section id="shop" class="section-small">
      <div class="container">
        <div class="row">
          <!-- shop carousel-->
          <div id="carousel-shop" class="carousel slide">
            <div class="col-lg-6 carousel-outer">
              <!-- Wrapper for slides-->
              <div class="carousel-inner">
                <div class="item active">
                  <img src="img/product/moonfest/moonfest_moon_rabbit.jpg" alt="產品封面照片">
                </div>
                <div class="item">
                  <img src="img/product/moonfest/moonfest_gift_inside.jpg" alt="產品內容照片">
                </div>
              </div>
              <!-- Controls-->
              <a href="#carousel-shop" data-slide="prev" class="left carousel-control">
                <span class="icon-prev"></span>
              </a>
              <a href="#carousel-shop" data-slide="next" class="right carousel-control">
                <span class="icon-next"></span>
              </a>
              <!-- Indicators-->
              <ol class="carousel-indicators mCustomScrollbar">
                <li data-target="#carousel-shop" data-slide-to="0" class="active">
                  <img src="img/product/moonfest/moonfest_moon_rabbit.jpg" alt="產品封面小圖">
                </li>
                <li data-target="#carousel-shop" data-slide-to="1">
                  <img src="img/product/moonfest/moonfest_gift_inside.jpg" alt="產品內容小圖">
                </li>
              </ol>
            </div>

            <div class="col-lg-6 slide">
              <h4>中秋禮皂系列 - 月兔捉迷藏</h4>
              <p>
                三三吾鄉人氣繽紛贈禮，
                採用大膽的混搭色，
                襯托出月兔的活潑感，
                不同於傳統的月兔形象，
                硬是給你不一樣的三三感受。
              </p>
              <hr>
              <p>
                禮盒內含 /
                釋迦手感果力皂 50克 x 2
                金絲森林渲染皂 50克 x 2
                田靜山巒禾風皂 50克 x 2
                薑黃暖暖皂絲旅用組 x 2
                紅麴洛神皂絲旅用組 x 2
                萱草米黃皂絲旅用組 x 2
              </p>
              <p>主要成分 / 椰子油、橄欖油、乳油木果脂、棕梠油、米糠油、葡萄籽油、蓖麻油、苦茶油、小羊釋迦天然果泥果砂、小農食在無硫金針、自然主義天然洛神、薑黃伯薑黃粉、池上米糠、紅麴粉、蕁麻葉粉、紅棕梠油等</p>
              <p>適用膚質 / 中性、乾性膚質適用</p>
              <div class="panel panel-default">
                <div id="heading1" role="tab" class="panel-heading">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="false" aria-controls="collapse1" class="collapsed">
                    <h4 class="panel-title">在地小農</h4>
                  </a>
                </div>
                <div id="collapse1" role="tabpanel" aria-labelledby="heading1" class="panel-collapse collapse">
                  <div class="panel-body">
                    小農食在 －－ 清淨後花園的金針故鄉
                    金絲森林渲染皂當中的金針，乃是由「小農食在」所提供。小農食在的金針花田，有別於一般種植於高山上，而是在台東縣池上鄉的平地栽培，因此在非高山金針產季時，也能夠提供最新鮮的金針花。
                    市面上的金針花的加工品，為保有其鮮豔色澤與延長保存期間，經常添加二氧化硫，使含硫量超標，這些含硫金針，亦稱為「紅針、有毒金針」。而小農食在在製作過程中，完全不添加亞硫酸及其他添加物，是用於製作肥皂最好、安心的無硫金針。
                    <a href="https://www.facebook.com/pinganmipu/">
                      小農食在：https://www.facebook.com/pinganmipu/
                    </a>

                    釋迦小羊牧場 －－ 青綠糖蘋果的純真天堂
                    座落太麻里的「釋迦小羊牧場」。牧場在向陽面陽光充足的情況下，搭配上山泉水的灌溉，產出的台東二號釋迦碩大又飽滿。堅持產地自銷，從施肥、剪枝、開花、授粉、疏果、除草、套袋，親手處理每一個從小羊牧場產出的釋迦；對於各種細節的注重，以及對於果實品質安全的堅持，都可看出負責人陳志韋的認真和堅毅。
                    高溫後的降雨容易使釋迦產生裂果，裂果賣相不佳，常是小農的困擾。三三向釋迦小羊牧場合作購買部分裂果，純手工取出果泥、果皮與果沙整顆果實充分利用，製作成三三臺東意象的原料之一。「裂果的釋迦，像是在開懷大笑的小羊。」
                    <a href="https://www.facebook.com/taimalicustardapple/">
                      釋迦小羊牧場：https://www.facebook.com/taimalicustardapple/
                    </a>

                    台東自然主義 – 台東自然農法的幕後推手。
                    三三洛神紅麴皂絲，乃是採用台東自然主義友善耕種乾燥過後的洛神花。臺東自然主義經營人呂宏文，從耕種開始並秉持著自然友善以及追求一種對大地自然循環的尊重，不施藥與化肥的堅持，並且擔任推廣台東友善耕種「共好」的概念，希望更多農友加入自然主義的概念同行。
                    <a href="https://www.facebook.com/maturalism/">
                      臺東自然主義：https://www.facebook.com/maturalism/
                    </a>

                    台東薑黃伯 – 台東樂山的薑黃淨土。
                    臺東薑黃樂山野菜香草園，園區座落於台灣最後一塊淨土，其中含有多項礦物質又受太平洋水氣影響，成為種植的良好場所。台東薑黃伯園區經過20年的耕耘，堅持無施灑農藥，以最優質的束骨秋鬱金為主，強調「純淨、優質、安心」，經過多項有機認證測驗通過，堅持帶給你最好的薑黃農產。
                    <a href="http://www.tailosan.com/">
                      臺東薑黃伯：http://www.tailosan.com/
                    </a>
                  </div>
                </div>
              </div>
              <div class="panel panel-default">
                <div id="heading2" role="tab" class="panel-heading">
                  <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="false" aria-controls="collapse2" class="collapsed">
                    <h4 class="panel-title">愛心協力</h4>
                  </a>
                </div>
                <div id="collapse2" role="tabpanel" aria-labelledby="heading2" class="panel-collapse collapse">
                  <div class="panel-body">
                    台北自閉症基金會北投工坊
                    自閉症基金會北投工坊位於台北市北投區，是一個專門協助自閉症做職業培訓的小型作業所。裡頭的自閉症小孩有一個共同的特質便是「固著」，對於許多細節的一絲不苟。自閉症基金會北投工坊強調「將自閉症的特質化為優勢」，北投工坊不把自閉症的特質當作一種劣勢，而是運用一絲不苟的特質，來達成產品細節的完美。
                  </div>
                </div>
              </div>
              <form class="form-inline" method="post" action="../methods/Purchase_finish.php">
                <div class="form-group">
                  <h2 class="no-pad">$1200</h2>
                </div>
                <div class="form-group">
                  <label for="number"></label>
                  <input id="number" type="number" name="ORDAMT" value="1" max="50" min="1" class="form-control">
                  <input type="hidden" name="ITEMNO" value="moon_box_1">
                </div>
                <button type="submit" class="btn btn-dark">加入購物車</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer Section-->
    <?php include 'footer.php'; ?>

    <!-- jQuery-->
    <script src="js/jquery-1.12.3.min.js"></script>
    <!-- Bootstrap Core JavaScript-->
    <script src="js/bootstrap.min.js"></script>
    <!-- Plugin JavaScript-->
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/device.min.js"></script>
    <script src="js/form.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/jquery.shuffle.min.js"></script>
    <script src="js/jquery.parallax.min.js"></script>
    <script src="js/jquery.circle-progress.min.js"></script>
    <script src="js/jquery.swipebox.min.js"></script>
    <script src="js/smoothscroll.min.js"></script>
    <script src="js/tweecool.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/jquery.smartmenus.js"></script>
    <!-- Custom Theme JavaScript-->
    <script src="js/pheromone.js"></script>
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </body>
</html>
