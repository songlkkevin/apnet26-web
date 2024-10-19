<?php
    $page_title="Industry Spotlight Talks";
    include("include/header.php");
?>

<h1>Industry Spotlight Talks</h1>

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


<div class="container">
  <div class="image-container">
    <img src="images/arzani.jpg">
  </div>
  <div class="text-container">
    <h2><a href="https://www.microsoft.com/en-us/research/people/bearzani/" class="ui-link">Behnaz Arzani</a ></h2>
    <p>Principal Researcher at Microsoft Research</p>
    <h2>Talk Title:</h2>
    <p>Network management in the age of AI</p>
  </div>
</div>
			<p><b>Abstract:</b> This talk focuses on how AI impacts our approach to network management: to support larger training/inference workloads; to ensure availability; and in how we adapt our solutions to also use these new AI capabilities. Although the new paradigm poses many challenges that present themselves as higher SLAs, increased pressure to improve network utilization/bandwidth, minimize transfer latency, and improve availability; it also presents a unique opportunity with more predictable workloads which allow us to better plan various aspects of how we want to manage our networks. Many of the network management problems we have studied in the past become less complicated to solve algorithmically under these new sets of assumptions. Much of the work our community has done in the past is extensible to this new regime which can allow us to build on the years of research and knowledge we have gathered already. AI itself can play a significant role in our approach to these problems --- but how can we use it in a way that is safe and responsible? I will give my take on what all of this means for how we solve network management problems moving forward. </p>
			
			<p><b>Speaker Bio:</b> In my current role as a principal researcher at Microsoft Research I lead large research efforts that make significant contributions to the field of network management. As part of my work I drive alignment with product teams to deploy the solutions we develop and use them to improve the production networks in Microsoft. Some examples of my past collaborative work include MetaOpt (a tool for heuristic analysis and development), Soroush (a max-min fair resource allocation solution endorsed by tech-leads in Azure),  Scouts (a solution to speed-up incident diagnosis), and PrivateEye (a solution to provide GDPR compliant compromise detection).  I got my PhD in computer science from the University of Pennsylvania in 2017 working with my advisors Prof. Boon Thau Loo and Prof. Roch Guerin and started at Microsoft as a post doctoral researcher. I completed my dual masters degree in computer science and electrical engineering at the University of Pennsylvania in the same year. I completed my B. Sc. in Electrical Engineering at Sharif University of Technology in 2010. 
My current, primary, focus is on understanding the performance of deployed algorithms.  I broadly work on automating network management and explore different aspects of this space which include: risk-estimation, diagnosis, verification, and other relevant topics.
</p>


<div class="container">
  <div class="image-container">
    <img src="images/dennis.jpg">
  </div>
  <div class="text-container">
    <h2><a href="https://www.linkedin.com/in/dennis-cai-45699a2b/" class="ui-link">Dennis Cai</a ></h2>
    <p>Head of Network Infrastructure Division at Alibaba Cloud</p>
    <h2>Talk Title:</h2>
    <p>Alibaba HPN7.0: Revolutionizing AI Infrastructure with Next-Gen Network Architecture</p >
  </div>
</div>
			<p><b>Abstract:</b> Alibaba HPN (High-Performance Networking) is an advanced network architecture designed specifically for AI infrastructure. HPN 7.0 architecture is built upon cutting-edge 51.2Tbps switch and 400Gbps high-performance Network Interface Cards (NICs). This architecture is crafted with an acute awareness of essential considerations such as data center power constraints and physical layouts. It boasts the capacity for a scalable expansion to support in excess of 100,000 GPU nodes within a singular cluster through a proficient two-layer CLOS design. Furthermore, it incorporates a resilient dual-plane network architecture to ensure high availability.
            Our session proposes a deep dive into the Alibaba Cloud HPN7.0's architectural ethos, presenting a well-rounded discourse on its cornerstone features: a rail-optimized network topology, enhancements in RDMA high-performance network protocols, advanced flow control, and multipath transport mechanisms. Additionally, we will also cover optimizations at the communication library level, culminating in a holistic, integrated approach for rapid fault detection and meticulous performance diagnostics across the full stack. Join us to uncover how HPN7.0 is setting a new benchmark in network design for AI platforms, ensuring unmatched scalability, reliability, and efficiency. </p>
			
			<p><b>Speaker Bio:</b> Dennis Cai currently leads the Global Network Infrastructure Division at Alibaba Cloud. Previously he held positions as the Chief Network Architect and the Head of high-performance network team. Dennis has played a pivotal role in the design and deployment of Alibaba Cloud’s cutting-edge hyperscale data center network, as well as the specialized high-performance network framework for AI clusters. Before his tenure at Alibaba Cloud, Dennis enriched his vast experience as a Distinguished Engineer and the Lead Architect for network solutions in Cisco's Service Provider Business Unit.</p>



<div class="container">
  <div class="image-container">
    <img src="images/tankun.jpg">
  </div>
  <div class="text-container">
    <h2><a href="https://sora-city.github.io/" class="ui-link">Kun Tan</a ></h2>
    <p>Director and Chief Expert of Distributed and Parallel Software Lab, 2012 Labs, Huawei</p>
    <h2>Talk Title:</h2>
    <p>Serverless AI on SuperPODs</p >
  </div>
</div>

			<p><b>Abstract:</b> Modern large Al models demands tremendous computing power and highspeed interconnections, which may be provided with only purposely-built infrastructures or Al SuperPODs. However, managing such powerful computing infrastructure is a challenging task. Enterprise developers may face many difficult issues, such as long downtime as the infrastructure goes more complex, great efforts to parallelize their Al workloads, non-linear performance due to non-optimized resource scaling, and inefficient resource utilization. We argue that a developer-centric platform that contains a full software stack and provide a serverless abstraction is needed to ease the burden of enterprise developers for Al applications. In this talk, we introduce some of our early efforts on building a serverless Al platform on SuperPODs. We will discuss our design of a distributed serverless kernel and its programming interface for both general-purpose and high-performance computing. Then, I will talk several joint system optimizations enabled by our platform due to native integration of full-stack capabilities.  </p>
			
			<p><b>Speaker Bio:</b> Dr. Kun Tan is Director and Chief Expert of Distributed and Parallel Software Lab, 2012
Labs, Huawei. His team develops cutting-edge Al framework, cloud native, big data analytics, and cloud networking technologies for many Huawei products. He is Huawei Scientist. Before joined Huawei, he was Research Manager and Senior Researcher of Wireless and Networking Group, Microsoft Research Asia. He won USENIX Test-of-Time Award in 2019 and USENIX NSDI Best Paper Award in 2009.</p>





<div class="container">
  <div class="image-container">
    <img src="images/hongyi.jpg">
  </div>
  <div class="text-container">
  <h2><a href="https://eastzone.bitbucket.io/" class="ui-link">James Hongyi Zeng</a ></h2>
    <p>Senior Engineering Manager, AI Networking Software team at Meta</p>
    <h2>Talk Title:</h2>
    <p>AI Networking at Meta</p >
  </div>
</div>

			<p><b>Abstract:</b> Meta operates one of the largest data center networks specifically designed for distributed training. This talk walks through the evolution of design, implementation, and operation of such AI networking against a constantly changing and increasing diverse distributed training workload. We also discuss challenges that we have encountered along the way. </p>
			
			<p><b>Speaker Bio:</b> James Hongyi Zeng joined Meta networking group in 2014. Currently he leads the AI Networking Software team at Meta, focusing on building RDMA-based GPU-GPU communication fabric and host software. James received his PhD degree on computer networking from Stanford University.</p>


<?php include ("include/footer.php"); ?>
