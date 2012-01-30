<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title></title>
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/_inc/head.php"); ?>
</head>

<body class="two-col">
  <div id="header-container">
    <?php include($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php") ?>
  </div> <!-- #header-container -->
  
  <div id="main-container">
    <div id="content-wrap">
      <section id="content">

            <h2>Test Sermon 1</h2>
              <ul id="byline">
                <li id="bl_passage">Genesis 1:1</li>
                <li id="bl_preacher"><a href="#">Test Preacher</a></li>
                <li id="bl_date">Testmonth 12, 2009</li>
                <li id="bl_series">Series: <a href="#">Test Series</a></li>
                <li id="bl_category">Categories: <a href="#">Test Category</a></li>
              </ul>

              <ul id="mediabox">
                 <li id="mb_listen"><a href="#">Listen</a></li>
                 <li id="mb_download"><a href="#">Download</a></li>
                 <li id="mb_video"><a href="#">Video</a></li>
                 <li id="mb_notes"><a href="#">Notes</a></li>
              </ul>

            <div id="text">
              <p>Test Sermon 1 Content</p>
            </div>
          
      </section> <!-- #content -->
      <aside id="sidebar">
        <?php include($_SERVER["DOCUMENT_ROOT"]."/_inc/sidebar_sermons.php") ?>
      </aside> <!-- #sidebar -->
    </div> <!-- #content-wrap -->
  </div> <!-- #main-container -->
  
  <div id="footer-container">
    <?php include($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php") ?>
  </div> <!-- #footer-container -->

  <?php include($_SERVER["DOCUMENT_ROOT"]."/_inc/scripts.php") ?>
</body>
</html>