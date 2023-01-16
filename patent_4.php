<!doctype html>
<html lang="zh-Hant" class="no-js">
<head>
<meta name="robots" content="noindex">
<!-- 使用 noindex 禁止 Google 搜尋建立索引，套版時請工程師刪掉這行 -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>經濟部智慧財產局</title>
    <!--HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries [if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
  <![endif]-->
  <!-- slick css-->
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="vendor/slick/slick-theme.css" />
  <!-- hyUI css -->
  <link rel="stylesheet" href="css/hyui.css">
  <!-- ico -->
  <link rel="icon" type="image/ico" href="images/favicon.ico">
</head>

<body>
  <!-- 直接跳主內容區 -->
  <a class="goCenter" href="#center" tabindex="1">按Enter到主內容區</a>
  <!-- wrapper Start -->
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/header.html'); ?>
    <!-- header End -->
    <!-- main Start -->
    <div id="center" class="main innerpage">
      <!-- 內頁新增一個classname-->
      <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
      <div class="container">
        <!-- breadcrumb路徑 -->
        <?php require_once('include/breadcrumb.html'); ?>
        <!-- h2節點 -->
        <h2 class="title">國際專利分類查詢 sp6 pc國際專利分類查詢</h2>
        <!-- function功能區塊 -->
        <?php require_once('include/function.html'); ?>
        <!-- patent Start -->
        <section class="patent">
          <!-- patnet_search -->
          <?php require_once('include/patent_search.html'); ?>
          <div class="total">共<em>308</em>筆資料</div>
          <div class="mode">瀏覽方式：<a href="" class="active">完整</a><a href="patent_4.php">分層</a></div>
          <table class="patent_table">
            <tr class="lv1">
              <th scope="row"><a href="">A</a></th>
              <td>人類生活需要</td>
            </tr>
            <tr class="lv2">
              <th scope="row"><a href="">A01</a></th>
              <td>農業；林業；畜牧業；打獵；誘捕；捕魚</td>
            </tr>
            <tr class="lv3">
              <th scope="row"><a href="">A01B</a></th>
              <td>農業或林業之整地；一般農業機械或農具之部件、零件或附件（播種、種植或施肥時之開溝、挖坑或平溝、填抗見A01C5/00；用於收獲根用作物的機械見A01D；可變換成整地設備或能夠整地的割草機見A01D 42/04；與整地機具聯合的割草機見A01D43/12；工程目的之整地見E01、E02、E21）</td>
            </tr>
            <tr class="lv_head">
              <th scope="row"><a href="">A01B 1/00</a></th>
              <td>手動工具（草坪地修整機見A01G 3/06）</td>
            </tr>
            <tr>
              <th scope="row"><a href="">A01B 1/02</a></th>
              <td>鍬；鏟</td>
            </tr>
            <tr>
              <th scope="row"><a href="">A01B 1/04</a></th>
              <td>帶齒者</td>
            </tr>
            <tr>
              <th scope="row"><a href="">A01B 1/06</a></th>
              <td>鋤；手動中耕器</td>
            </tr>
            <tr class="lv_head">
              <th scope="row"><a href="">A01B 3/00</a></th>
              <td>裝有固定式犁鏵之犁</td>
            </tr>
            <tr>
              <th scope="row"><a href="">A01B 3/02</a></th>
              <td>人力犁</td>
            </tr>
            <tr>
              <th scope="row"><a href="">A01B 3/04</a></th>
              <td>畜力牽引犁</td>
            </tr>
            <tr>
              <th scope="row"><a href="">A01B 3/06</a></th>
              <td>不能雙向使用者，即於回程時不能翻耕鄰行者</td>
            </tr>
          </table>
          <ul class="info">
            <li>發佈日期 : 2018-03-20</li>
            <li>發佈單位 : 移民事務組‧移民輔導科</li>
            <li>資料更新日期 : 2018-03-20</li>
            <li>瀏覽人次 : 123456</li>
          </ul>
        </section>
        <!-- patent End -->
        <!-- satisfaction 滿意度調查 -->
        <?php require_once('include/satisfaction.html'); ?>
      </div>
    </div>
    <!-- 訂閱電子報 -->
    <?php require_once('include/subscribe.html'); ?>
    <!-- fatfooter Start -->
    <?php require_once('include/fatfooter.html'); ?>
    <!-- fatfooter End -->
    <!-- footer Start-->
    <?php require_once('include/footer.html'); ?>
    <!-- footer End -->
  </div>
  <a href="javascript:;" class="scrollToTop">回頁首</a>
  <!-- JQ -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <!-- plugin js -->
  <script src="vendor/jquery.easing.min.js"></script>
  <script src="vendor/slick/slick.min.js "></script>
  <script src="vendor/slick/slick-lightbox.js "></script>
  <script src="vendor/lazyload/lazyload.min.js"></script>
  <!-- nicescroll -->
  <script src="vendor/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- hyUI -->
  <script src="js/hyui.js"></script>
  <!-- 客製js -->
  <script src="js/customize.js"></script>
</body>
</html>