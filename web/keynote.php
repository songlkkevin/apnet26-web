<?php
    $page_title="Keynote Talks";
    include("include/header.php");
?>

<h1>Keynote Talks</h1>

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
    <img src="images/matt.jpeg">
  </div>
  <div class="text-container">
    <h2><a href="https://caesar.cs.illinois.edu/" class="ui-link">Matthew Caesar</a ></h2>
    <p>Professor, UIUC</p>
    <h2>Talk Title:</h2>
    <p>From Prediction to Proof: Rethinking AI for Systems and Networks</p>
  </div>
</div>
			<p style="text-align: justify;"><b>Abstract:</b> Artificial Intelligence has delivered remarkable successes across domains, yet its foundational goals diverge from critical needs of the systems and networking community: correctness, rigor, and explainability. In this talk, I argue that while AI has reshaped what we think is possible, it is not yet aligned with the demands of complex systems. Instead, I propose a new trajectory -- one that re-centers automated reasoning as a foundation for the next generation of AI-enhanced systems infrastructure. By reimagining formal reasoning as a creative, scalable, and machine-assisted process, we can unlock a new class of tools and techniques that offer the rigor of proofs with the adaptability of learning. This talk outlines a vision for this shift, highlights early breakthroughs, and explores how it can complement and extend the capabilities of today’s AI.</p>
			
			<p style="text-align: justify;"><b>Speaker Bio:</b> Matthew is a Professor in the Department of Computer Science at the University of Illinois at Urbana-Champaign. He received his Ph.D. at UC Berkeley in 2007. He currently serves as Chair of ACM SIGCOMM, co-founder and organizing committee member of the Networking Channel, and co-Principal Investigator of the TSCP-DC project at UIUC's IARCS center in Singapore. Prior to his Ph.D, he spent multiple years as an engineer in the telecom sector. He has worked in the area of networked systems for over two decades, publishing over 50 technical papers, which appear in highly selective academic conferences and have resulted in multiple best paper awards. He received the NSF CAREER award, DARPA CSSG membership, is a CAS Fellow, an IEEE Fellow and received Test of Time Awards from SIGSIM-PADS for his landmark work on distributed time synchronization, and USENIX NSDI for his foundational contributions to software-defined networking. Matthew has a long history of successful technology transfer. His startup company Veriflow produced the first practical network verification system and was sold to VMware in 2019. At AT&T he co-developed the Routing Control Platform, a route management technology which was deployed on their North American IP backbone.
</p>


<div class="container">
  <div class="image-container">
    <img src="images/dongsu.jpg">
  </div>
  <div class="text-container">
    <h2><a href="https://ina.kaist.ac.kr/team/dongsuh" class="ui-link">Dongsu Han</a ></h2>
    <p>Professor, KAIST</p>
    <h2>Talk Title:</h2>
    <p>Democratizing Deep Learning Training: Towards Training LLMs using Consumer-grade GPUs</p>
  </div>
</div>
			<p style="text-align: justify;"><b>Abstract:</b> Current large language models (LLMs) demand high-performance computing infrastructure with expensive datacenter-grade GPUs, making them prohibitively expensive and inaccessible for most researchers and organizations. This talk presents practical approaches to democratizing AI by enabling large-scale model training and inference using commodity consumer-grade GPUs.

The key challenges in leveraging consumer-grade GPUs are two-fold: breaking through the limitations of restricted GPU memory and overcoming the severely constrained bandwidth for communication across distributed GPUs. I will demonstrate that leveraging consumer-grade GPUs doesn't have to involve significant performance degradation: one can not only reduce costs but also achieve performance gains. I will present three systems that exemplify this principle: ES-MoE (ICML 2024), which enables training of large models like LLMs on limited GPU memory environments with just a few GPUs; StellaTrain (SIGCOMM 2024), which achieves effective data-parallel distributed training by pooling consumer-grade GPUs even under bandwidth-constrained networks; and our latest 2025 research on leveraging consumer-grade GPUs for inference.

This inference work demonstrates how distributed low-cost GPUs in edge clouds can reduce per-token costs by 50% while decreasing Time to Last Token (TTLT) by approximately 10%, making LLM inference services accessible at half the traditional cost with improved performance.</p>
			
			<p style="text-align: justify;"><b>Speaker Bio:</b> Dongsu Han is a Professor at the School of Electrical Engineering and Graduate School of AI at KAIST. He received his Ph.D. in Computer Science from Carnegie Mellon University in 2012. His research focuses on democratizing AI systems and addressing challenges in modern Internet applications running on cloud infrastructure at scale. His current work encompasses AI systems for accessible large-scale model training and AI-enhanced video delivery.

Throughout his career, he has published extensively in premier venues including ACM SIGCOMM, USENIX OSDI, USENIX NSDI, ACM CCS, ACM MobiSys, and EuroSys. His contributions have been recognized with the USENIX NSDI Best Paper Award and USENIX NSDI Community Award. He currently serves as an Associate Editor for IEEE/ACM Transactions on Networking and previously served as Program Co-Chair for ACM CoNEXT 2020. His recent systems work on ES-MoE (ICML 2024) and StellaTrain (SIGCOMM 2024) represents significant advances in making AI training accessible using commodity hardware, while his ongoing research continues to push the boundaries of cost-effective AI inference at the edge.
</p>



<?php include ("include/footer.php"); ?>
