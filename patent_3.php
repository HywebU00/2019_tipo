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
            <tr>
              <th scope="row"><a href="">A01B</a></th>
              <td>農業或林業之整地；一般農業機械或農具之部件、零件或附件（播種、種植或施肥時之開溝、挖坑或平溝、填抗見A01C5/00；用於收獲根用作物的機械見A01D；可變換成整地設備或能夠整地的割草機見A01D 42/04；與整地機具聯合的割草機見A01D43/12；工程目的之整地見E01、E02、E21）</td>
            </tr>
            <tr>
              <th scope="row"><a href="">A01C</a></th>
              <td>種植；播種；施肥（與一般整地結合者見A01B49/04；農業機械或農具之部件、零件或附件一般見A01B51/00至75/00）</td>
            </tr>
            <tr>
              <th scope="row"><a href="">A01D</a></th>
              <td>收獲；割草</td>
            </tr>
            <tr>
              <th scope="row"><a href="">A01F</a></th>
              <td>脫粒、禾桿、乾草或類似物之打捆；將禾桿、乾草形成捆或打捆的固定裝置或手動工具；禾桿、乾草或類似物的切碎；農業或園藝產品之儲藏</td>
            </tr>
            <tr>
              <th scope="row"><a href="">A01G</a></th>
              <td>園藝；蔬菜、花卉、稻、果樹、葡萄、啤酒花或海菜之栽培；林業；澆水（水果、蔬菜、啤酒花等類作物之採摘見A01D46/00；利用組織培養技術之植物再生見A01H4/00；洋蔥或花球莖之去頂或剝皮裝置見A23N15/08；繁殖單細胞藻類植物見C12N1/12；植物細胞培養見C12N5/00）</td>
            </tr>
            <tr>
              <th scope="row"><a href="">A01H</a></th>
              <td>新植物或獲得新植物之方法；藉由組織培養技術之植物再生 [5]</td>
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