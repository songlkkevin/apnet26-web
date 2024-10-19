<?php
    $page_title="SIGCOMM/NSDI Talks";
    include("include/header.php");
?>

<h1>SIGCOMM/NSDI Talks</h1>

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
    <img src="images/jialinli.jpeg">
  </div>
  <div class="text-container">
    <h2><a href="https://www.comp.nus.edu.sg/~lijl/" class="ui-link">Jialin Li</a ></h2>
    <p>Assistant Professor, National University of Singapore</p>
    <h2>Talk Title:</h2>
    <p>Leveraging Network Hardware in Distributed Systems Design</p>
  </div>
</div>
			<p><b>Abstract:</b> Traditionally, distributed systems are designed with minimum assumptions about the underlying network: The network is assumed to only provide best-effort guarantees and is fully asynchronous. Application-level protocols, such as consensus, distributed transactions, and load balancing protocols, are then fully responsible for ensuring the correctness, liveness, and efficiency of the system. Unfortunately, weak guarantees of the network often result in distributed protocols with complex message exchanges, limiting the overall performance of the system.
      
In this talk, I will introduce a new approach to designing distributed systems by leveraging network hardware to co-design with distributed protocols. I will describe several systems we built that demonstrate the benefit of this approach. The first work, Hydra, eliminates the coordination overhead in consensus and distributed transactional protocols, by relying on network sequencing primitives to consistently order user requests. Critically, Hydra overcomes limitations of prior centralized sequencer solutions, by deploying a distributed set of sequencers without weakening the ordering guarantees. The second system, NeoBFT, implements secure authentication primitives directly in network hardware. By coupling in-network authentication and ordering, NeoBFT accelerates state-of-the-art BFT protocols in both throughput and latency by a wide margin. I will end the talk with our recent effort in designing us-scale live TCP migration for load balancing by co-designing with programmable switches.

 </p>
			
			<p><b>Speaker Bio:</b> Jialin Li is the Sung Kah Kay Assistant Professor in the School of Computing at the National University of Singapore. He finished his PhD at the University of Washington in 2019. As part of his dissertation work, he has built practical distributed systems that offer both strong semantics and high performance, by co-designing with new-generation programmable hardware. He is the recipient of best paper awards at OSDI and NSDI. His current research interests include distributed systems and programmable hardware co-design, data plane operating systems, and decentralized system infrastructure.
</p>


<div class="container">
  <div class="image-container">
    <img src="images/guyueliu.jpeg">
  </div>
  <div class="text-container">
    <h2><a href="https://grace-liu.github.io/" class="ui-link">Guyue Liu</a ></h2>
    <p>Assistant Professor, Peking Univeristy</p>
    <h2>Talk Title:</h2>
    <p>Enabling Trustworthy Network Outsourcing</p>
  </div>
</div>
			<p><b>Abstract:</b> As network complexity and costs continue to soar, a growing number of small and medium enterprises are turning to third-party providers to outsource their networking devices and services. This outsourcing trend manifests in various forms, from operating networking devices (e.g., firewalls) on third-party infrastructures like public clouds, to utilizing in-house infrastructure while delegating services (e.g., troubleshooting) and data management (e.g., configuration) to external providers.Despite its advantages, a major drawback of existing outsourcing models is their "all-or-nothing" approach, which forces enterprises to relinquish control over outsourced components and data. While this may offer convenience, it simultaneously raises critical transparency and accountability issues, thereby amplifying security concerns. In this talk, I will present our ongoing research on enabling trustworthy network outsourcing. This includes AuditBox for auditing virtualized network functions, Heimdall for assessing risk in outsourced network services, and ConfMask for anonymizing configurations to preserve privacy. </p>
			
			<p><b>Speaker Bio:</b> Guyue Liu is an Assistant Professor of Computer Science at Peking University. She received her Ph.D. in Computer Science from George Washington University and her B.S. from Beijing University of Posts and Telecommunications. She has served on the program committees of several top networking and systems conferences, such as SIGCOMM, NSDI, and ASPLOS, and co-chaired the SIGCOMM'24 and OSDI'21 Artifact Evaluation Committees. Her work has received the 2019 EECS Rising Stars award, the HP Helion OpenStack Scholarship, and the RTAS'18 Best Student Paper award. In 2019, she was selected as one of the ten N2Women Rising Stars in networking and communications.
</p>

<div class="container">
  <div class="image-container">
    <img src="images/junchenjiang.png">
  </div>
  <div class="text-container">
    <h2><a href="https://people.cs.uchicago.edu/~junchenj/" class="ui-link">Junchen Jiang</a ></h2>
    <p>Assistant Professor, University of Chicago</p>
    <h2>Talk Title:</h2>
    <p>Knowledge Delivery Network: Faster LLM Serving via Knowledge Sharing</p>
  </div>
</div>
			<p><b>Abstract:</b> Imagine once an LLM has processed a document, the "knowledge" can be instantly shared with other LLM instances. Unfortunately, today, LLMs must read the same long document multiple times, causing a significant slowdown. We introduce a new Knowledge Delivery Network that enables LLMs to efficiently share their digested knowledge, in the form of KV caches, so only one LLM instance needs to process (prefill) each document. 
The key challenge is how to store the KV caches cheaply and serve them quickly. Instead of keeping the KV caches of all reusable chunks in GPU or CPU memory, we show that with careful design and implementation, storing them on cheaper devices is not only economically superior but also delivers significant reductions in LLM serving delay, especially the time to the first token.
 </p>
			<p><b>Speaker Bio:</b> Junchen Jiang is an Assistant Professor of Computer Science at the University of Chicago. He works at the intersections between networked systems and machine learning. He received his Ph.D. from CMU in 2017 and his bachelor’s degree from Tsinghua University (Yao's Class) in 2011. He has received a Google Faculty Research Award, an NSF CAREER Award, and a CMU Computer Science Doctoral Dissertation Award. <a href="https://people.cs.uchicago.edu/~junchenj/">https://people.cs.uchicago.edu/~junchenj/</a>
</p>


<div class="container">
  <div class="image-container">
    <img src="images/yitingxia.jpeg">
  </div>
  <div class="text-container">
    <h2><a href="https://sites.google.com/view/yitingxia/home" class="ui-link">Yiting Xia</a ></h2>
    <p>Assistant Professor, Max Planck Institute for Informatics (MPI-INF).</p>
    <h2>Talk Title:</h2>
    <p>Enabling System Innovation of Optical Data Center Networks with an Open Framework
</p >
  </div>
</div>

			<p><b>Abstract:</b>Optical data center networks (DCNs) are revolutionizing the infrastructure design in the cloud. Despite their great success, today’s optical DCN architectures operate as closed ecosystems, locking in system solutions with the underlying optical hardware. This talk presents an open framework that decouples software systems from optical hardware, enabling independent evolution. The framework facilitates the evaluation of software proposals on various hardware architectures and advances the adoption of optical DCNs by substantially simplifying their development. It also makes numerous research topics in optical DCNs more accessible to system and networking researchers, such as time synchronization, routing, and transport designs. By the end of the talk, the speaker will provide an overview of the latest progress on these topics in her group.
  </p>
			
			<p><b>Speaker Bio:</b> Yiting Xia is a Tenure-Track Faculty at Max Planck Institute for Informatics, where she leads the network and cloud systems research group. She got her PhD degree in Computer Science from Rice University. Before joining Max Planck Institute, she was a research scientist at Facebook. Her research is to build network infrastructure and software systems for emerging cloud applications. Her works on both future network designs and industry systems have been published on top networking and systems venues. She has served on the technical program committee for SIGCOMM, NSDI, IMC, SOSR, ICNP, HotNets, etc. She won the N2Women rising star award in 2021.</p>


<?php include ("include/footer.php"); ?>
