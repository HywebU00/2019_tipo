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
  <link rel="stylesheet" href="css/hyui_en.css">
  <!-- ico -->
  <link rel="icon" type="image/ico" href="images/favicon.ico">
</head>

<body>
  <!-- 直接跳主內容區 -->
  <a class="goCenter" href="#center" tabindex="1">按Enter到主內容區</a>
  <!-- wrapper Start -->
  <div class="wrapper">
    <!-- header Start -->
    <?php require_once('include/en_header.html'); ?>
    <!-- header End -->
    <!-- main Start -->
    <div id="center" class="main innerpage">
      <!-- 內頁新增一個classname-->
      <a class="accesskey" href="#aC" id="aC" accesskey="C" title="主要內容區">:::</a>
      <div class="container">
        <!-- breadcrumb路徑 -->
        <?php require_once('include/en_breadcrumb.html'); ?>
        <!-- function功能區塊 -->
        <div class="function_panel">
          <div class="font_size">
            <ul>
              <li><a href="#" class="small">S</a></li>
              <li><a href="#" class="medium">M</a></li>
              <li><a href="#" class="large">L</a></li>
            </ul>
          </div>
          <!-- function功能區塊 -->
          <div class="function">
            <ul>
              <li class="back"><a href="javascript:history.back()">回上一頁</a></li>
            </ul>
          </div>
        </div>
        <!-- topic_page Start -->
        <section class="topic_page copyright">
          <ul>
            <li>
              <span class="title">Copyright</span>
              <span class="pic"><img src="images/copyright/t1.jpg" alt=""></span>
            </li>
            <li>
              <a href="">
                <span class="title">News</span>
                <span class="pic"><img src="images/copyright/t2.jpg" alt=""></span>
              </a>
            </li>
            <li>
              <a href="">
                <span class="title">Laws& Regulations</span>
                <span class="pic"><img src="images/copyright/t3.jpg" alt=""></span>
              </a>
            </li>
            <li>
              <a href="">
                <span class="title">FAQS</span>
                <span class="pic"><img src="images/copyright/t4.jpg" alt=""></span>
              </a>
            </li>
          </ul>
        </section>
        <!-- topic_page End -->
      </div>
    </div>
    <!-- 訂閱電子報 -->
    <?php require_once('include/en_subscribe.html'); ?>
    <!-- fatfooter Start -->
    <?php require_once('include/en_fatfooter.html'); ?>
    <!-- fatfooter End -->
    <!-- footer Start-->
    <?php require_once('include/en_footer.html'); ?>
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