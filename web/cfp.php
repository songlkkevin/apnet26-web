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

<h1>Call for Papers</h1>

<p>The 9<sup>th</sup> Asia-Pacific Workshop on Networking (APNet’25) will be held in Shanghai, China on August 7-8, 2025. Building on the success of its predecessors, APNet’25 will continue to bring together the very best researchers in computer networking and systems across the Asia-Pacific region and around the globe to a live forum discussing innovative ideas at their early stages. The mission of APNet is that promising but not-yet-mature ideas can receive timely feedback from the community and experienced researchers, leading them into publications at major conferences such as SIGCOMM, NSDI, SOSP, OSDI, EuroSys, MobiCom, and CoNEXT.</p>

<br>

<p>We invite submissions of short papers <font color="red">(up to 6 pages, excluding references)</font> on a wide range of networking research, including, but not limited to:</p>
				<ul class="custom-list">
  <li style="font-style: italic;">Network architectures and algorithms</li>
  <li style="font-style: italic;">Cloud and wide-area networking systems &amp; infrastructure</li>
  <li style="font-style: italic;">Networking for Machine Learning and Machine Learning for Networking</li>
  <li style="font-style: italic;">Operating system support for networking</li>
  <li style="font-style: italic;">High-speed networking and applications</li>
  <li style="font-style: italic;">Domain-specific networks including datacenter, storage, intra-host networks, etc.</li>
  <li style="font-style: italic;">SDN, NFV, and network programming</li>
  <li style="font-style: italic;">Networking hardware design and application</li>
  <li style="font-style: italic;">Network measurement, monitoring, diagnosis, and operations</li>
  <li style="font-style: italic;">Formal methods and network verification</li>
  <li style="font-style: italic;">Network security and privacy, censorship, transparency</li>
  <li style="font-style: italic;">Network, transport, and application-layer protocols</li>
  <li style="font-style: italic;">Resource management, QoS, and signaling</li>
  <li style="font-style: italic;">Routing, traffic engineering, switching, and addressing</li>
  <li style="font-style: italic;">Wireless, mobile, and sensor networking</li>
  <li style="font-style: italic;">Programmable End Host (e.g., eBPF, SmartNics)</li>
</ul>

<br>

<p>The APNet Technical Program Committee will evaluate submissions based on their novelty, significance, and technical merit, rather than completeness. Innovative and well-reasoned ideas supported by preliminary evaluations are sufficient for APNet. We encourage authors to further develop their APNet papers with robust implementations and experiments, aiming for publication in the aforementioned premier conferences.</p>

<h2>Submission Instructions</h2>
				<!--<p><b><a href="https://apnet24.hotcrp.com">https://apnet24.hotcrp.com</a> is open for registration and submission.</b></p>-->
				<!-- <p><b><a href="https://apnet24.hotcrp.com">https://apnet24.hotcrp.com</a> is open now.</b></p> -->


<p>Submissions must be no longer than 6 pages in length including all content except references, formatted in standard ACM two-column conference style with 10-pt font size. Authors should consult the <a href="https://www.acm.org/publications/proceedings-template">ACM website</a> for the up to date template. Reviewing will be double-blind: no author or affiliation information should appear in the submission. The authors should additionally follow the best practice in order not to disclose their identities implicitly. Papers may present preliminary results but must include novel ideas and differ significantly from previously published work. In line with standard scholarly practices, authors should not have substantially similar work under review elsewhere. However, an extended version of the APNet submission, with a complete implementation and additional experiments, can be submitted simultaneously to another venue. Accepted papers will appear in the proceedings of the workshop, which will be published in the ACM Digital Library.</p> 

<br>

<p>Submissions can be made online at <a href="https://apnet25.hotcrp.com">https://apnet25.hotcrp.com/</a>.</p>


<h2 >Important dates</h2>
<?php include("include/dates.php"); ?>
<!--<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="datetbl">
    <?php add_dateitem("January 22, 2016", "Abstract due"); ?>
    <?php add_dateitem("January 29, 2016", "Complete paper submissions due"); ?>
    <?php add_dateitem("April 22, 2016", "Notification to authors"); ?>
    <?php add_dateitem("Late May, 2016", "Final papers due"); ?>
</ul>-->

<!--<a href="files/cfp.pdf" rel="external" data-role="button" class="dl-button button">Download this call as a PDF</a>-->

<!-- <h2>Camera-Ready Instructions</h2>
	
				<p>Please note any change in title or authorship must be <b>APPROVED BY the PC CHAIRS</b>. This is to ensure that our publication accurately reflects any updates.</p>
				
				<p>The page limit for the final paper is 6 pages, excluding references. For the final paper, please use the <a href="http://www.acm.org/publications/proceedings-template">official ACM Article template</a>, and make sure to use 9 pt font. Please do NOT use copies of these templates that you might find elsewhere since we cannot be sure that those are compliant.</p>
				
				<p>As described on the above template webpage, the authors should provide proper indexing information in the final version according to the ACM Computing Classification System (CCS). More information about the ACM CCS is available at <a href="http://www.acm.org/publications/class-2012">ACM CCS website</a>.</p>
	
				<p>The authors must insert the correct rights management text and bibliographic strip into the final paper. The ACM will use its automated system to email this information to the authors. Please set your email spam settings to allow messages from "rightsreview@acm.org". <b>For papers that are conditionally accepted with shepherding, the copyright forms will be available after the shepherding outcome</b>.</p>
				
				<p>If you have any questions about the camera-ready process, feel free to contact APNET 2025 publication chair <a href="https://huhuzizi.github.io/jinbinhu.github.io/index.html">Jinbin Hu</a>.</p> -->
				

<?php include ("include/footer.php"); ?>
