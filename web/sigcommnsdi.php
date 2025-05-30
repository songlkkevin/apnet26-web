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

<p>TBA</p>
<!--<div class="container">
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
</p>-->


<?php include ("include/footer.php"); ?>
