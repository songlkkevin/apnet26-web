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
    <img src="images/bloch.png">
  </div>
  <div class="text-container">
    <h2><a href="https://www.linkedin.com/in/gilbloch/?originalSubdomain=il" class="ui-link">Gil Bloch</a ></h2>
    <p>Senior Principal Architect at NVIDIA</p>
    <h2>Talk Title:</h2>
    <p>Expressways: Unlocking the Full Potential of AI With Next-Gen Networking</p>
  </div>
</div>
			<p style="text-align: justify;"><b>Abstract:</b> TBA. </p>
			
			<p style="text-align: justify;"><b>Speaker Bio:</b> Gil Bloch is a Senior Principal Architect at NVIDIA, where he leads a global team responsible for the software and system architecture of large-scale AI systems. His work focuses on building high-performance, scalable infrastructure for distributed AI training and inference, with an emphasis on co-design across compute, network, and software layers. He specializes in fast interconnects, RDMA, in-network computing, and communication optimization for AI workloads.
      Gil has extensive experience across both hardware and software domains, including the design of network adapter and switch ASICs, RDMA offload engines, and open-source networking software for HPC and AI systems. He is the author or co-author of multiple patents in computer networking and interconnect architecture.
      In addition to his industry work, Gil teaches courses on Fast Networks and RDMA programming at Hebrew University, Ben-Gurion University, and the Technion.
</p>

<div class="container">
  <div class="image-container">
    <img src="images/fanyang.png">
  </div>
  <div class="text-container">
    <h2><a href="https://fanyangcs.github.io/" class="ui-link">Fan Yang</a ></h2>
    <p>Senior Principal Research Manager at MSR-Asia</p>
    <h2>Talk Title:</h2>
    <p>Compute Scaling for AI</p>
  </div>
</div>
			<p style="text-align: justify;"><b>Abstract:</b> Large language models (LLMs) rely on compute scaling to achieve continued improvements in intelligence, as captured by the scaling laws. However, this trajectory faces fundamental challenges in chip design and semiconductor manufacturing. At Microsoft Research Asia, we are collaborating with our partners to explore a path forward through software-hardware co-design. The codesign simplifies both model and hardware architectures to enable further scaling. At the same time, we are developing a new system stack to address the emerging system-level challenges introduced by these simplified designs, aiming to sustain the momentum of AI advancement.
      Disclaimer: The opinions in this talk are personal, they do not reflect the official position of my employer. </p>
			
			<p style="text-align: justify;"><b>Speaker Bio:</b> Fan Yang is a Senior Principal Research Manager of Systems Research group at MSR-Asia. His research passion is on Computer Systems. Recently he has been exploring the fundamental principles behind various AI systems. His exploration on Deep Learning Cluster, Deep learning compiler, and Vector storage leads to several open-source projects, including OpenPAI, TileLang, nnScaler, and VBase. Some of the techniques therein have been used by Microsoft products like Azure, M365, and Bing. And the corresponding research results have appeared in top system conferences like OSDI/SOSP.
</p>

<div class="container">
  <div class="image-container">
    <img src="images/binyang.png">
  </div>
  <div class="text-container">
    <h2><a href="https://www.linkedin.com/in/bingyangliu/?originalSubdomain=cn" class="ui-link">Binyang Liu</a ></h2>
    <p>Director of Network Technology Lab, Huawei Central Research Institute</p>
    <h2>Talk Title:</h2>
    <p>Technical Challenges for AI Cluster Network</p>
  </div>
</div>
			<p style="text-align: justify;"><b>Abstract:</b> The development of AGI/ASI rises tremendous requirement of computing power and AI clusters. Network efficiency dominates the performance of AI clusters, because the Total Effective Computing Power of Cluster = Single-chip Computing Power &times; Cluster Scale &times; Computational Efficiency. Moreover, if network becomes larger and more hierarchical, the cost, power consumption, reliability, and performance of the cluster will be worse. So network is the key way to improve cluster performance, but it also faces multiple contradictions and huge technical challenges. This representation will talk about six key technical challenges for AI cluster network, including high-bandwidth, high-capacity switching, large-scale fabric, high-throughput transport, deep integration of network and computing, and long-distance computing connection. </p>
			
			<p style="text-align: justify;"><b>Speaker Bio:</b> Bingyang Liu is the director of Network Technology Lab, Huawei. His research interests lie in data center networks and wide-area networks. Before joining Huawei, he was a postdoctoral researcher at Institute for Network Sciences and Cyberspace, Tsinghua University. He received the Ph.D. degree from Department of Computer Science, Tsinghua University.
</p>


<div class="container">
  <div class="image-container">
    <img src="images/shunmin.jpg">
  </div>
  <div class="text-container">
    <h2><a href="https://scholar.google.com/citations?user=cSnRIpwAAAAJ&hl=zh-CN" class="ui-link">Shunmin Zhu</a ></h2>
    <p>Head of Cloud Network Division at Alibaba Cloud</p>
    <h2>Talk Title:</h2>
    <p>Luoshen: A Large Scale High Performance Cloud Network for Public Cloud</p>
  </div>
</div>
			<p style="text-align: justify;"><b>Abstract:</b> Public cloud has gone through a rapid growth for past decades. Tenant network scales from several thousand virtual machines per VPC to 1.5 million in nowadays. Along with the scale, the performance for a single load balancer instance boosts from tens of thousands simultaneous connections to hundreds of millions. Furthermore, the ever changing workloads require a rapid and elastic network function deployments. To overcome these challenges, Alibaba Cloud spends 10 years crafting its cloud network system. In this session, I will present how Alilbaba Cloud designs and builds a large scale high performance cloud network called Luoshen to meet the requirements. We will discuss the overall architecture of Luoshen, which is a SDN-optimized, hardware-accelareted network. Then, we will dive into the massive compute nodes where we design a hardware-offload virtual switch architecture to ensure flexibility and scale. To solve the performance problem, I will talk about our high performance multi-tenant gateways built with programmable switches. Regarding to elasticity, I will discuss our cost-effective network functions virtualization platform which manages all sorts of network functions on demand. </p>
			
			<p style="text-align: justify;"><b>Speaker Bio:</b> Shunmin Zhu is head of cloud network division at Alibaba Cloud. He leads the team to design and develop a large scale high performance cloud networking system called Luoshen. Based on Luoshen, he incubates a wide range of network products spanning from cloud data center to wide area networking, serving the global users of Alibaba Cloud. His research focuses on programmable high performance networking, AI networking and network telemetry. He received China Computer Fedaration(aka CCF) Science and Technology Achievement Award in 2021 and 2023.
</p>

<?php include ("include/footer.php"); ?>
