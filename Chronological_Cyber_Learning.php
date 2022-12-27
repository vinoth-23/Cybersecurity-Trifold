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
           Chronological Cyber Learning
          </h1>
        </div>
      </div>
    </header>

	<main>
      <section id="about">
        <div class="container">
          <div class="py-12">
<h2 class="py-1"><span class="blue-italic">Chronological Cyber </span></h2>
                <p> 
Regardless of your role in an organization, this concept of cybersecurity was compiled for everyone from the security professional to the general end-user. Here, you’ll find definitions of terms commonly used in the security industry. Uncover knowledge areas in which you excel and where you want to expand.
                </p>
<ol class='lst1'>
		  <li> A</li>
<ul class='lst'>
<li><b>access control</b> — The means and mechanisms of managing access to and use of resources by users. There are three primary forms of access control: DAC, MAC, and RBAC. DAC (Discretionary Access Control) manages access through the use of on-object ACLs (Access Control Lists), which indicate which users have been granted (or denied) specific privileges or permissions on that object. MAC (Mandatory Access Control) restricts access by assigning each subject and object a classification or clearance level label; resource use is then controlled by limiting access to those subjects with equal or superior labels to that of the object. RBAC (Role Base Access Control) controls access through the use of job labels, which have been assigned the permissions and privilege needed to accomplish the related job tasks. (Also known as authorization.)</li>
<li><b>anti-virus (anti-malware)</b> — A security program designed to monitor a system for malicious software. Once malware is detected, the AV program will attempt to remove the offending item from the system or may simply quarantine the file for further analysis by an administrator. It is important to keep AV software detection databases current in order to have the best chance of detecting known forms of malware.</li>
</ul>
<li> B</li>
<ul class='lst'>
<li><b>backing up</b> — Creating a duplicate copy of data onto a separate physical storage device or online/cloud storage solution. A backup is the only insurance against data loss. With a backup, damaged or lost data files can be restored. Backups should be created on a regular, periodic basis such as daily. A common strategy is based on the 3-2-1 rule: you should have three copies of your data - the original and 2 backups; you should use 2 different types of media (such as a physical media (such as a hard drive or tape) and a cloud storage solution); and do not store the three copies of data in 1 plane (i.e. backups should be stored offsite). It is important to store backups for disaster recovery at an offsite location in order to insure they are not damaged by the same event that would damage the primary production location. However, additional onsite backups can be retained for resolving minor issues such as accidental file deletion or hard drive failure.</li>
<li><b>BCP (Business Continuity Planning)</b> — A business management plan used to resolve issues that threaten core business tasks. (Also known as Business Continuity Management.) The goal of BCP is to prevent the failure of mission critical processes when they have be harmed by a breach or accident. Once core business tasks have been stabilized, BCP dictates the procedure to return the environment back to normal conditions. BCP is used when the normal security policy has failed to prevent harm from occurring, but before the harm has reached the level of fully interrupting mission critical processes, which would trigger the Disaster Recovery Process (DRP).</li>
</ul>

<li> C</li>
<ul class='lst'>
<li><b>ciphertext </b> — The unintelligible and seeming random form of data that is produced by the cryptographic function of encryption. Ciphertext is produced by a symmetric algorithm when a data set is transformed by the encryption process using a selected key. Ciphertext can converted back into its original form (i.e. plain text) by performing the decryption process using the same symmetric encryption algorithm and the key used during the encryption process. (Also known as cryptogram.)</li>
<li><b>clickjacking </b> — A malicious technique by which a victim is tricked into clicking on a URL, button or other screen object other than that intended by or perceived by the user. Clickjacking can be performed in many ways; one of which is to load a web page transparently behind another visible page in such a way that the obvious links and objects to click are facades, so clicking on an obvious link actually causes the hidden page's link to be selected.</li>
</ul>

<li> D</li>
<ul class='lst'>
<li><b>clickjacking </b> — The occurrence of disclosure of confidential information, access to confidential information, destruction of data assets or abusive use of a private IT environment. Generally, a data breach results in internal data being made accessible to external entities without authorization.</li>
<li><b>data integrity  </b> — A security benefit that verifies data is unmodified and therefore original, complete and intact. Integrity is verified through the use of cryptographic hashing. A hashing algorithm generates a fixed length output known as a hash value, fingerprint or MAC (Message Authenticating Code), which is derived from the input data but which does not contain the input data. This makes hashing a one-way operation. A hash is calculated before an event, and another hash is calculated after the event (an event can be a time frame of storage (i.e. data-at-rest) or an occurrence of transmission (i.e. data-in-transit); the two hashes are then compared using an XOR Boolean operation. If the two hashes exactly match (i.e. the XOR result is zero), then the data has retained its integrity. However, if the two hashes do not match exactly (i.e. the XOR result is a non-zero value), then something about the data changed during the event.</li>
</ul>

<li> E</li>
<ul class='lst'>
<li><b>eavesdropping  </b> — The act of listening in on a transaction, communication, data transfer or conversation. Eavesdropping can be used to refer to both data packet capture on a network link (also known as sniffing or packet capture) and to audio recording using a microphone (or listening with ears).</li>
<li><b>encode   </b> — The act which transforms plaintext or cleartext (i.e. the original form of normal standard data) into ciphertext (i.e. the unintelligible and seeming random form of data that is produced by the cryptographic function of encryption). Ciphertext is produced by a symmetric encryption algorithm when a data set is transformed by the encryption process using a selected key (i.e. to encrypt or encode). Ciphertext can converted back into its original form (i.e. plaintext) by performing the decryption process using the same symmetric encryption algorithm and the same key used during the encryption process (i.e. decrypt or decode).</li>
</ul>

<li> F</li>
<ul class='lst'>
<li><b>firewall </b> — A security tool, which may be a hardware or software solution that is used to filter network traffic. A firewall is based on an implicit deny stance where all traffic is blocked by default. Rules, filters or ACLs can be defined to indicate which traffic is allowed to cross the firewall. Advanced firewalls can make allow/deny decisions based on user authentication, protocol, header values and even payload contents.</li>
</ul>
		  
<li> H</li>
<ul class='lst'>
<li><b>hacker </b> — A person who has knowledge and skill in analyzing program code or a computer system, modifying its functions or operations and altering its abilities and capabilities. A hacker may be ethical and authorized (the original definition) or may be malicious and unauthorized (the altered but current use of the term). Hackers can range from professionals who are skilled programmers to those who have little to no knowledge of the specifics of a system or exploit but who can follow directions; in this instance, they are called script kiddies.</li>
<li><b>hacktivism </b> — Attackers who hack for a cause or belief rather than some form of personal gain. Hacktivism is often viewed by attackers as a form of protest or fighting for their perceived “right” or “justice.” However, it is still an illegal action in most cases when the victim’s technology or data is abused, harmed or destroyed.</li>
</ul>

<li> I</li>
<ul class='lst'>
<li><b>IaaS (Infrastructure-as-a-Service)</b> — A type of cloud computing service where the provider offers the customer the ability to craft virtual networks within their computing environment. An IaaS solution enables a customer to select which operating systems to install into virtual machines/nodes as well as the structure of the network including use of virtual switches, routers and firewalls. It also provides complete freedom as to the software or custom code run on the virtual machines. An IaaS solution is the most flexible of all the cloud computing services; it allows for significant reduction in hardware by the customer in their own local facility. It is the most expensive form of cloud computing service.</li>
<li><b>identity cloning</b> — A form of identity theft in which the attacker takes on the identity of a victim and then attempts to live and act as the stolen identity. Identity cloning is often performed in order to hide the birth country or a criminal record of the attacker in order to obtain a job, credit or other secured financial instrument.</li>
</ul>
		  
<li> J</li>
<ul class='lst'>
<li><b>JBOH (JavaScript-Binding-Over-HTTP) </b> — JBOH (JavaScript-Binding-Over-HTTP) — A form of Android-focused mobile device attack that enables an attacker to be able to initiate the execution of arbitrary code on a compromised device. A JBOH attack often takes place or is facilitated through compromised or malicious apps.</li>
</ul>

<li> K</li>
<ul class='lst'>
<li><b>keylogger </b> — Any means by which the keystrokes of a victim are recorded as they are typed into the physical keyboard. A keylogger can be a software solution or a hardware device used to capture anything that a user might type in including passwords, answers to secret questions or details and information form e-mails, chats and documents.</li>
</ul>

<li> L</li>
<ul class='lst'>
<li><b>LAN (Local Area Network)</b> — An interconnection of devices (i.e. a network) that is contained within a limited geographic area (typically a single building). For a typical LAN, all of the network cables or interconnection media is owned and controlled by the organization unlike a WAN (Wide Area Network) where the interconnection media is owned by a third party.</li>
<li><b>link jacking</b> — A potentially unethical practice of redirecting a link to a middle-man or aggregator site or location rather than the original site the link seemed to indicate it was directed towards. For example, a news aggregation service may publish links that seem as if they point to the original source of their posted articles, but when a user discovers those links via search or through social networks, the links redirect back to the aggregation site and not the original source of the article.</li>
</ul>

<li> M</li>
<ul class='lst'>
<li><b>malware (malicious software) </b> — Any code written for the specific purpose of causing harm, disclosing information or otherwise violating the security or stability of a system. Malware includes a wide range of types of malicious programs including: virus, worm, Trojan horse, logic bomb, backdoor, Remote Access Trojan (RAT), rootkit, ransomware and spyware/adware.</li>
</ul>

<li> O</li>
<ul class='lst'>
<li><b>outsider threat</b> — The likelihood or potential that an outside entity, such as an ex-employee, competitor or even an unhappy customer, may pose a risk to the stability or security of an organization. An outsider must often gain logical or physical access to the target before launching malicious attacks.</li>
<li><b>outsourcing </b> — The action of obtaining services from an external entity. Rather than performing certain tasks and internal functions, outsourcing enables an organization to take advantages of external entities that can provide services for a fee. Outsourcing is often used to obtain best-of-breed level service rather than settling for good-enough internal operations. It can be expensive and increases an organization's security risk due to the exposure of internal information and data to outsiders.</li>
</ul>

<li> P</li>
<ul class='lst'>
<li><b>PaaS (Platform-as-a-Service)</b> — A type of cloud computing service where the provider offers the customer the ability to operate custom code or applications. A PaaS operator determines which operating systems or execution environments are offered. A PaaS system does not allow the customer to change operating systems, patch the OS or alter the virtual network space. A PaaS system allows the customer to reduce hardware deployment in their own local facility and to take advantage of on-demand computing (also known as pay as you go).</li>
<li><b>packet sniffing</b> — The act of collecting frames or packets off of a data network communication. This activity allows the evaluation of the header contents as well as the payload of network communications. Packet sniffing requires that the network interface card be placed into promiscuous mode in order to disable the MAC (Media Access Control) address filter which would otherwise discard any network communications not intended for the specific local network interface. (Also known as sniffing or eavesdropping.)</li>
</ul>

<li> R</li>
<ul class='lst'>
<li><b>ransomware </b> — A form of malware that holds a victim's data hostage on their computer typically through robust encryption. This is followed by a demand for payment in the form of Bitcoin (an untraceable digital currency) in order to release control of the captured data back to the user.</li>
<li><b>Restore</b> — The process of returning a system back to a state of normalcy. A restore or restoration process may involve formatting the main storage device before re-installing the operating system and applications as well as copying data from backups onto the reconstituted system.</li>
</ul>

<li> S</li>
<ul class='lst'>
<li><b>SaaS (Software-as-a-Service)</b> — A type of cloud computing service where the provider offers the customer the ability to use a provided application. Examples of a SaaS include online e-mail services or online document editing systems. A user of a SaaS solution is only able to use the offered application and make minor configuration tweaks. The SaaS provider is responsible for maintaining the application.</li>
<li><b>sandboxing </b> — A means of isolating applications, code or entire operating systems in order to perform testing or evaluation. The sandbox limits the actions and resources available to the constrained item. This allows for the isolated item to be used for evaluation while preventing any harm or damage to be caused to the host system or related data or storage devices.</li>
</ul>

<li> T</li>
<ul class='lst'>
<li><b>threat assessment</b> — The process of evaluating the actions, events and behaviors that can cause harm to an asset or organization. Threat assessment is an element of risk assessment and management. (Also known as threat modeling and threat inventory.)</li>
<li><b>Trojan Horse (Trojan)</b> — A form of malware where a malicious payload is imbedded inside of a benign host file. The victim is tricked into believing that the only file being retrieved is the viewable benign host. However, when the victim uses the host file, the malicious payload is automatically deposited onto their computer system.</li>
</ul>

<li> U</li>
<ul class='lst'>
<li><b>unauthorized access</b> — Any access or use of a computer system, network or resource which is in violation of the company security policy or when the person or user was not explicitly granted authorization to access or use the resource or system</li>
</ul>
		  
<li> V</li>
<ul class='lst'>
<li><b>VPN (Virtual Private Network)</b> — A communication link between systems or networks that is typically encrypted in order to provide a secured, private, isolate pathway of communications.</li>
<li><b>virus </b> — A form of malware that often attaches itself to a host file or the MBR (Master Boot Record) as a parasite. When the host file or MBR is accessed, it activates the virus enabling it to infect other objects. Most viruses spread through human activity within and between computers. A virus is typically designed to damage or destroy data, but different viruses implement their attack at different rates, speeds or targets. For example, some viruses attempt to destroy files on a computer as quickly as possible while others may do so slowly over hours or days. Others might only target images or Word documents (.doc/.docx).</li>
</ul>
		  

<li> W</li>
<ul class='lst'>
<li><b>whitelist </b> — A security mechanism prohibiting the execution of any program that is not on a pre-approved list of software. The whitelist is often a list of the file name, path, file size and hash value of the approved software. Any code that is not on the list, whether benign or malicious, will not be able to execute on the protected system. (See blacklist.)</li>
<li><b>Wi-Fi</b> — A means to support network communication using radio waves rather than cables. The current Wi-Fi or wireless networking technologies are based on the IEE 802.11 standard and its numerous amendments, which address speed, frequency, authentication and encryption.</li>
</ul>

<li> Z</li>
<ul class='lst'>
<li><b>zombie </b> — A term related to the malicious concept of a botnet. The term zombie can be used to refer to the system that is host to the malware agent of the botnet or to the malware agent itself. If the former, the zombie is the system that is blinding performing tasks based on instructions from an external and remote hacker. If the latter, the zombie is the tool that is performing malicious actions such as DoS flooding, SPAM transmission, eavesdropping on VoIP calls or falsifying DNS resolutions as one member of a botnet. </li>
</ul>
		  
</ol>		 

<br><br>
		<a href='quiz.php' target='_blank'><input type='button' class="btn-dark" value='Quiz'></a>
		<br><br> 
 
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