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
          <table class="ipc_table">
            <tr class="lv1">
              <th>Version 2017.01</th>
              <th>Version 2018.01</th>
            </tr>
            <tr class="lv2">
              <th>G06F</th>
              <th></th>
            </tr>
            <tr>
              <td><a href="">G06F 9/00</a></td>
              <td><a href="">G06F 9/30</a>-<a href="" title="">9/38</a>, <a href="">G06F 9/448</a></td>
            </tr>
            <tr>
              <td><a href="">G06F 9/40</a></td>
              <td><a href="">A41D</a></td>
            </tr>
            <tr>
              <td><a href="">G06F 9/42</a></td>
              <td><a href="">G06F 9/30</a>-<a href="" title="">9/38</a>, <a href="">G06F 9/448</a></td>
            </tr>
            <tr>
              <td><a href="">G06F 9/42</a></td>
              <td><a href="">G06F 9/30</a>-<a href="" title="">9/38</a>, <a href="">G06F 9/448</a></td>
            </tr>
            <tr>
              <td><a href="">G06F 9/42</a></td>
              <td><a href="">G06F 9/30</a>-<a href="" title="">9/38</a>, <a href="">G06F 9/448</a></td>
            </tr>
            <tr>
              <td><a href="">G06F 9/42</a></td>
              <td><a href="">G06F 9/30</a>-<a href="" title="">9/38</a>, <a href="">G06F 9/448</a></td>
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