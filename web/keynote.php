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
    <img src="images/alizadeh.jpeg">
  </div>
  <div class="text-container">
    <h2><a href="https://people.csail.mit.edu/alizadeh/" class="ui-link">Mohammad Alizadeh</a ></h2>
    <p>Associate Professor, MIT</p>
    <h2>Talk Title:</h2>
    <p>Building Better Network Simulators with Machine Learning</p>
  </div>
</div>
			<p><b>Abstract:</b> Simulators are essential tools in a network designer's arsenal and are integral to emerging AI-based systems, as many learning strategies rely on simulators to explore a design space. However, simulation technology has not changed much in decades. Packet-level simulators like ns-3 face significant scalability limitations, while trace-driven simulators/emulators often suffer from poor fidelity.

In this talk, I will present our ongoing work to enhance network simulation using machine learning. The overarching theme of these efforts is to leverage abundant network data to learn a network's dynamics without modeling each low-level component in detail. I will describe two projects that exemplify this approach.

First, I will introduce CausalSim, a causal inference approach for accurate trace-driven simulation. Traditional simulators replay observed traces, such as network throughput measurements, to test interventions like new protocols. This method is often flawed because the interventions could have altered the original traces. CausalSim uses a novel causal inference algorithm to learn the relationship between interventions and trace observations, modifying the trace during simulation to reflect the effect of the interventions. I will show how CausalSim's ``unbiased'' simulations can lead to entirely different conclusions than prior simulators.

Next, I will discuss m3, a new scale-free, fast, and accurate model for estimating datacenter network performance. m3 learns an approximation of performance statistics (e.g., flow completion time distributions) produced by a packet-level simulator like ns-3. Given a network scenario (i.e., a topology, workload, and network parameters such as congestion control protocols), m3 predicts the performance statistics 1000x faster than ns-3 with less than 10% error. I will present m3's key ideas, including a technique to use a simple flow-level simulator to extract compact features describing a network scenario.

I will conclude with open problems and research challenges in network modeling and simulation with machine learning. </p>
			
			<p><b>Speaker Bio:</b> Mohammad Alizadeh is an Associate Professor of Computer Science at the Massachusetts Institute of Technology. His research interests are in computer networks, systems, and applied machine learning. His current research focuses on machine learning for systems, and network protocols and algorithms for a broad range of applications, including datacenter networking, cloud computing, Internet video delivery, and blockchain systems. Mohammad's research on datacenter networks has led to protocols implemented in modern operating systems and deployed by large network operators. Mohammad earned his MS and Ph.D. in Electrical Engineering from Stanford University. He is a recipient of several awards, including the ACM Grace Murray Hopper Award, Microsoft Research Faculty Fellowship, VMware Systems Research Award, SIGCOMM Rising Star Award, NSF CAREER Award, Alfred P. Sloan Research Fellowship, SIGCOMM Test of Time Award, and multiple best paper awards.
</p>


<div class="container">
  <div class="image-container">
    <img src="images/ratul.jpeg">
  </div>
  <div class="text-container">
    <h2><a href="https://ratul.org" class="ui-link">Ratul Mahajan</a ></h2>
    <p>Associate Professor, University of Washington</p>
    <h2>Talk Title:</h2>
    <p>A decade of network verification: Lessons learned and open challenges</p >
  </div>
</div>

			<p><b>Abstract:</b>In this talk, I will share lessons from over a decade of research and product development in network verification. Drawing on my experience with tools like Batfish, which evolved from a research prototype to an industrial-strength tool used by many large enterprises for analyzing network configurations, I will discuss what has and has not worked well. These experiences, particularly the deployment of such tools in complex, real-world networks, have also revealed open research and engineering challenges that must be addressed to make network verification more widely accessible.  </p>
			
			<p><b>Speaker Bio:</b> Ratul Mahajan is an Associate Professor at the University of Washington’s Paul G. Allen School of Computer Science. He is also the co-director of UW FOCI (Future of Cloud Infrastructure) and an Amazon Scholar. In earlier lives, he was a Co-founder and CEO of Intentionet, a company that pioneered network verification, and a Principal Researcher at Microsoft Research.

Ratul is a computer systems researcher and engineer with a networking focus. He has worked on a broad range of topics, including network verification, connected homes, optical networks, Internet routing and measurements, and mobile systems. Many of the technologies that he has helped develop are part of real-world systems at Microsoft and other companies.

Ratul has been recognized as an ACM Distinguished Scientist, an ACM SIGCOMM Rising Star, and a Microsoft Research Graduate Fellow. His papers have won the ACM SIGCOMM Test-of-Time Award, the IEEE William R. Bennett Prize, the ACM SIGCOMM Best Paper Awards (twice), the HVC Best Paper Award, and the IETF Applied Networking Research Prize.</p>


<?php include ("include/footer.php"); ?>
