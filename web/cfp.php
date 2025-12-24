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

<br>
<p style="text-align: justify; text-indent: 2em;">The 10<sup>th</sup> Asia-Pacific Workshop on Networking (APNet'26) will take place August 6-7, 2026, at Osaka, Japan. APNet aims to bring together the very best researchers in computer networking and systems across the Asia-Pacific region and around the globe to a live forum discussing innovative ideas at their early stages. The mission of APNet is that promising but not-yet-mature ideas can receive timely feedback from the community and experienced researchers, leading them into publications at major conferences such as SIGCOMM, NSDI, SOSP, OSDI, MobiCom, and CoNEXT.</p>

<br>

<p style="text-align: justify; text-indent: 2em;">We invite submissions of papers on a wide range of networking research, including, but not limited to:</p>
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

<h2>Submission Instructions</h2>
                <br>
<p style="text-align: justify; text-indent: 2em;">Submissions must be no longer than <b>6 pages</b>, including all content except references, and must be formatted in the standard <b>ACM two-column conference style</b> with a <b>10-pt font</b>. Authors should use the provided <b>LaTeX template</b> (available as a <a href="files/APNet26_Template.zip" download target="_blank">ZIP file</a> or on <a href="https://www.overleaf.com/project/69495b1f04a01366845359f3" target="_blank">Overleaf</a>) to create a printable PDF for submission.</p>

<p style="text-align: justify; text-indent: 2em;">Reviewing will be <b>double-blind</b>: author names and affiliations must not appear in the submission. Previous papers by the authors should be cited either (1) in the third person or (2) anonymously, with the corresponding deanonymized citations indicated in the submission form. If the submission includes links to open-source code, the linked sites must not reveal the identity or organization of the authors. Authors should also follow best practices to avoid implicitly disclosing their identities.</p>

<p style="text-align: justify; text-indent: 2em;">Papers may present preliminary results but must include <b>novel ideas</b> and differ significantly from previously published work. In line with standard scholarly practices, authors must not have substantially similar work under review at another venue. However, an extended version of an APNet submission&mdash;with a complete implementation and additional experiments&mdash;may be submitted simultaneously to another venue. Accepted papers will appear in the workshop proceedings, which will be published in the ACM Digital Library.</p>

<p style="text-indent: 2em;">Submissions should be made online at <a href="https://apnet26.hotcrp.com/">https://apnet26.hotcrp.com/</a>.</p>

<br>
<h2>Generative AI Use</h2>
<br>
<p style="text-align: justify; text-indent: 2em;">Authors must not submit papers produced entirely or substantially by generative AI. However, the use of AI tools for editing and improving the grammar or clarity of authors' own human-written text is permitted. For any questions regarding the appropriate use of generative AI, please contact the program chairs.</p>

<br>
<h2>Important Dates</h2>
<?php include("include/dates.php"); ?>

<!--<a href="files/cfp.pdf" rel="external" data-role="button" class="dl-button button">Download this call as a PDF</a>-->

<?php include ("include/footer.php"); ?>
