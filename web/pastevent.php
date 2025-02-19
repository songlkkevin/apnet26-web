<?php
    $page_title="Past events";
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

<h1>Past events</h1>

<!-- https://conferences.sigcomm.org/events/apnet2024/banquet.php -->

<!-- https://conferences.sigcomm.org/events/apnet2023/banquet.html -->
				

<?php include ("include/footer.php"); ?>
