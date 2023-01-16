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
        <!-- function功能區塊 -->
        <?php require_once('include/function.html'); ?>
        <div class="investigation_banner"><img src="images/investigation.png" alt=""></div>   
        <section class="investigation">
          <div class="left_block">
            <div class="left_login">
              <span class="name">dgoc</span>
              <a href="" class="btn">登出</a>
            </div>
            <div class="left_menu">
              <ul>
                <li><a href="">本局業務諮詢聯繫人員名單本局業務諮詢聯繫人員名單</a>
                  <ul>
                    <li><a href="#">次選單次選單</a></li>
                    <li><a href="">次選單次選單</a></li>
                    <li><a href="">次選單次選單</a></li>
                    <li><a href="">次選單次選單</a></li>
                  </ul>
                </li>
                <li><a href="">來源識別碼事業單位名單</a>
                  <ul>
                    <li><a href="#">次選單次選單</a></li>
                    <li><a href="">次選單次選單</a></li>
                    <li><a href="">次選單次選單</a></li>
                    <li><a href="">次選單次選單</a></li>
                  </ul>
                </li>
                <li><a href="">智慧財產權研習專業課程講義</a></li>
                <li><a href="">查緝實務</a></li>
                <li><a href="">新知資訊</a></li>
                <li><a href="">商標及著作權代理人聯繫</a></li>
                <li><a href="">獎勵規定</a></li>
                <li><a href="">相關法規</a></li>
                <li><a href="">相關函釋</a></li>
                <li><a href="">資料統計</a></li>
                <li><a href="">相關網站</a></li>
              </ul>
            </div>
          </div>
          <div class="right_block">
            <!-- h2節點 -->
            <h2 class="title">相關函釋條件查詢 sp3_4 專區_qp條件查詢</h2>
            <!-- function功能區塊 -->
            <?php require_once('include/function.html'); ?>
            <!-- QP Start -->
            <section class="qp">
              <p>註:<abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>為必填(選)欄位, 不能為空白。</p>
              <form action="" class="form_grid">

                <div class="form_grp">
                  <label for="" class="form_title">年度：</label>
                  <div class="form_content form_inline">
                    <select name="" id="">
                      <option value=""></option>
                      <option value=""></option>
                      <option value=""></option>
                    </select>
                  </div>
                </div>
                <div class="form_grp">
                  <label for="" class="form_title">發布日期：</label>
                  <div class="form_content form_inline">
                    <input name="" type="text" value="" id="calendarStart" placeholder="開始日期"><a href="" class="btn_calendar"></a> ~
                    <input name="" type="text" value="" id="calendarEnd" placeholder="結束日期"><a href="" class="btn_calendar"></a>
                  </div>
                </div>
                <div class="form_grp">
                  <label for="" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>標題：</label>
                  <div class="form_content">
                    <input type="text" id="" value="" placeholder="請輸入標題">
                  </div>
                </div>
                <div class="form_grp">
                  <label for="password" class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>內文：</label>
                  <div class="form_content">
                    <textarea name="" id="" cols="30" rows="10" placeholder="請輸入內文"></textarea>
                  </div>
                </div>
                <div class="form_grp">
                  <label class="form_title"><abbr class="necessary" title="為必填(選)欄位,不能為空白。">*</abbr>驗證碼：</label>
                  <div class="form_content">
                    <img src="images/basic/captcha.gif" alt="" class="captcha">
                    <input type="text" id="" value="">
                  </div>
                </div>
                <div class="btn_grp">
                  <input name="" type="reset" value="清除">
                  <input name="Search" type="submit" value="送出">
                </div>
              </form>
            </section>
            <!-- QP End -->
          </div>
        </section>
        <!-- satisfaction 滿意度調查 -->
        <?php require_once('include/satisfaction.html'); ?>
        <!-- investigation End -->
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