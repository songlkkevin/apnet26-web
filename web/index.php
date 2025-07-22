<?php
    $page_title="APNET 2025";
    
    $og_tags_page = array ("og:description" => "<meta property=\"og:description\" content=\"The 9th Asia-Pacific Workshop on Networking (APNET'25) will take place August 7-8, 2025, at Shanghai, China. ".
                                               "APNet aims to bring together the very best researchers in computer networking and systems across the Asia-Pacific region and around the globe to a live forum discussing innovative ideas at their early stages. The mission of APNet is that promising but not-yet-mature ideas can receive timely feedback from the community and experienced researchers, leading them into publications at major conferences such as SIGCOMM, NSDI, SOSP, OSDI, MobiCom, and CoNEXT.".
                                               "We invite submissions of papers (up to 6 pages, excluding references) on a wide range of networking research topics.\" />");
    include("include/header.php");
?>

<img src="images/background.png" alt="painting" width="100%">

<p style="text-align: justify; text-indent: 2em;"> The 9<sup>th</sup> Asia-Pacific Workshop on Networking (APNET'25) will take place August 7-8, 2025, at Shanghai, China. APNet aims to bring together the very best researchers in computer networking and systems across the Asia-Pacific region and around the globe to a live forum discussing innovative ideas at their early stages. The mission of APNet is that promising but not-yet-mature ideas can receive timely feedback from the community and experienced researchers, leading them into publications at major conferences such as SIGCOMM, NSDI, SOSP, OSDI, MobiCom, and CoNEXT.  APNET'25 is co-located with <a href="https://apnet2025-preday.fnil.ac.cn">The 1st Frontier Forum on Networking and Intelligent Technologies</a>.</p>
<!-- <p>We invite submissions of papers <font color="red">(up to 6 pages, excluding references)</font> on a wide range of networking research topics.</p> -->

<!-- <p align="center"><br/><a href="statement-ec.php">Statement by the SIGCOMM Executive Committee</a> and</br><a href="message.php">Message from the General Chairs</a> on the relocation to Florian&oacute;polis</p> -->
<br>

<p style="text-align: justify;"><b>Important Notice:</b> APNET 2025 will transition to the ACM Open Access publishing model starting January 1, 2026; authors must meet Open Access requirements detailed on the <a href="https://www.acm.org/publications/openaccess">ACM website</a>. For more questions, please visit the <a href="https://conferences.sigcomm.org/events/apnet2025/qaAcmOpen.php">ACM Open Access Q&A page</a>.</p>


<h2>News</h2>

<?php include("include/news.php"); ?>

<!--<h2>Conference Schedule</h2>

<a href="files/schedule-2016-08-10.pdf" rel="external"><img src="files/schedule-2016-08-10.png" alt="ACM SIGCOMM 2016 - Detailed Conference Schedule" style="width: 100%;"></a>

<h2>Calendar</h2>

<iframe src="https://calendar.google.com/calendar/embed?title=ACM%20SIGCOMM%20Agenda&amp;showTitle=0&amp;showPrint=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;hl=en&amp;bgcolor=%23ffffff&amp;src=fgkdoih822v80dfk304pt56fjo%40group.calendar.google.com&amp;color=%23125A12&amp;ctz=America%2FSao_Paulo" style="border-width:0" width="100%" height="400" frameborder="0" scrolling="no"></iframe>-->

<h2>Important Dates</h2>

<?php include("include/dates.php"); ?>

<h2>Sponsors</h2>



<!--<div class="sponsors">
    <a href="//www.cse.hkust.edu.hk/"><img src="images/sponsors/hkustcse.png" alt="HKUST CSE" style="width: 280%;" /></a>
    <a href="//www.acm.org/"><img src="images/sponsors/acm.jpeg" alt="In-cooperation with ACM" /></a>
	<a href="//www.sigcomm.org/"><img src="images/sponsors/sig.png" alt="ACM SIGCOMM" /></a>
    <a href="//www.sigmobile.org/"><img src="images/sponsors/sigmobile.gif" alt="ACM SIGMOBILE" style="width: 28%;" /></a>
    
</div>

<div class="sponsors" style="display: flex; flex-wrap: wrap; justify-content: space-between;">
    <a href="//www.cse.hkust.edu.hk/" style="flex: 0 0 200%;"><img src="images/sponsors/hkustcse.png" alt="HKUST CSE" /></a>
    <a href="//www.acm.org/" style="flex: 0 0 33%; width: 100%;"><img src="images/sponsors/acm.jpeg" alt="In-cooperation with ACM" /></a>
    <a href="//www.sigcomm.org/" style="flex: 0 0 33%; width: 200%;"><img src="images/sponsors/sig.png" alt="ACM SIGCOMM" /></a>
    <a href="//www.sigmobile.org/" style="flex: 0 0 33%; width: 60%;"><img src="images/sponsors/sigmobile.gif" alt="ACM SIGMOBILE" /></a>
</div>-->

<style>
        .custom-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            /* width: 100%; */
        }
        .custom-row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px; /* 增加图片间的间距 */
            /* flex-wrap: wrap; */
        }
        .custom-row img {
            height: auto;
            max-width: 1000px; /* 设置默认宽度大20% */
        }
        .custom-row.first-row img {
            max-height: 60px; /* 保持第一行图片宽度 */
            width: auto;
        }
        .custom-row img.first-img {
            max-height: 60px;
            width: auto;
        }
        .custom-row img.second-img {
            max-height: 60px;
            width: auto;
        }
        .custom-row img.third-img {
            max-height: 60px;
            width: auto;
        }
        .custom-row img.four-img {
            max-height: 60px;
            width: auto;
        }
        .custom-row img.five-img {
            max-height: 60px;
            width: auto;
        }
        .custom-row img.six-img {
            max-height: 60px;
            width: auto;
        }
        @media screen and (max-width: 768px) {
            .custom-row img {
                max-width: 300px; /* 调整小屏幕时的宽度 */
            }
            .custom-row.first-row img {
                max-height: 30px;
                width: auto; 
            }
            .custom-row img.first-img {
                max-height: 30px;
                width: auto;
            }
            .custom-row img.second-img {
                max-height: 30px;
                width: auto;
            }
            .custom-row img.third-img {
                max-height: 30px;
                width: auto;
            }
            .custom-row img.four-img {
                max-height: 30px;
                width: auto;
            }
            .custom-row img.five-img {
                max-height: 30px;
                width: auto;
            }
            .custom-row img.six-img {
                max-height: 30px;
                width: auto;
            }
        }
    </style>

<div class="custom-container">
        <div class="custom-row">
            <a href="//www.sigcomm.org/"><img class="first-img" src="images/sig.png" alt="ACM SIGCOMM"/></a>
            <a href="//www.sigmobile.org/"><img class="second-img" src="images/sigmobile.jpeg" alt="ACM SIGMOBILE"/></a>
            <a href="//hkust.edu.hk/"><img class="third-img" src="images/hkust.png" alt="HKUST"/></a>
        </div>
        <div class="custom-row">
            <a href="//www.fudan.edu.cn/"><img class="four-img" src="images/fdu2.png" alt="FUDAN UNIVERSITY"/></a>
            <!-- <a href="//www.huawei.com/"><img class="five-img" src="images/huawei.png" alt="HUAWEI"/></a> -->
            <a href="//www.alibabacloud.com/"><img class="six-img" src="images/alicloud.png" alt="ALIBABA CLOUD"/></a>
        </div>
    </div>

<!-- <div class="sponsor">
    <div class="row">
    <a href="//www.cse.hkust.edu.hk/"><img src="images/sponsors/hkustcse.png" alt="HKUST CSE" class="full-width" style="width: 100%;"/></a>
    </div>
    <div class="row">
        <a href="//www.huawei.com/"><img src="images/sponsors/huawei_logo.png" alt="HUAWEI" style="width: 28%; margin-left: 40px;"/></a>
        <a href="//www.acm.org/"><img src="images/sponsors/acm.jpeg" alt="In-cooperation with ACM" style="width: 240%;  margin-left: 80px;"/></a>
    </div>
    <div class="row">
        <a href="//www.sigmobile.org/"><img src="images/sponsors/sigmobile.gif" alt="ACM SIGMOBILE" style="width: 28%; margin-left: 20px;"/></a>
        <a href="//www.sigcomm.org/"><img src="images/sponsors/sigcomm.png" alt="ACM SIGCOMM" style="width: 50%; margin-left: 80px;"/></a>
    </div>
</div> -->

<!-- 
<div class="sponsor">
    <div class="row">
    <a href="//www.cse.hkust.edu.hk/"><img src="images/sponsors/hkustcse.png" alt="HKUST CSE" class="full-width" style="width: 100%;"/></a>
    </div>
    <div class="row">
        <a href="//www.acm.org/"><img src="images/sponsors/acm.jpeg" alt="In-cooperation with ACM" style="width: 100%;"/></a>
        <a href="//www.sigcomm.org/"><img src="images/sponsors/sigcomm.png" alt="ACM SIGCOMM" style="width: 100%; margin-left: 80px;"/></a>
        <a href="//www.sigmobile.org/"><img src="images/sponsors/sigmobile.gif" alt="ACM SIGMOBILE" style="width: 25%; margin-left: 220px;"/></a>
    </div>
</div> -->



<?php include ("include/footer.php"); ?>
