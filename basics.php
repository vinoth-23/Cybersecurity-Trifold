<?php $links= basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']); ?>
<html>
  
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <meta name="description"”" content="Cyber Security/IT Networking - We make     your network a better and safer place!">
    <link rel="manifest" href="manifest.json" crossorigin="use-credentials" />
    <meta name="theme-color" content="#4472ca" />
    <link rel="stylesheet" href="css/main.css" />
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script>
$(document).ready(function(){
  
  $("#p2").hide();
  
  $("#btn2").click(function(){
    $("#p2").fadeToggle("slow", "linear");
  });
  
});
</script>
    <title>Trifold - Cyber Security</title>
 </head>

<body>
	<?php
$fn1=basename($_SERVER['SCRIPT_FILENAME']);
$fn2=explode(".","$fn1");
$f=$fn2[0];
?>
<?php include "menu.php"; ?>
    <header id="hero-about">
      <div class="container hero-inner">
        <div class="centered">
          <h1 class="heading-lg-underline">
           Cyber Basics  and Wireshark
          </h1>
        </div>
      </div>
    </header>

	<main>
      <section id="about">
        <div class="container">
          <div class="py-2">
            <div class="col-2">
              <div class="team">
                <h2 class="py-1">Wireshark The Cyber Security Tool </h2>
				<img src="logo_wireshark.jpg" alt="" class='img1'>
                <p> 
Gerald Combs was the original developer of Wireshark. The Wireshark team, a loose collective of people who patch problems and provide new functionality, is in charge of the ongoing development and maintenance of Wireshark.Additionally, many people have contributed protocol dissectors to Wireshark, and it is anticipated that this trend will continue.A piece of open source software called Wireshark distributed under the terms of the GNU’s  General Public License-GPL version number 2. Under the GPL, all source code is openly accessible. Wireshark can be customized to meet individual requirements.
                </p>
				<p>Being the  most prominent network protocol analyzer tool in the world, it can also be helpful for hacking aspects. An in-depth understanding of network activity is beneficial. It is accepted practice in a wide range of professions and academic settings. A network protocol analyzer, such as Wireshark, is a programme that records packets from a network connection, such as one connecting your computer to your home office or the internet. In a typical Ethernet network, a discrete unit of data is referred to as a packet. The most popular sniffer in use today is Wireshark.</p>
				<p>As the preferred network packet capture tool, Wireshark is one of the most helpful tools for IT professionals. Users may capture network packets with Wireshark and view them in detail. One can utilize these packets for offline or real-time analysis after they have been deconstructed. With the help of this application, anyone can examine their network traffic in detail, filter it, and dive down to find the source of any issues. This tool also helps with network analysis and, eventually, network security. Users can learn how to collect, decipher, filter, and inspect data packets using this free Wireshark tutorial to efficiently troubleshoot. It collects network packets from connections made by a computer to a home, workplace, or the internet. In a typical Ethernet network, a discrete unit of data is referred to as a packet. It can be used for a variety of things, including diagnosing networks with performance problems. Wireshark is frequently used by cybersecurity experts to trace connections, examine the content of dubious network transactions, and spot spikes in network traffic.</p>
<p>Wireshark used by </p>
<ul class='lst'> 
<li>Network administrators to diagnose network issues.</li>
<li>Network security engineers to analyze security issues.</li>
<li>QA engineers to validate network applications.</li>
<li>By the  developers to troubleshoot protocol implementations.</li>
<li>Others are using it to learn the internals of network protocols.</li>
</ul>

<h2 class="py-1">It’s Features  </h2>
<ul class='lst'> 
<li>Network administrators to diagnose network issues.</li>
<li>Available for UNIX and Windows.</li>
<li>Capture live packet data from a network interface.</li>
<li>Open files containing packet data captured with tcpdump/WinDump, Wireshark, and many other packet capture programs.</li>
<li>Import packets from text files containing hex dumps of packet data.</li>
<li>Display packets with very detailed protocol information.</li>
<li>Save packet data captured.</li>
<li>Export some or all packets in a number of capture file formats.</li>
<li>Filter packets on many criteria.</li>
<li>Search for packets on many criteria.</li>
<li>Colorize packet display based on filters.</li>
<li>Create various statistics.</li>
</ul>

<h2 class="py-1">It’s Functions  </h2>
<p>Wireshark is the most often-used packet sniffer in the world. Like any other packet sniffer, Wireshark does three things:</p>
<ol class='lst'> 
<li>Packet Capture: Wireshark listens to a network connection in real time and then grabs entire streams of traffic – quite possibly tens of thousands of packets at a time.</li>
<li>Filtering: Wireshark is capable of slicing and dicing all of this random live data using filters. By applying a filter, one can obtain just the information one needs to see.</li>
<li>Visualization: Wireshark, like any good packet sniffer, allows one to dive right into the very middle of a network packet. It also allows us to visualize entire conversations and network streams.</li>
</ol>

<h2 class="py-1">Why do you know Wireshark ?  </h2>
<p>Government organizations, educational institutions, enterprises, small businesses, and nonprofits all use the secure tool Wireshark to analyze network problems. It is not only employed for network performance debugging, spotting odd traffic, firewall leakage, incorrectly configured software, and protocol problems in all ways it helps in ethical hacking. Network protocol and packet analyzers, like Wireshark, are tools used by ethical hackers to gain a detailed understanding of a target network. For thorough vulnerability discovery and penetration testing, it's essential to understand how particular hosts and devices interact with one another on the target network. Despite the large number of well-liked hacking and investigation tools available—many of which are open-sourced—we asked the Twitter community to pick their top pick among four well-known alternatives. Almost 2,500 individuals cast ballots, and Wireshark received 52% of them, making it the undisputed winner.</p>
<img src="why_wireshark.png" alt="" class='img1'>
<p class='rght'><b>Image Source | CyberVistaEd</b></p>

<p><b>Live capture from many different network media</b> - Wireshark can capture traffic from many different network media types, including Ethernet, Wireless LAN, Bluetooth, USB, and more. The specific media types supported may be limited by several factors, including your hardware and operating system. </p>
<p><b>Import files from many other capture programs</b> -Wireshark can open packet captures from a large number of capture programs. </p>
<p><b>Export files for many other capture programs</b> - Wireshark can save captured packets in many formats, including those used by other capture programs. </p>
<p><b>Many protocol dissectors</b> - There are protocol dissectors (or decoders) for a great many protocols</p>
<p><b>Open Source Software</b> - Wireshark is an open source software project, and is released under the GNU General Public License (GPL). Wireshark can be used on any number of computers without the worry about license keys or cost. In addition, all source code is available for free under the GPL. Because of this, it is very easy for people to add new protocols to Wireshark, either as plugins, or built into the source.</p>

<h2 class="py-1">Is it possible with Wireshark ??? </h2>

<img src="shock.jpg" alt="" class='img1'>


<p>Do you connect to public networks frequently? </p>
<p>Admit it!!! You are vulnerable ………</p>
<h2 class="py-1">Scenario : Attacker Performing Credential Sniffing using wireshark </h2>
<iframe src="https://drive.google.com/file/d/1H5PrnfmSdAjA5CPyt3M89g2C17KbExTP/preview" width="100%" height="480" allow="autoplay"></iframe>

<h2 class="py-1">Wanna Skip Video ???? <span id='btn2'> Read Me …</span></h2> 

<div id='p2'>
<ul class='lst'> 
<li> Attacker as well as victim has been connected with same public network</li>
<img src="pic1.png" alt="" class='img1'>
<li>Wireshark software installed with the attacker 's device (refer: installation video link : How to install Wireshark on Windows 7 ).</li>
<li>Packet capture has been initialized with start and stop buttons to trace the send and receive packets</li>
<img src="pic2.png" alt="" class='img1'>
<li>Victim trying to login into some random website </li>
<img src="pic3.png" alt="" class='img1'>
<li>While analyzing the wireshark packets the Attacker has found something interesting which is the actual transfer of TCP packet ACK Probing (Raw HTTP request has been captured now).</li>
<img src="pic4.png" alt="" class='img1'>
<li>Attacker trying to view the HTTP packet which has a post request on it</li>
<img src="pic5.png" alt="" class='img1'>
<li>Clear text format data (login credentials) of victim  has identified by the attacker </li>
<img src="pic6.png" alt="" class='img1'>
<li>There is no security implementation at the victim side, so the attacker has easily identified the login credentials.</li>
</ul>
<p>Yes !!! There are a lot of activities which can be done with wireshark, in that specifically we are attempting credential sniffing of public networks. In this scenario Wireshark possibly do,</p>
<ul class='lst'> 
 <li>Packet analysis using wireshark  to figure out vulnerabilities of the public network.</li>
<li>Capture all kind of handshakes and protocols </li>
<li>Encode and decode with  any cryptographics algorithms</li>
</ul>

<h2 class="py-1">WireShark Limitations</h2> 
<ul class='lst'> 
<li>A user with little knowledge of network protocols cannot be helped by Wireshark. No tool, no matter how good it is, can really replace knowledge. In other words, in order to effectively utilize Wireshark, one must thoroughly understand how a network functions. That implies that knowledge of topics like the three-way handshakes  and numerous protocols, such as Transmission Control Protocol, User Datagram Protocol, Dynamic Host Configuration Protocol as well as Internet Control Message Protocol, is required.</li>
<li>Under typical conditions, Wireshark is unable to capture traffic from all of the other systems on the network. Wireshark (or any other common packet-capturing programme) can only sniff communications between the local computer and the remote machine it is dealing with on current networks that include switches.</li>
<li>While Wireshark can show malformed packets and apply color coding, it does not have actual alerts; Wireshark is not an intrusion detection system-IDS.</li>
<li>Wireshark can not help with decryption with regards to encrypted traffic.</li>
<li>With Wireshark it is quite easy to spoof  IPv4 packets. Wireshark can not really tell if a particular IP address it finds in a captured packet is a real one or not. That requires a bit more knowledge about the situation, as well as additional software.</li>
</ul>

       </div>
	   
	   <br><br>
		<a href='quiz.php' target='_blank'><input type='button' class="btn-dark" value='Quiz'></a>
		<br><br> 
              </div>
              
            </div>
          </div>
      </section>
    </main>
    <footer>
      <div class="container footer-inner">
        <p class="centered py-1">
          &copy; Copyright JSecurity 2022 All Rights Reserved
        </p>
      </div>
    </footer>
  </body>
  

  <script src="https://unpkg.com/feather-icons"></script>
  <script>
    feather.replace();
  </script>
  <script src="js/main.js"></script>
  
</html>