<?php
    $page_title="Program Committee";
    include("include/header.php");
?>
<h1>Program Committee</h1>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">PC Co-Chairs</li>
  <?php
    add_listitem("Sujata Banerjee", "Microsoft Research", "https://www.microsoft.com/en-us/research/people/sujbanerjee/");
    add_listitem("Yiting Xia", "Max Planck Institute for Informatics", "https://sites.google.com/view/yitingxia/home");
  ?>
  <!-- <li data-role="list-divider">PC Members</li>
  <?php
    add_listitem("Danyang Zhuo", "Duke University", "https://danyangzhuo.com/");
  ?> -->
</ul>

<?php include ("include/footer.php"); ?>