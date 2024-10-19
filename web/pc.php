<?php
    $page_title="Program Committee";
    include("include/header.php");
?>
<h1>Program Committee</h1>

<ul data-role="listview" data-inset="true" data-theme="a" data-content-theme="a" class="tbl">
  <li data-role="list-divider">PC Co-Chairs</li>
  <?php
    add_listitem("Theophilus Benson", "Carnegie Mellon University, USA", "https://www.andrew.cmu.edu/user/theophib/");
    add_listitem("Ying Zhang", "Meta, USA", "https://scholar.google.com/citations?user=bN8tDyAAAAAJ&hl=en");
  ?>
  <li data-role="list-divider">PC Members</li>
  <?php
    add_listitem("Gianni Antichi", "Politecnico di Milano, Italy", "https://gianniantichi.github.io/");
    add_listitem("Panda Aurojit", "NYU, USA", "https://cs.nyu.edu/~apanda/");
    add_listitem("Wei Bai", "Microsoft Research, USA", "https://baiwei0427.github.io/");
    add_listitem("Ran Ben Basat", "UCL, UK", "https://www.bbasat.com/");
    add_listitem("Ryan Beckett", "Microsoft Research, USA", "https://www.microsoft.com/en-us/research/people/rybecket/");
    add_listitem("Marco Canini", "KAUST, KSA", "https://mcanini.github.io/");
    add_listitem("Balakrishnan Chandrasekaran", "VU Amsterdam, Netherlands", "https://balakrishnanc.github.io/");
    add_listitem("Ang Chen", "University of Michigan", "https://www.cs.rice.edu/~angchen/");
    add_listitem("Kenjiro Cho", "IIJ Research Lab, Japan", "https://www.iij-ii.co.jp/en/members/kjc.html");
    add_listitem("Paolo Costa", "Microsoft Research, USA", "https://www.microsoft.com/en-us/research/people/pcosta/");
    add_listitem("Shir Landau Feibish", "University of Israel, Israel", "https://research.redhat.com/blog/project_member/shir-landau-feibish/#:~:text=Shir%20Landau%20Feibish%20is%20a,Jennifer%20Rexford.");
    add_listitem("Robert Grandl", "Google, USA", "https://pages.cs.wisc.edu/~rgrandl/");
    add_listitem("Dongsu Han", "KAIST, South Korea", "http://ina.kaist.ac.kr/~dongsuh/");
    add_listitem("Daehyeok Kim", "University of Texas, USA", "https://daehyeok.kim/");
    add_listitem("Kate Lin", "National Chiao Tung University, Taiwan", "https://people.cs.nctu.edu.tw/~katelin/");
    add_listitem("Vincent Liu", "UPenn, USA", "https://vincen.tl/");
    add_listitem("Ming Liu", "University of Wisconsin-Madison, USA", "https://pages.cs.wisc.edu/~mgliu/");
    add_listitem("Yunxin Liu", "Tsinghua University, China", "https://yunxinliu.github.io/");
    add_listitem("Zaoxing Liu", "UMD-College Park, USA", "https://zaoxing.github.io/");
    add_listitem("Palani Kodeswaran", "IBM, India", "https://redirect.cs.umbc.edu/~palanik1/");
    add_listitem("Sebastiano Miano", "Politecnico di Milano, Italy", "https://sebymiano.github.io/");
    add_listitem("Akshay Narayan", "ICSI, USA", "https://akshayn.xyz/");
    add_listitem("KyoungSoo Park", "KAIST, South Korea", "https://www.ndsl.kaist.edu/~kyoungsoo/");
    add_listitem("Naveen Sharma", "Google, USA", "mailto:nkrsharma@google.com");
    add_listitem("Haoyu Song", "Futurewei, USA", "https://www.linkedin.com/in/haoyu-song-d-sc-65687624/");
    add_listitem("Srikanth Sundaresan", "Meta, USA", "https://www.linkedin.com/in/srikanth-sundaresan-59016020/");
    add_listitem("Praveen Tammana", "Indian Institute of Technology Hyderabad, India", "https://www.iith.ac.in/cse/praveent/");
    add_listitem("Chen Tian", "Nanjing University, China", "https://cs.nju.edu.cn/tianchen/");
    add_listitem("Mythili Vutukuru", "Indian Institute of Technology, Bombay", "https://www.cse.iitb.ac.in/~mythili/");
    add_listitem("Xiaoliang Wang", "Nanjing University, China", "https://cs.nju.edu.cn/wangxiaoliang/index.htm");
    add_listitem("Chuan Wu", "HKU, Hong Kong SAR", "https://i.cs.hku.hk/~cwu/");
    add_listitem("Qiao Xiang", "Xiamen University, China", "https://qiaoxiang.me/");
    add_listitem("Hong Xu", "CUHK, Hong Kong SAR", "https://henryhxu.github.io/");
    add_listitem("Junxue Zhang", "HKUST, Hong Kong SAR", "https://snowzjx.me/");
    add_listitem("Pengyu Zhang", "Alibaba Group, USA", "https://pengyuzhang.github.io/");
    add_listitem("Zhi-Li Zhang", "University of Minnesota, USA", "https://www-users.cs.umn.edu/~zhang089/");
    add_listitem("Danyang Zhuo", "Duke University, USA", "https://danyangzhuo.com/");
    
    
    /*
    add_listitem("Aditya Akella", "University of Wisconsin Madison, USA", "http://pages.cs.wisc.edu/~akella/");
    add_listitem("Mohammad Alizadeh", "MIT, USA", "https://people.csail.mit.edu/alizadeh/");
    add_listitem("Katerina Argyraki", "EPFL, Switzerland", "http://people.epfl.ch/katerina.argyraki");
    add_listitem("Hari Balakrishnan", "MIT, USA", "http://nms.csail.mit.edu/~hari/");
    add_listitem("Hitesh Ballani", "Microsoft, UK", "http://research.microsoft.com/en-us/um/people/hiballan/");
    add_listitem("Sujata Banerjee", "HP Labs, USA", "http://www.labs.hpe.com/people/sujata_banerjee/");
    add_listitem("Suman Banerjee", "University of Wisconsin Madison, USA", "http://pages.cs.wisc.edu/~suman/");
    add_listitem("Theo Benson", "Duke University, USA", "https://users.cs.duke.edu/~tbenson/");
    add_listitem("Ranjita Bhagwan", "Microsoft, India", "http://research.microsoft.com/en-us/people/bhagwan/");
    add_listitem("Fabi&aacute;n Bustamante", "Northwestern University, USA", "http://www.cs.northwestern.edu/~fabianb/");
    add_listitem("Nandita Dukkipati", "Google, USA", "http://research.google.com/pubs/author39115.html");
    add_listitem("Nick Feamster", "Princeton University, USA", "http://www.cs.princeton.edu/~feamster/");
    add_listitem("Nate Foster", "Cornell University, USA", "http://www.cs.cornell.edu/~jnfoster/");
    add_listitem("Deepak Ganesan", "University of Massachusetts Amherst, USA", "https://people.cs.umass.edu/~dganesan/");
    add_listitem("Yashar Ganjali", "University of Toronto, Canada", "http://www.cs.toronto.edu/~yganjali/");
    add_listitem("Phillipa Gill", "Stony Broook University, USA", "http://www3.cs.stonybrook.edu/~phillipa/");
    add_listitem("Sergey Gorisnky", "IMDEA Networks Institute, Spain", "http://people.networks.imdea.org/~sergey_gorinsky/");
    add_listitem("Ramesh Govindan", "University of Southern California, USA", "http://sruti.usc.edu/");
    add_listitem("Mark Handley", "University College London, UK", "http://www0.cs.ucl.ac.uk/staff/M.Handley/");
    add_listitem("Srikanth Kandula", "Microsoft, USA", "http://research.microsoft.com/en-us/um/people/srikanth/home.html");
    add_listitem("Brad Karp", "University College London, UK", "http://www0.cs.ucl.ac.uk/staff/b.karp/");
    add_listitem("Ethan Katz-Bassett", "University of Southern California, USA", "http://www-bcf.usc.edu/~katzbass/");
    add_listitem("Teemu Koponen", "VMWare, USA", "http://www.vmware.com/");
    add_listitem("Swarun Kumar", "Carnegie Mellon University, USA", "http://www.andrew.cmu.edu/user/swarunk/index.html");
    add_listitem("Alex Liu", "Michigan State University, USA", "http://www.cse.msu.edu/~alexliu/");
    add_listitem("Harsha Madhyastha", "University of Michigan, USA", "http://web.eecs.umich.edu/~harshavm/");
    add_listitem("Bruce Maggs", "Duke University, USA", "https://users.cs.duke.edu/~bmm/");
    add_listitem("Ratul Mahajan", "Microsoft, USA", "http://research.microsoft.com/en-us/um/people/ratul/");
    add_listitem("Vishal Misra", "Columbia University, USA", "http://www.cs.columbia.edu/~misra/");
    add_listitem("Michael Mitzenmacher", "Harvard University, USA", "http://www.eecs.harvard.edu/~michaelm/");
    add_listitem("Jeff Mogul", "Google, USA", "http://research.google.com/pubs/JeffreyMogul.html");
    add_listitem("Andrew Moore", "University of Cambridge, UK", "http://www.cl.cam.ac.uk/~awm22/");
    add_listitem("Radhika Niranjan Mysore", "Google, USA", "http://research.google.com/pubs/RadhikaNiranjanMysore.html");
    add_listitem("Dave Oran", "Cisco, USA", "http://www.cisco.com/");
    add_listitem("Venkat Padmanabhan", "Microsoft, India", "http://research.microsoft.com/en-us/people/padmanab/");
    add_listitem("George Papen", "UC San Diego, USA", "http://fleece.ucsd.edu/~gpapen/");
    add_listitem("KyoungSoo Park", "KAIST, Korea", "http://www.ndsl.kaist.edu/~kyoungsoo/");
    add_listitem("Adrian Perrig", "ETH Zurich, Switzerland", "http://www.netsec.ethz.ch/people/aperrig/");
    add_listitem("Sylvia Ratnasamy", "UC Berkeley, USA", "https://www.eecs.berkeley.edu/~sylvia/");
    add_listitem("Vyas Sekar", "Carnegie Mellon University, USA", "http://users.ece.cmu.edu/~vsekar/");
    add_listitem("Scott Shenker", "UC Berkeley, USA", "https://www.eecs.berkeley.edu/Faculty/Homepages/shenker.html");
    add_listitem("Ankit Singla", "ETH Zurich, Switzerland", "https://people.inf.ethz.ch/asingla/");
    add_listitem("Joshua Smith", "University of Washington, USA", "https://sensor.cs.washington.edu/jrs.html");
    add_listitem("Alex Snoeren", "UC San Diego, USA", "http://cseweb.ucsd.edu/~snoeren/");
    add_listitem("Ion Stoica", "UC Berkeley, USA", "http://www.cs.berkeley.edu/~istoica/");
    add_listitem("Pramod Vishwanath", "University of Illinois Urbana-Champaign , USA", "http://www.ifp.illinois.edu/~pramodv/");
    add_listitem("Geoff Voelker", "UC San Diego, USA", "http://cseweb.ucsd.edu/~voelker/");
    add_listitem("Philip Watts", "University College London, UK", "http://www.ee.ucl.ac.uk/staff/academic/pwatts");
    add_listitem("David Wetherall", "Google &amp; University of Washington, USA", "https://djw.cs.washington.edu/");
    add_listitem("Keith Winstein", "Stanford University, USA", "http://cs.stanford.edu/~keithw/");
    add_listitem("Minlan Yu", "University of Southern California, USA", "http://www-bcf.usc.edu/~minlanyu/");
    add_listitem("Matei Zaharia", "MIT, USA", "https://people.csail.mit.edu/matei/");
    add_listitem("Ellen Zegura", "Georgia Tech, USA", "http://www.cc.gatech.edu/fac/Ellen.Zegura/");
    add_listitem("Ming Zhang", "Alibaba Group, USA", "http://www.alibabagroup.com/");
      */
  ?>
</ul>

<?php include ("include/footer.php"); ?>