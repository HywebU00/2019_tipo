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
        <h2 class="title">取消電子報訂閱</h2>
        <!-- function功能區塊 -->
        <div class="function_panel">
          <!-- function功能區塊 -->
          <div class="function">
            <ul>
              <li class="back"><a href="javascript:history.back()">回上一頁</a></li>
            </ul>
          </div>
        </div>
        <!-- epaper Start -->
        <section class="epaper">
          <p>註:<abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>*</abbr>為必填(選)欄位, 不能為空白。</p>
          <form action="" class="form_grid">
            <div class="form_grp">
              <label for="" class="form_title"><abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>*</abbr>您的電子信箱：</label>
              <div class="form_content">
                <input type="text" id="" value="">
                <div class="notice_warning">這似乎不是一個正常的格式 <a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a></div>
              </div>
            </div>
            <div class="form_grp">
              <label for="" class="form_title"><abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>*</abbr>請勾選您要取消訂閱的項目：</label>
              <div class="form_content">
                <label for=""><input type="checkbox">中文電子報</label> <label for=""><input type="checkbox">英文電子報</label>  
              </div>
            </div>
            <div class="form_grp">
              <label class="form_title"><abbr class="necessary" title=“為必填(選)欄位,不能為空白。“>*</abbr>驗證碼：</label>
              <div class="form_content">
                <img src="images/basic/captcha.gif" alt="" class="captcha">
                <input type="text" id="" value="">
                <div class="notice_error">您輸入的驗證碼錯誤 <a href="javascript:;" class="close"><img src="images/basic/icon_close.svg" alt=""></a></div>
              </div>
            </div>
            <div class="btn_grp">
              <input name="" type="reset" value="清除">
              <input name="" type="submit" value="送出">
            </div>
          </form>
        </section>
        <!-- epaper End -->
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