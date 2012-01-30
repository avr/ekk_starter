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
            <h2>Articles</h2>
            <div id="text"></div>
            <div class="sermonbox alt">
               <h4 class="title"><a href="/ekk_articlepage.php">Test Article 1</a></h4>
               <p>April 2, 2006</p>
               <p>Test Author</p>
               <p>Test Article 1 summary</p>
            </div>
            <div class="sermonbox">
               <h4 class="title"><a href="/ekk_articlepage.php">Test Article 2</a></h4>
               <p>April 2, 2006</p>
               <p>Test Author</p>
               <p>Test Article 2 summary</p>
            </div>
      </section> <!-- #content -->
      <aside id="sidebar">
        
      </aside> <!-- #sidebar -->
    </div> <!-- #content-wrap -->
  </div> <!-- #main-container -->
  
  <div id="footer-container">
    <?php include($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php") ?>
  </div> <!-- #footer-container -->

  <?php include($_SERVER["DOCUMENT_ROOT"]."/_inc/scripts.php") ?>
</body>
</html>