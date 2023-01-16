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
        <h2 class="title">問卷調查 sp2_3 問卷統計結果</h2>
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
              <div class="title">1.您對本次座談會準備之資料內容是否滿意（複選題）</div>
              <table class="result_bar">
                <tr>
                  <th scope="row">很滿意</th>
                  <td><div class="barbg"></div></td>
                  <td class="percent">34.7%</td>
                  <td>16票</td>
                </tr>
                <tr>
                  <th scope="row">滿意</th>
                  <td><div class="barbg"></div></td>
                  <td class="percent">65.21%</td>
                  <td>30票</td>
                </tr>
                <tr>
                  <th scope="row">不滿意</th>
                  <td><div class="barbg"></div></td>
                  <td class="percent">0%</td>
                  <td>0票</td>
                </tr>
                <tr>
                  <th scope="row">很不滿意</th>
                  <td><div class="barbg"></div></td>
                  <td class="percent">0%</td>
                  <td>0票</td>
                </tr>
              </table>
            </div>
            <div class="result_block">
              <div class="title">2.您對本次座談會業務報告之講師講解方式是否滿意</div>
              <p>（1） 專利法修正草案重點說明（複選題）</p> 
              <table class="result_bar">
                <tr>
                  <th scope="row">很滿意</th>
                  <td><div class="barbg"></div></td>
                  <td class="percent">34.7%</td>
                  <td>16票</td>
                </tr>
                <tr>
                  <th scope="row">滿意</th>
                  <td><div class="barbg"></div></td>
                  <td class="percent">65.21%</td>
                  <td>30票</td>
                </tr>
                <tr>
                  <th scope="row">不滿意</th>
                  <td><div class="barbg"></div></td>
                  <td class="percent">0%</td>
                  <td>0票</td>
                </tr>
                <tr>
                  <th scope="row">很不滿意</th>
                  <td><div class="barbg"></div></td>
                  <td class="percent">0%</td>
                  <td>0票</td>
                </tr>
              </table>
            </div>
            <div class="result_block">
              <div class="title">3.其他建議或改進事項（意見題）</div>
              <a href="" class="btn">查看意見內容</a>
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