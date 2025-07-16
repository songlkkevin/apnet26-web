<?php
    $page_title="Academic Insight Talks";
    include("include/header.php");
?>

<h1>Academic Insight Talks</h1>

<style>
  /* 基础样式 */
  .container {
    background-color: #eaeaea;
    margin: 2em;
    border-radius: 10px;
    display: flex;
    align-items: center;
    padding: 20px;
    box-sizing: border-box;
  }
  .image-container {
    flex: 0 0 200px; /* 固定图片区域的宽度为200px */
  }
  .image-container img {
    width: 100%; 
    height: auto; 
    border: none; /* 移除边框 */
    max-height: 200px; /* 限制图片的最大高度 */
    object-fit: contain; /* 保持图片的宽高比 */
  }
  .text-container {
    flex-grow: 1; /* 文字区域占据剩余空间 */
    padding-left: 20px;
    overflow: hidden; /* 防止内容溢出 */
  }

  /* 媒体查询，用于小屏幕设备 */
  @media (max-width: 600px) {
    .container {
      flex-direction: column; /* 在小屏幕上将布局调整为垂直堆叠 */
    }
    .image-container {
      flex: 0 0 auto; /* 图片容器宽度自适应 */
    }
    .text-container {
      padding-left: 0;
      padding-top: 20px; /* 在图片下方增加一些间隔 */
    }
  }
</style>
<!-- <br> -->
<!-- <p>We are honored to have invited four professors to deliver Academic Insight Talks. Further details will be updated soon.</p> -->
<!-- <br> -->
<div class="container">
  <div class="image-container">
    <img src="images/kk.jpeg">
  </div>
  <div class="text-container">
    <h2><a href="https://kknetsyslab.cs.ucr.edu/" class="ui-link">K. K. Ramakrishnan</a ></h2>
    <p>Distinguished Professor, University of California, Riverside.</p>
    <h2>Talk Title:</h2>
    <p>Making Serverless Computing Efficient and Scalable</p>
  </div>
</div>
			<p style="text-align: justify;"><b>Abstract:</b> We have been working on Serverless Computing, a fast-growing area of cloud computing, for a few years now. Serverless computing simplifies the development, deployment, and automated management of modular software functions, exploiting the microservices paradigm while promising efficient, low-cost computing for users. Serverless computing has evolved by integrating multiple existing cloud computing software components, thus quickly offering its capabilities in the cloud, while possibly sacrificing efficiency. 

We developed SPRIGHT, to exploit event-driven shared memory processing to improve the serverless data plane’s efficiency and scalability by eliminating data copies and avoiding unnecessary protocol processing and serialization-deserialization overheads. The extended Berkeley Packet Filter (eBPF) enabled us to create true event-driven processing, especially to replace the typical heavyweight sidecar proxy used in serverless computing. After a brief recap of SPRIGHT, we will look at another aspect of our work, SURE, a unikernel-based serverless framework, to address the need for a secure data plane and fast-function startup. SURE's data plane supports distributed zero-copy communication via the seamless interaction between zero-copy protocol stack (Z-stack) and local shared memory processing. We leverage Intel's Memory Protection Keys (MPK) as a lightweight capability to ensure safe access to the shared memory data plane and the use of a library-based sidecar. We have recently extended the shared memory of our serverless computing framework to multiple nodes using RDMA to achieve even higher performance and lower latency.

 </p>
			<p style="text-align: justify;"><b>Speaker Bio:</b> Dr. K. K. Ramakrishnan is a Distinguished Professor of Computer Science and Engineering at the University of California, Riverside. Previously, he was a Distinguished Member of Technical Staff at AT&T Labs-Research. He joined AT&T Bell Labs in 1994 and was with AT&T Labs-Research since its inception in 1996. Prior to 1994, he was a Technical Director and Consulting Engineer in Networking at Digital Equipment Corporation. Between 2000 and 2002, he was at TeraOptic Networks, Inc., as Founder and Vice President. 
 
 Dr. Ramakrishnan is an ACM Fellow, IEEE Fellow, and an AT&T Fellow, recognized for his fundamental contributions to communication networks, congestion control, traffic management, VPN services, and a lasting impact on AT&T and the industry. His work on the "DECbit" congestion avoidance protocol received the ACM Sigcomm Test of Time Paper Award in 2006. K. K. received the ACM Sigcomm Lifetime Achievement Award in 2024. He has published over 300 papers and has over 180 patents issued in his name. K. K. received his MTech from the Indian Institute of Science (1978, recently recognized as one of IISc’s Distinguished Alumni), MS (1981), and Ph.D. (1983) in Computer Science from the University of Maryland, College Park, USA. 
</p>


<div class="container">
  <div class="image-container">
    <img src="images/tianchen1.jpg">
  </div>
  <div class="text-container">
    <h2><a href="https://cs.nju.edu.cn/tianchen/" class="ui-link">Chen Tian</a ></h2>
    <p>Professor, Nanjing University</p>
    <h2>Talk Title:</h2>
    <p>Congestion Management in/beyond Datacenter Networks:  Pyrrha as a case</p>
  </div>
</div>
			<p style="text-align: justify;"><b>Abstract:</b> Congestion management, including congestion control and flow control, plays a critical role in the performance of datacenter networks. Due to the growth of port bandwidth and the scale of data center applications, new opportunities appear in this classic research area. A large number of researches are published recently. In this talk, I will first briefly review the status quo. I will then present our recent progresses in this field, which stick to our own motto "Congestion Control is Dead, Long Live Flow Control". At last I will talk about possible future directions of congestion management, especially those beyond datacenter networks, e.g., inter-datacenter and intra-router networks，especially our new paper Pyrrha in NSDI 2025.

 </p>
			
			<p style="text-align: justify;"><b>Speaker Bio:</b> Chen Tian, is currently a professor and doctoral supervisor at the School of Computer Science, Nanjing University. In 2023, he was selected for the National Science Fund for Distinguished Young Scholars. His research expertise lies in computer networks and distributed systems. He has published more than 100 papers in top academic conferences and renowned international journals in the fields of computer networks and distributed systems, such as SIGCOMM, NSDI, OSDI, FAST, SIGMOD, PPoPP, and Eurosys. He proposed a congestion management concept centered on traffic control for next-generation data center networks, designed a stateful programmable network tester with independent intellectual property rights, led the realization of large-scale parallel acceleration of open-source network simulation software, and served as the rotating chairman of the OpenNetLab international network testbed.
</p>

<div class="container">
  <div class="image-container">
    <img src="images/henryXu.png">
  </div>
  <div class="text-container">
    <h2><a href="https://henryhxu.github.io/" class="ui-link">Hong Xu</a ></h2>
    <p>Associate Professor, The Chinese University of Hong Kong</p>
    <h2>Talk Title:</h2>
    <p>Mycroft: Tracing Dependencies in Collective Communication Towards Reliable LLM Training</p>
  </div>
</div>
			<p style="text-align: justify;"><b>Abstract:</b> Reliability plays an important role in LLM training to ensure high efficiency. However, many real-world reliability issues remain difficult to resolve, resulting in resource wastage and downgraded model performance. We argue that many of these issues lie in collective communications, which involve complex dependencies in distributed training. Unfortunately, collective communication libraries today are operated as a black box, hiding critical evidence towards efficient root cause analysis.

In this talk, we highlight the importance of tracing collective communication states and leveraging internal control and data dependencies to address reliability problems in LLM training. We build Mycroft, a lightweight distributed tracing and root cause analysis system to solve previously hidden reliability issues in collective communication. Mycroft has been battle-tested with deployment in ByteDance’s large training clusters: it successfully detects collective communication-related anomalies with a 100% detection rate within 15 seconds in 90% of cases, and achieves root-cause identification within 20 seconds in 60% of the cases.

 </p>
			
			<p style="text-align: justify;"><b>Speaker Bio:</b> Hong Xu is an Associate Professor in Department of Computer Science and Engineering, The Chinese University of Hong Kong. His research area is computer networking and systems, particularly machine learning systems and data center networks. From 2013 to 2020 he was with City University of Hong Kong. He received his B.Eng. from The Chinese University of Hong Kong in 2007, and his M.A.Sc. and Ph.D. from University of Toronto in 2009 and 2013, respectively. His work has received best paper awards from ACM SIGCOMM 2022, IEEE ICNP 2023 and 2015, among others. He was the recipient of an Early Career Scheme Grant from the Hong Kong Research Grants Council in 2014. He is a senior member of IEEE and ACM.
</p>


<div class="container">
  <div class="image-container">
    <img src="images/shizhen.jpeg">
  </div>
  <div class="text-container">
    <h2><a href="https://jhc.sjtu.edu.cn/~shizhenzhao/" class="ui-link">Shizhen Zhao</a ></h2>
    <p>Associate Professor, Shanghai Jiao Tong University</p>
    <h2>Talk Title:</h2>
    <p>On the Design of High Performance Routing Protocols in AI Clusters</p>
  </div>
</div>
			<p style="text-align: justify;"><b>Abstract:</b> Researchers are designing packet-based routing protocols for low-entropy AI workloads. Three key characteristics—In-order Delivery, Lossless Transmission, and Out-of-order Capability—are crucial for effective transmission, yet no practical implementation has achieved all three simultaneously. We identified that combining these characteristics causes a new type of deadlock, termed Orderlock. Operating in an Orderlock-risky network is impractical. Thus, we explored and compared Orderlock-free protocols through a case study on AI workload performance tuning. Our findings offer insights for future High-Performance Network (HPN) protocol and hardware designs, emphasizing the need for Orderlock prevention.

 </p>
			
			<p style="text-align: justify;"><b>Speaker Bio:</b> Shizhen Zhao is a tenured associate professor at Shanghai Jiao Tong University. He received his Ph.D. from Purdue University in 2015 and worked at Google's Networking Group from 2015 to 2019. Since 2019, he has been at the John Hopcroft Center for Computer Science. His research focuses on hybrid optoelectronic data center networks for AI workloads. His work has been published in top venues such as SIGCOMM, NSDI, and IEEE/ACM Transactions on Networking.
</p>


<?php include ("include/footer.php"); ?>
