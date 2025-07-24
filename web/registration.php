<?php
    $page_title="Registration Information";
    include("include/header.php");
?>

<h1>Registration</h1>

<p>&nbsp;</p>

<p>Registration is done through: <a href="https://s.31url.cn/CYsuu1jv" rel="external">Registration Portal</a>.</p>
<!-- <br> -->
<!-- <p>Relevant rules will be announced soon.</p> -->

<p>Early-bird registration deadline is June 30, Anywhere on Earth.</p>
<p><del>Registration deadline is July 23, Anywhere on Earth.</del> </p>

<p>&nbsp;</p>

<p style="text-align: justify;">
  Here is some preliminary information about registration prices and categories. All fees are in US Dollars. 
</p>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="registration">
  <li data-role="list-divider">Registration fee (Early Registration is before June 30th, 2025, Anywhere on Earth)</li>
  <?php
    add_registrationheader("Event", "ACM Member", "Non-member", "Student Member", "Student Non-member");
    add_registrationitem  ("Early Registration", "550", "600", "350", "400");
    add_registrationitem  ("Late Registration", "600", "650", "400", "450");
  ?>
</ul>

<h2>A Special Note on Author Registration Policy</h2>

<p style="text-align: justify;">Each accepted paper must be accompanied by at least one full registration regardless of the status of the registering author, and an author must present the paper at the conference. Otherwise, the paper will be removed from the proceedings and ACM digital library. Please note that poster registration is separate; registering for a regular paper does not include poster registration, which must be done individually.</p>

<h2>Important Deadline for Accepted Papers</h2>
<p style="text-align: justify;"> Each accepted paper must complete full registration by July 10th, Anywhere on Earth, to ensure inclusion in the conference proceedings and ACM Digital Library.</p>

<h2>Cancellation Policy</h2>

<p style="text-align: justify;">All the payments are non-cancellable, non-refundable, and non-transferable after July 23. Refunds processed before this date will incur a US$100 administrative fee. For more information, please contact finance chair <a href="mailto:yangrw@pcl.ac.cn">RongWei Yang</a>.</p>

<!-- <h2>Student travel grants</h2>

<style>
ul {
  list-style-type: disc; /* 使用圆点作为列表项标记 */
  padding-left: 20px; /* 确保有足够的空间显示圆点 */
}
</style>


<p style="text-align: justify;">APNet offers several student travel grants which cover the APNet conference registration (fully or partially). All applications will be reviewed based on the available budget and number of applications, which will determine the acceptance criteria.</p>
<h3>Important dates</h3>
<ul>
  <li><b>Deadline for application:</b> <del>Saturday, June 1</del> <font color="red">Friday, June 14</font>, 2024</li>
  <li><b>Notification of acceptance:</b> <del>Saturday, June 8</del> <font color="red">Tuesday, June 18</font>, 2024</li>
</ul>

<h3>Application</h3>
<p style="text-align: justify;">Applications have to be submitted by email to <a href="mailto:apnet2024-travelgrant@outlook.com">apnet2024-travelgrant@outlook.com</a>. The "Subject" line should contain "APNET 2025 grant application" and the student's name. The following information is requested from all applicants:</p>
<ul>
  <li>Author (only one): give your name, email, and affiliation;</li>
  <li>Participation in APNET 2025: describe briefly your participation in APNet;</li>
  <li>Motivation statement: a short explanation of the expected benefits from attending the conference and why the grant should be awarded. The statement should describe ongoing research and recent papers published by the applicant. It should be written in English and no longer than one page;</li>
  <li>A letter of recommendation from the advisor supporting the application. The advisor's statement should be sent separately from the student's application by e-mail to <a href="mailto:apnet2024-travelgrant@outlook.com">apnet2024-travelgrant@outlook.com</a>. The "Subject" line should contain "APNeT2024 grant recommendation" and the student's name.</li>
</ul>

<h3>Note</h3>
<p style="text-align: justify;">Receivers of an APNet Grant will register with a special promotion code. Therefore, applicants shall not register for the conference until they have received the notification of acceptance from the grant chair (sent before the early registration deadline).</p> -->

<?php include ("include/footer.php"); ?>
