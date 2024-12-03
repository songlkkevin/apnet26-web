<?php
    $page_title="Call for Papers";
    include("include/header.php");
    
?>

<style>
        .custom-list {
            list-style-type: none; /* 去掉默认的项目符号 */
            padding: 0;
        }
        .custom-list li {
            font-style: italic; /* 斜体 */
            position: relative;
            padding-left: 20px; /* 为点号留出空间 */
        }
        .custom-list li::before {
            content: '•'; /* 添加点号 */
            position: absolute;
            left: 0;
            color: black; /* 点号颜色 */
        }
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ACM’s Transition to 100% Open Access Publication: Frequently Asked Questions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 20px;
        }
        h1, h2 {
            color: #2c3e50;
        }
        ul {
            margin: 10px 0;
            padding-left: 20px;
        }
        a {
            color: #3498db;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>ACM’s Transition to 100% Open Access Publication: Frequently Asked Questions</h1>

    <h3>Why is ACM transitioning to 100% Open Access Publication?</h3>
    <p>In June 2020, the ACM Council, ACM’s volunteer-led Board of Directors, voted to transition ACM to a fully Open Access Publisher to remove all barriers to access, read, and download articles from the ACM Digital Library within a 5-year timeframe, provided the transition can be done in a financially sustainable way.</p>

    <h3>When will the new model be implemented?</h3>
    <p>ACM has already started transitioning some non-ACM International Conference Proceedings Series (ICPS) conferences to the new mandatory Open Access model in 2024 with the remainder transitioning in 2025.</p>

    <h3>What is the difference between the current Hybrid Open Access model and the new 100% Mandatory Open Access model?</h3>
    <p>The current model, launched in 2013, gives authors the option of publishing on an Open Access basis. The new model will require all published papers to be Open Access, funded through one of the following:</p>
    <ul class="custom-list">
        <li><a href="https://libraries.acm.org/acmopen/open-participants">ACM Open</a></li>
        <li>Author Paid APCs</li>
        <li>Automatic or Discretionary APC Waivers</li>
    </ul>

    <h3>What papers will be subject to the new Open Access Model?</h3>
    <p>All APC-eligible papers will be subject to the new Open Access requirements. For details, see <a href="https://www.acm.org/publications/openaccess">ACM Open Access</a>.</p>

    <h3>I am an author of an accepted paper from an ACM Publication. Will there be changes to the author eRights selection process as from January 1, 2026?</h3>
    <p>Yes. ACM will eliminate the exclusive license option starting January 1, 2026, and apply Creative Commons licenses to all published papers.</p>

    <h3>Why make these changes?</h3>
    <p>There is general consensus that for published research to be truly Open Access, authors must retain copyright to their published papers.</p>

    <h3>I am an author submitting a paper to an ACM conference, journal, or magazine in 2024 and 2025. Will my paper submission be subject to the new Open Access requirement that goes into effect in 2026?</h3>
    <p>If your paper is published before January 1, 2026, and the corresponding author is affiliated with an ACM Open institution, it will be published as Open Access without APC charges.</p>

    <h3>As an author, will I be required to pay an Article Processing Charge (APC) when I publish with ACM after January 1, 2026?</h3>
    <p>After January 1, 2026, authors will have three ways to publish with ACM:</p>
    <ul class="custom-list">
        <li>Affiliation with an ACM Open Institution</li>
        <li>Paying the applicable <a href="https://www.acm.org/publications/openaccess">Article Processing Charge</a></li>
        <li>Qualifying for an automatic or discretionary waiver</li>
    </ul>

    <h3>I am the organizer of an ACM conference. When and how should I start to notify authors of the new Open Access requirements?</h3>
    <p>For all ACM conferences whose proceedings will be published after January 1, 2026, notifications must prominently display information about the Open Access requirement.</p>

    <h3>I am the organizer of a non-ACM sponsored conference and plan to apply to ACM for publication of my conference’s Proceedings in the International Conference Proceedings Series (ICPS). Where can I find further information?</h3>
    <p>Refer to the detailed <a href="https://www.acm.org/publications/icps/organizer-guidance">Guidance for Conference Organizers</a>.</p>
</body>
</html>


<?php include ("include/footer.php"); ?>
