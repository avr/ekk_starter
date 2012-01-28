<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title></title>
  <?php include($_SERVER["DOCUMENT_ROOT"]."/_inc/head.php") ?>
</head>

  <body>
    <div id="container">
    <?php include($_SERVER["DOCUMENT_ROOT"]."/_inc/header.php") ?>
      <div id="container-inner">
        <div id="content-wrap">
          <div id="content">
            <h2>Audio Sermons</h2>
            
            <div id="current-sermon">
              <h5>Featured</h5>
              <ul id="mediabox">
                <li id="mb_listen"><a href="#">Listen</a></li>
                <li id="mb_download"><a href="#">Download</a></li>
                <li id="mb_video"><a href="#">Watch</a></li>
                <li id="mb_notes"><a href="#">Notes</a></li>
              </ul><!-- #mediabox -->
              <div class="sermon-meta">
                <h3><a href="/ekk_sermonpage.php">Test Sermon</a></h3>
                <p class="series">Series: <a href="#">Test Series</a></p>
                <p class="category">Category: <a href="#">Test Category</a></p>
                <p class="byline"><a href="#">Preacher</a> Testmonth 12, 2009</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
              </div><!-- .sermon-meta -->
              </div><!-- #current-sermon -->
              
              <div class="sermonbox">
              <h4><a href="/ekk_sermonpage.php">Test Sermon #1</a></h4>
                <div class="sermonmeta">
                  <p>Series: <a href="#">Test Series</a></p>
                  <p><a href="#">Preacher</a> Testmonth 12, 2009</p>
                </div><!-- .sermonmeta -->
                <ul>
                  <li class="sl_listen"><a href="#">Listen</a></li>
                  <li class="sl_download"><a href="#">Download</a></li>
                  <li class="sl_video"><a href="#">Watch</a></li>
                  <li class="sl_notes"><a href="#">Notes</a></li>
                </ul>
              </div><!-- .sermonbox -->
              
              <div class="sermonbox alt">
              <h4><a href="/ekk_sermonpage.php">Test Sermon #2</a></h4>
                <div class="sermonmeta">
                  <p>Series: <a href="#">Test Series</a></p>
                  <p><a href="#">Preacher</a> Testmonth 12, 2009</p>
                </div><!-- .sermonmeta -->
                <ul>
                  <li class="sl_listen"><a href="#">Listen</a></li>
                  <li class="sl_download"><a href="#">Download</a></li>
                  <li class="sl_video"><a href="#">Watch</a></li>
                  <li class="sl_notes"><a href="#">Notes</a></li>
                </ul>
              </div><!-- .sermonbox -->
              
              <div class="sermonbox">
              <h4><a href="/ekk_sermonpage.php">Test Sermon #3</a></h4>
                <div class="sermonmeta">
                  <p>Series: <a href="#">Test Series</a></p>
                  <p><a href="#">Preacher</a> Testmonth 12, 2009</p>
                </div><!-- .sermonmeta -->
                <ul>
                  <li class="sl_listen"><a href="#">Listen</a></li>
                  <li class="sl_download"><a href="#">Download</a></li>
                  <li class="sl_video"><a href="#">Watch</a></li>
                  <li class="sl_notes"><a href="#">Notes</a></li>
                </ul>
              </div><!-- .sermonbox -->
              
            </div> <!-- #content -->

<?php include($_SERVER["DOCUMENT_ROOT"]."/_inc/sidebar_sermons.php") ?>

        </div> <!-- #content-wrap -->
      </div> <!-- #container-inner -->
    
<?php include($_SERVER["DOCUMENT_ROOT"]."/_inc/footer.php") ?>
    
    </div> <!-- #container -->
  
    <?php include($_SERVER["DOCUMENT_ROOT"]."/_inc/scripts.php") ?>
  </body>
</html>