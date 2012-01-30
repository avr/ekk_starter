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

            <h2>Events</h2>
            <div id="text"></div>
              <div id="calendar-outer">
            
            <!-- <div class="sermonbox">
               <h4><a href="/ekk_eventpage.php" title="click for more info on Test Event 2">Test Event 2</a></h4>
               <p class="eventtime">Friday, Apr 21, 2006, 1:00pm</p>
               <p>This is another sample event.<br /></p>
            </div>
            <div class="sermonbox">
               <h4><a href="#" title="click for more info on Test Event 1">Test Event 1</a></h4>
               <p class="eventtime">Friday, Apr 28, 2006, 1:00pm</p>
               <p>This is a sample event.</p>
            </div> -->

            <table class="calendar">
               <caption class="calendar-month"><span class="calendar-prev" style="cursor: pointer;">&nbsp;&laquo;&nbsp;</span>&nbsp;January&nbsp;2007&nbsp;<span class="calendar-next" style="cursor: pointer;">&nbsp;&raquo;&nbsp;</span></caption>
               <tr>
                  <th abbr="Sunday">Sun</th>
                  <th abbr="Monday">Mon</th>
                  <th abbr="Tuesday">Tue</th>
                  <th abbr="Wednesday">Wed</th>
                  <th abbr="Thursday">Thu</th>
                  <th abbr="Friday">Fri</th>
                  <th abbr="Saturday">Sat</th>
               </tr>
               <tr>
                  <td colspan="1" class="empty">&nbsp;</td>
                  <td>1</td>
                  <td class="linked-day" >
                     <a href="/ekk_events.php">2</a>
                     <ul class="dayEventNames" id="inDay012">
                        <li><a href="/ekk_eventpage.php">Mens Breakfast</a></li>
                     </ul>
                  </td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>6</td>
               </tr>
               <tr>
                  <td>7</td>
                  <td>8</td>
                  <td class="linked-day" >
                     <a href="/ekk_events.php/">9</a>
                     <ul class="dayEventNames" id="inDay019">
                        <li><a href="/ekk_eventpage.php">Mens Breakfast</a></li>
                        <li><a href="/ekk_eventpage.php">Mens Breakfast</a></li>
                     </ul>
                  </td>
                  <td>10</td>
                  <td>11</td>
                  <td>12</td>
                  <td>13</td>
               </tr>
               <tr>
                  <td>14</td>
                  <td>15</td>
                  <td class="linked-day" >
                     <a href="/ekk_events.php">16</a>
                     <ul class="dayEventNames" id="inDay0116">
                        <li><a href="/ekk_eventpage.php">Mens Breakfast</a></li>
                     </ul>
                  </td>
                  <td>17</td>
                  <td>18</td>
                  <td>19</td>
                  <td>20</td>
               </tr>
               <tr>
                  <td>21</td>
                  <td>22</td>
                  <td class="linked-day" >
                     <a href="/ekk_events.php">23</a>
                     <ul class="dayEventNames" id="inDay0123">
                        <li><a href="/ekk_eventpage.php">Mens Breakfast</a></li>
                     </ul>
                  </td>
                  <td>24</td>
                  <td>25</td>
                  <td>26</td>
                  <td>27</td>
               </tr>
               <tr>
                  <td>28</td>
                  <td>29</td>
                  <td class="linked-day" >
                     <a href="/ekk_events.php">30</a>
                     <ul class="dayEventNames" id="inDay0130">
                        <li><a href="/ekk_eventpage.php">Mens Breakfast</a></li>
                     </ul>
                  </td>
                  <td>31</td>
                  <td colspan="3" class="empty">&nbsp;</td>
               </tr>
            </table>
            </div><!-- #calendar-outer -->
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