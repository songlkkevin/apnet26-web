<?php
    $page_title="Technical Program";
    include("include/header.php");
?>

<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 10px;
  text-align: left;
}

/* .pdf-container {
    position: relative;
    width: 100%;
    height: 0;
    padding-bottom: 56.25%;
}
.pdf-embed {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
} */
</style>


<!-- <tr>
  <td width="120px">3:05 - 3:40 pm</td>
  <td>AI Networking at Meta <a href="https://hkustconnect-my.sharepoint.com/:v:/g/personal/hwangdv_connect_ust_hk/EcdbK-w2oEVCqBLQpUlKUOMBpFAGJ0vqNBD3NSOHKGxR0w?nav=eyJyZWZlcnJhbEluZm8iOnsicmVmZXJyYWxBcHAiOiJPbmVEcml2ZUZvckJ1c2luZXNzIiwicmVmZXJyYWxBcHBQbGF0Zm9ybSI6IldlYiIsInJlZmVycmFsTW9kZSI6InZpZXciLCJyZWZlcnJhbFZpZXciOiJNeUZpbGVzTGlua0NvcHkifX0&e=Hou2zv">[video]</a><br><i><small>James Hongyi Zeng (Meta)</small></i></td>
  <td width="120px">3:05 - 3:40 pm</td>
  <td>AI Networking at Meta <a href="">[video]</a><br><i><small>James Hongyi Zeng (Meta)</small></i></td>
</tr> -->

<h1>Technical Program</h1>
<b><font color="red">APNET 2025 Program Schedule</font></b>

<h2>Session Time</h2>
<table border="1">
    <tr>
        <td><b>Keynote Talk</b></td>
        <td>50 mins total</td>
    </tr>
    <tr>
        <td><b>Regular Paper</b></td>
        <td>10 mins talk + 3 mins Q&A (13 mins total)</td>
    </tr>
    <tr>
        <td><b>Academic Insight Talk</b></td>
        <td>30 mins total</td>
    </tr>
    <tr>
        <td><b>Industry Spotlight Talk</b></td>
        <td>30 mins total</td>
    </tr>
</table>

<h2>August 7, 2025 (Day 1)</h2>
<table border="1" cellpadding="10px">
    <tr>
        <td width="120px"><b><big>Time</big></b></td>
        <td><b><big>Event</big></b></td>
    </tr>
    <tr>
        <td width="120px"><b>8:30 - 8:45 am</b></td>
        <td><b>Opening Remarks</b><br>General/PC Chairs</td>
    </tr>
    <tr>
        <td width="120px"><b>8:45 - 9:35 am</b></td>
        <td><b>Keynote 1: From Prediction to Proof: Rethinking AI for Systems and Networks</b><br>Prof. Matthew Caesar (UIUC, ACM SIGCOMM Chair)</td>
    </tr>
    <tr>
        <td width="120px"><b>9:35 - 10:30 am</b></td>
        <td><b>Session: Reinventing RDMA</b><br>Session Chair: Chen Tian</td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Exposing RDMA NIC Resources for Software-Defined Scheduling<br>
        <i>Yibo Huang (University of Michigan); Yiming Qiu (University of Michigan / UC Berkeley); Yunming Xiao, Archit Bhatnagar (University of Michigan); Sylvia Ratnasamy (UC Berkeley); Ang Chen (University of Michigan)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Cache-Aware I/O Rate Control for RDMA<br>
        <i>Qijing Li, Xinyang Huang, Bowen Liu, Pengbo Li, Junxue Zhang, Kai Chen (Hong Kong University of Science and Technology)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Orderly Management of Packets in RDMA by Eunomia<br>
        <i>Sana Mahmood, Jinqi Lu, Soudeh Ghorbani (Johns Hopkins University)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>UCM: Fast and Maintainable User-space RDMA Connection Setup<br>
        <i>Huijun Shen (Hunan University); Jian Yang, Zelong Yue (ByteDance Inc.); Xingyu Guo, Xijin Yin (Hunan University); Lang An, Yulin Chen, Jie Ding, Hongyu Wu, Yong Zhang, Jianxi Ye (ByteDance Inc.); Guo Chen (Hunan University)</i></td>
    </tr>
    <tr>
        <td width="120px"><b>10:30 - 11:00 am</b></td>
        <td><b>Coffee Break</b></td>
    </tr>
    <tr>
        <td width="120px"><b>11:00 - 11:55 am</b></td>
        <td><b>Session: Load, Balance, Repeat</b><br>Session Chair: Henry Xu</td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Maat: A Fair Layer-4 Load Balancer With Per-Connection Consistency<br>
        <i>Ju Huang, Lu Tang (Xiamen University)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Remote TCP Connection Offload with XO<br>
        <i>Shuo Li, Steven Chien, Tianyi Gao, Michio Honda (University of Edinburgh)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>SRC: A Scalable Reliable Connection for RDMA with Decoupled QPs and Connections<br>
        <i>Yiren Zhao, Ran Shu, Yongqiang Xiong (Microsoft Research)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Enabling Packet Spraying over Commodity RNICs with In-Network Support<br>
        <i>Xiangzhou Liu, Wenxue Li, Kai Chen (Hong Kong University of Science and Technology)</i></td>
    </tr>
    <tr>
        <td width="120px"><b>11:55 am - 1:15 pm</b></td>
        <td><b>Lunch</b></td>
    </tr>
    <tr>
        <td width="120px"><b>1:15 - 2:10 pm</b></td>
        <td><b>Session: Smarter Control, Better Flow</b><br>Session Chair: Alessandro Cornacchia</td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Congestion Control for AI Workloads with Message-Level Signaling<br>
        <i>Yuxuan Li, Zhenghang Ren, Wenxue Li, Xiangzhou Liu, Kai Chen (Hong Kong University of Science and Technology)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Collaborative Multi-Flow Congestion Control via Deep Reinforcement Learning<br>
        <i>Qiangqiang Wei, Jiangping Han, Kaiping Xue, Jinhao Liu (University of Science and Technology of China); Naiqiang qiao, Hao Chen (HUAWEI TECHNOLOGIES CO., LTD.)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>ORC: Online Reinforcement Learning for Congestion Control with Fast Convergence<br>
        <i>Yijun Li, Jiawei Huang, Chuliang Wu (Central South university); Xiaojun Zhu, Jianxin Wang (Central South University)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Hybrid Congestion Control with Variable Monitoring Time Period<br>
        <i>Xiaohong Qiu, Haifeng Liu (Jiangxi University of Science and Technology); Shuangmei Liu (Nanchang Hangkong University); Zhen Li, Xiaojun Zhu (Jiangxi University of Science and Technology)</i></td>
    </tr>
    <tr>
        <td width="120px"><b>2:10 - 3:05 pm</b></td>
        <td><b>Session: Networks in the Wild</b><br>Session Chair: Shuai Wang</td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Assessing the Impact of ISP de-peering: A case study of Cogent's Disconnection from Russian Networks in Routing Perspective<br>
        <i>Liming Liu (Tsinghua University, Zhongguancun Laboratory); Yuanyuan Zhang, Kun Guo, Meijia Hou (Zhongguancun Laboratory); Mingwei Xu (Tsinghua University, Zhongguancun Laboratory); Jiahao Cao (Tsinghua University); Xin Gao, Jiang Li, Yonghong Fu (Zhongguancun Laboratory)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Topology-Adaptive LEO Satellite Network Telemetry via Graph Isomorphism and Topology Partitioning<br>
        <i>Yan Zhang (Purple Mountain Laboratories); Tian Pan (Beijing University of Posts and Telecommunications); Yan Zheng (Purple Mountain Laboratories); Guohao Ruan, Haonan Li (Beijing University of Posts and Telecommunications); Yi Liu (SICE, Beijing University of Posts and Telecommunications); Jiang Liu, Tao Huang (Beijing University of Posts and Telecommunications)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>CTSVN: A Solution for Computation Task Scheduling in Vehicle Networking<br>
        <i>Zheng Fang, Kun Xie, Xiaohong Huang, Pei Zhang, Dandan Li (BUPT)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Understanding the Long Tail Latency of TCP in Large-Scale Cloud Networks<br>
        <i>Zihao Fan (Shanghai Jiao Tong University and Alibaba Cloud); Enge Song (Alibaba Cloud); Bo Jiang (Shanghai Jiao Tong University); Yang Song, Yuke Hong, Bowen Yang, Yilong Lv, Yinian Zhou, Junnan Cai, Chao Wang, Yi Wang, Yehao Feng, Dian Fan, Ye Yang, Shize Zhang, Xiaoqing Sun, Jianyuan Lu (Alibaba Cloud); Xing Li (Zhejiang University and Alibaba Cloud); Jun Liang (Alibaba Cloud); Biao Lyu (Zhejiang University and Alibaba Cloud); Zhigang Zong (Alibaba Cloud); Shunmin Zhu (Hangzhou Feitian Cloud and Alibaba Cloud)</i></td>
    </tr>
    <tr>
        <td width="120px"><b>3:05 - 4:00 pm</b></td>
        <td><b>Poster Session + Coffee Break</b></td>
    </tr>
    <tr>
        <td width="120px"><b>4:00 - 6:00 pm</b></td>
        <td><b>Academic Insight Talks</b><br>Session Chair: Kai Chen</td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Making Serverless Computing Efficient and Scalable<br>
        <i>Prof. K. K. Ramakrishnan (Distinguished Professor, University of California, Riverside)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Congestion Management in/beyond Datacenter Networks: Pyrrha as a case<br>
        <i>Prof. Chen Tian (Professor, Nanjing University)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>What does sparsity mean for machine learning systems?<br>
        <i>Prof. Hong Xu (Associate Professor, The Chinese University of Hong Kong)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>On the Design of High Performance Routing Protocols in AI Clusters <a target="_blank" href="slides/Academy/shizhenzhao.pdf">[Slides]</a><br><i><small>Prof. Shizhen Zhao (Associate Professor, Shanghai Jiao Tong University)</small></i></td>
    </tr>
    <tr>
        <td width="120px"><b>6:00 - 6:15 pm</b></td>
        <td><b>Break</b></td>
    </tr>
    <tr>
        <td width="120px"><b>6:15 - 9:30 pm</b></td>
        <td><b>APNet’25 Banquet</b></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>At 6:15 pm, depart from Crowne Plaza Hotel to Peace Hotel by shuttle bus; enjoy the banquet at Peace Hotel from 7:00 to 9:30 pm; and return to Crowne Plaza Hotel by shuttle bus at 9:30 pm.<br>
    </tr>
</table>

<h2>August 8, 2025 (Day 2)</h2>
<table border="1" cellpadding="10px">
    <tr>
        <td width="120px"><b><big>Time</big></b></td>
        <td><b><big>Event</big></b></td>
    </tr>
    <tr>
        <td width="120px"><b>8:30 - 9:20 am</b></td>
        <td><b>Keynote 2: Democratizing Deep Learning Training: Towards Training LLMs using Consumer-grade GPUs</b><br>Prof. Dongsu Han (KAIST)</td>
    </tr>
    <tr>
        <td width="120px"><b>9:20 - 10:00 am</b></td>
        <td><b>Session: Simulators for the AI Age</b><br>Session Chair: Kaihui Gao</td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Miniature: Fast AI Supercomputer Networks Simulation on FPGAs<br>
        <i>Yicheng Qian (Northeastern University/Microsoft Research); Ran Shu, Rui Ma, Yang Wang (Microsoft Research); Derek Chiou (UT Austin/Microsoft); Nadeen Gebara, Luca Piccolboni (Microsoft); Miriam Leeser (Northeastern University); Yongqiang Xiong (Microsoft Research)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Nüwa: Efficient Generative Control Plane for AI Network Simulation<br>
        <i>Wenkai Li (Xi'an Jiaotong University); Ran Shu (Microsoft Research); Peng Zhang (Xi'an Jiaotong University); Yongqiang Xiong (Microsoft Research)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>SplitNN: Single-Machine Network Emulation at Scale with Minute-Level Construction of 10K-Node Virtual Networks<br>
        <i>Kaifei Peng, Yanbiao Li, Wenbin Li, Xian Yu, Gaogang Xie (Computer Network Information Center, Chinese Academy of Sciences; University of Chinese Academy of Sciences)</i></td>
    </tr>
    <tr>
        <td width="120px"><b>10:00 - 10:40 am</b></td>
        <td><b>Session: Redefining the Network Stack</b><br>Session Chair: Yunming Xiao</td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>OmniDMA: Scalable RDMA Transport over WAN<br>
        <i>Kai Lv (Institute of Computing Technology, Chinese Academy of Sciences; University of Chinese Academy of Sciences; Huawei); Jinyang Li (Huawei); Pengyi Zhang (Institute of Computing Technology, Chinese Academy of Sciences; University of Chinese Academy of Sciences); Heng Pan (Computer Network Information Center, Chinese Academy of Sciences); Luyang Li (Institute of Computing Technology, Chinese Academy of Sciences; University of Chinese Academy of Sciences); Shuihai Hu (Huawei); Zhenyu Li (Institute of Computing Technology, Chinese Academy of Sciences; University of Chinese Academy of Sciences.); Gaogang Xie (Computer Network Information Center, Chinese Academy of Sciences; University of Chinese Academy of Sciences); Jingbin Zhou, Kun Tan (Huawei)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Designing Transport-Level Encryption for Datacenter Networks<br>
        <i>Tianyi Gao, Xinshu Ma, Suhas Narreddy, Eugenio Luo, Steven Chien, Michio Honda (University of Edinburgh)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Enhancing Network Traffic Prediction by Integrating Graph Transformer with a Temporal Model<br>
        <i>Xiucheng Sun, Runqun Xiong, Dian Shen (Southeast University); Junzhou Luo (Southeast University, Nanjing, P.R. China)</i></td>
    </tr>
    <tr>
        <td width="120px"><b>10:40 - 11:10 am</b></td>
        <td><b>Coffee Break</b></td>
    </tr>
    <tr>
        <td width="120px"><b>11:10 am - 12:05 pm</b></td>
        <td><b>Session: Efficient AI at the Edge and Core</b><br>Session Chair: Li Chen</td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Mnemosyne: Lightweight and Fast Error Recovery for LLM Training in a Just-In-Time Manner<br>
        <i>Jinyi Xia, Menghao Zhang, Jiaxun Huang, Yuezheng Liu (Beihang University); Xiaohe Hu (Infrawaves); Xudong Liu, Chunming Hu (Beihang University)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Rethinking Dynamic Networks and Heterogeneous Computing in Automatic Parallelization<br>
        <i>Ruilong Wu, Xinjiao Li, Yisu Wang, Xinyu Chen, Dirk Kutscher (The Hong Kong University of Science and Technology (Guangzhou))</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>FlexSpark: Robust and Efficient Multi-Device Collaborative Inference over Wireless Network<br>
        <i>Yiyang Shao, Hongyi Li, Shuihai Hu, Xinle Du, Hao Wu, Jingbin Zhou, Kun Tan (Huawei)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>PromptMobile: Efficient Promptus for Low Bandwidth Mobile Video Streaming<br>
        <i>Liming Liu, Jiangkai Wu, Haoyang Wang, Peiheng Wang, Zongming Guo, Xinggong Zhang (Peking University)</i></td>
    </tr>
    <tr>
        <td width="120px"><b>12:05 - 1:25 pm</b></td>
        <td><b>Lunch</b></td>
    </tr>
    <tr>
        <td width="120px"><b>1:25 - 2:20 pm</b></td>
        <td><b>Session: Programmability and Performance</b><br>Session Chair: Jiaqi Gao</td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Augmenting Public Cloud Infrastructure for Heterogeneous Network Function Virtualization<br>
        <i>Haonan Li, Yang Song, Tian Pan, Zhigang Zong, Bengbeng Xue, Xionglie Wei, Yisong Qiao, Donglin Lai, Baohai Hu, Jin Ke, Enge Song, Yuxiang Lin, Xiaomin Wu, Jianyuan Lu (Alibaba Cloud); Xing Li, Biao Lyu (Zhejiang University and Alibaba Cloud); Rong Wen (Alibaba Cloud); Jiao Zhang, Tao Huang (Purple Mountain Laboratories); Shunmin Zhu (Hangzhou Feitian Cloud and Alibaba Cloud)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Cost-Efficient and Reliable SFC Orchestration in Mobile Edge Computing<br>
        <i>Yuanfei Xiao, Zhenli He, Qixin Peng (Yunnan University)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Toward Scalable Learning-Based Optical Restoration<br>
        <i>Siyong Huang (Xiamen University); Qingyu Song (The Chinese University of Hong Kong); Kexin Yu (Xiamen University); Zhaoning Wang (China Unicom); Zhizhen Zhong (Massachusetts Institute of Technology); Qiao Xiang, Jiwu Shu (Xiamen University)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Unmasking Vulnerabilities of HyperLogLog: Security via Parameter Extraction<br>
        <i>Shishi Zhang, Ning Wang, Lu Tang (Xiamen University)</i></td>
    </tr>
    <tr>
        <td width="120px"><b>2:20 - 3:15 pm</b></td>
        <td><b>Session: Resilient Systems, Secure Designs</b><br>Session Chair: Qiao Xiang</td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>FauTE: Fault-tolerant Traffic Engineering in Data Center Network<br>
        <i>Xiyuan Liu (Nanyang Technological University); Yang Liu (Shanghai Institute of Satellite Engineering); Jingyi Cheng, Ximeng Liu, Shizhen Zhao (Shanghai Jiao Tong University)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>A Theoretical Framework for Quantitative Evaluation of Padding Defenses against Website Fingerprinting<br>
        <i>Yue Gu (Tsinghua University/Tsinghua Shenzhen International Graduate School); Hao Wu (CNCERT/CC); Dan Li (Tsinghua University)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>H-NRF: A High-performance and Evolutive NRF Framework for Large-scale Mobile Core Network<br>
        <i>Zhuoran Ma (Hunan University; CNIC CAS); Yanbiao Li (CNIC CAS; UCAS, China); Xin Wang (SUNY Stony Brook); Xian Yu, Xinyi Zhang, Shiyi Liu (CNIC CAS; UCAS China); Kun Xie (Hunan university); Gaogang Xie (CNIC CAS; UCAS, China)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Cloud Overbooking Optimization: Reducing Temporal Volatility through Spatial Workload Aggregation<br>
        <i>Baoqing Wang, Long Li, Jing Yang, Jiawei Liu, Gongming Zhao, Hongli Xu (University of Science and Technology of China)</i></td>
    </tr>
    <tr>
        <td width="120px"><b>3:15 - 3:45 pm</b></td>
        <td><b>Coffee Break</b></td>
    </tr>
    <tr>
        <td width="120px"><b>3:45 - 5:45 pm</b></td>
        <td><b>Industry Spotlight Talks</b><br>Session Chair: Kun Tan</td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Expressways: Unlocking the Full Potential of AI With Next-Gen Networking<br>
        <i>Dr. Gil Bloch (Senior Principal Architect at NVIDIA)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Compute Scaling for AI <a target="_blank" href="slides/Industry/ComputeScalingAPNet25.pdf">[Slides]</a><br><i><small>Dr. Fan Yang (Senior Principal Research Manager at MSR-Asia)</small></i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Technical Challenges for AI Cluster Network<br>
        <i>Dr. Binyang Liu (Director of Network Technology Lab, Huawei Central Research Institute)</i></td>
    </tr>
    <tr>
        <td width="120px"></td>
        <td>Luoshen: A Large Scale High Performance Cloud Network for Public Cloud<br>
        <i>Dr. Shunmin Zhu (Head of Cloud Network Division at Alibaba Cloud)</i></td>
    </tr>
    

    <tr>
        <td width="120px"><b>5:45 - 6:25 pm</b></td>
        <td><b>Panel Discussion: Joint Academia & Industry</b></td>
    </tr>
    <tr>
        <td width="120px"><b>6:25 - 6:30 pm</b></td>
        <td><b>Concluding Remarks</b><br>General/PC Chairs</td>
    </tr>
</table>




<?php include ("include/footer.php"); ?>
