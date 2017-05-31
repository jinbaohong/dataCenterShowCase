<!doctype html>
<html lang="en">
<head>
    <script src="http://d3js.org/d3.v3.min.js" charset="utf-8"></script>
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <meta charset="UTF-8">
    <title>DATA CENTER</title>
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto+Condensed:400,300,700">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div id="wrapper">
        <!--圖片區域 -->
        <div id="headerTopicContainer">
            <div class="inner">
                <img src="img/01_n.jpg" alt="">
            </div>
        </div>
        <!--選單區域 -->
        <header id="headerContainer">
            <div class="inner">
                <h1 id="siteID">DATA CENTER <span class="small">knows everything</span></h1>
                <nav id="navigation">
                    <ul >
                        <li><a href=<?php echo $_SERVER['PHP_SELF'] ?>>Repositories</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--內容區域 -->
        <div id="contentContainer">
            <div id="entriesContainer" class="inner">
                <article class="post">
<div class="entry-thumbnail"><img alt="" src="img/article/article1_n.png"></div>
<div class="entry-contentContainer">
<header class="entry-header">
<h1 class="entry-title"><a href="#"rel="bookmark">Exhibition Analysis</a></h1>
</header>
<div class="entry-content clearfix">
<p>This is repository for exhibition.</p>
<p class="read_the_rest"><a target="_blank" class="btn" id="exhibition">More... <span class="glyphicon glyphicon-chevron-right"></span></a></p>
</div>
</div>
</article>
                <article class="post">
<div class="entry-thumbnail"><img alt="" src="img/article/article2_n.png"></div>
<div class="entry-contentContainer">
<header class="entry-header">
<h1 class="entry-title"><a href="#"rel="bookmark">Green Trade Analysis</a></h1>
</header>
<div class="entry-content clearfix">
<p>Basically, this is about GA </p>
<p class="read_the_rest"><a target="_blank" class="btn" id="greenTrade">More... <span class="glyphicon glyphicon-chevron-right"></span></a></p>
</div>
</div>
</article>
                <article class="post">
<div class="entry-thumbnail"><img alt="" src="img/article/article3_n.png"></div>
<div class="entry-contentContainer">
<header class="entry-header">
<h1 class="entry-title"><a href="#"rel="bookmark">Taiwan Excellence</a></h1>
</header>
<div class="entry-content clearfix">
<p>This project just show how table will be </p>
<p>shown in this page.</p>
<p class="read_the_rest"><a target="_blank" class="btn" id="taiwanEx">More... <span class="glyphicon glyphicon-chevron-right"></span></a></p>
</div>
</div>
</article>
            </div>
            <!--/entriesContainer -->
        </div>
        <!--/contentContainer -->
        <footer id="footerContainer">
            <div class="inner">
                <p id="copyright">Copyright&copy; Jinbao All Rights Reserved.</p>
            </div>
        </footer>
        <!-- /footer -->
    </div>
    <!--/wrapper -->

    <script src="js/script.js"></script>
</body>
</html>
