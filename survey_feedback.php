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
        <h2 class="title">問卷調查 sp2_4 問卷統計結果-意見回饋</h2>
        <!-- function功能區塊 -->
        <?php require_once('include/function.html'); ?>
        <section class="survey">
          <div class="info">
            <table summary="">
              <tr>
                <th>問卷主題：</th>
                <td>「107年度智慧財產權業務座談會」問卷調查(臺北場)</td>
              </tr> 
              <tr>
                <th>說明：</th>
                <td>各位女士、先生：<br>為了瞭解您對本座談會及本局業務之建議與意見，我們特別製作本份問卷，請您撥冗填寫，您的意見將作為我們未來推動各項業務之重要參考。謝謝您!</td>
              </tr>
              <tr>
                <th>調查日期：</th>
                <td>108-01-01～109-01-01</td>
              </tr>
            </table>            
          </div>
          <div class="survey_result">
            <h2>統計結果<span>投票人數：46人</span></h2>
            <div class="result_block">
              <div class="title">3.其他建議或改進事項（意見題）</div>
              <ol>
                <li>書面(email)意見表，沒有回答。</li>
                <li>貴局既已要求各申請書入局時，需加上「日商」、「美商」，為何收到首次OA時，無法加註「日商」等外商國別名？</li>
                <li>目前生物的序列表是圖形格式，能否改以文字格式，並在檢索系統提供「序列表」查詢功能？</li>
                <li>1.會場可否提供溫(冷)開水，或是可否以指示說明，指引參加者至何處取用。 2.file wrapper(各國)是否都是free for檢索？ 若是的話可否在TIPO網頁上提供重要國家的專利申請file wrapper網址(連結)，能再提供專利訴訟判決資料庫的網址連結也不錯。</li>
                <li>建議舉辦全球專利檢索系統使用課程。</li>
                <li>辛苦了，謝謝!</li>
              </ol>
            </div>
          </div>
        </section>
        <!-- survey End -->
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