# Kali GPT Offensive Prompt Field Guide 🐉

**From Reconnaissance to Post-Exploitation**
*Your Red Team Companion for Kali Linux & Offensive Security*

---

## 🕵️ Reconnaissance & Footprinting

* **Prompt:** Perform passive recon on `example.com` using open-source tools. List exact commands and tools.
  - **Tags:** \[Passive Recon] \[Beginner] \[OSINT]

* **Prompt:** Simulate recon using theHarvester. What details should I look for in the output?
  - **Tags:** \[Email Harvesting] \[Intermediate]

* **Prompt:** How do I fingerprint a target's web tech stack using WhatWeb and Wappalyzer in Kali?
  - **Tags:** \[Web Recon] \[Tool Usage]

* **Prompt:** Enumerate subdomains using dnsenum and dnsrecon, and explain the differences in output.
  - **Tags:** \[DNS Recon] \[Brute Force]

* **Prompt:** What's the difference between active and passive DNS recon? Show me tools and examples of each.
  - **Tags:** \[Theory] \[Recon] \[Intermediate]

---

## 📡 Scanning & Enumeration

* **Prompt:** Create a fast but detailed Nmap scan for a live target with OS and version detection.
  - **Tags:** \[Nmap] \[Speed Scan] \[Live Host]

* **Prompt:** How do I perform SMB enumeration using enum4linux and smbclient? Explain outputs.
  - **Tags:** \[Windows Enum] \[SMB]

* **Prompt:** Generate a Bash script to automate service enumeration for HTTP, FTP, and SSH.
  - **Tags:** \[Automation] \[Bash] \[Intermediate]

* **Prompt:** Use Kali GPT to generate Gobuster and Dirb commands to brute-force directories on a web server.
  - **Tags:** \[Web Fuzzing] \[Wordlists]

* **Prompt:** Enumerate users from an exposed RPC or LDAP service. What tools should I use?
  - **Tags:** \[RPC Enum] \[Active Directory]

---

## 💥 Exploitation

* **Prompt:** Search for known CVEs in Apache 2.4.49. Suggest a Metasploit module and usage example.
  - **Tags:** \[CVEs] \[Metasploit]

* **Prompt:** Generate an msfvenom reverse TCP payload for Windows over port 443, explain the encoding options.
  - **Tags:** \[Payloads] \[Encoding]

* **Prompt:** Create a Python reverse shell and obfuscate it. Walk me through how it bypasses basic AV.
  - **Tags:** \[Scripting] \[Obfuscation]

* **Prompt:** What are effective privilege escalation vectors after gaining access to a Linux host with limited shell?
  - **Tags:** \[Post Exploitation] \[Linux]

* **Prompt:** Demonstrate a file upload attack on DVWA medium security, and how to trigger the shell.
  - **Tags:** \[Web Exploits] \[Labs]

---

## 🛡️ Privilege Escalation

* **Prompt:** Analyze LinPEAS output. What red flags should I focus on for privilege escalation?
  - **Tags:** \[LinPEAS] \[Analysis]

* **Prompt:** What is the difference between Kernel, SUID, and Capability-based privesc? Provide exploit examples.
  - **Tags:** \[Linux Privesc] \[Theory]

* **Prompt:** Enumerate misconfigured services on Windows using winPEAS. How do I exploit a vulnerable service binary?
  - **Tags:** \[Windows] \[Service Exploit]

* **Prompt:** Find writable cron jobs or scheduled tasks. Generate exploitation steps with a payload example.
  - **Tags:** \[Crontab] \[Persistence]

* **Prompt:** I found a Docker group user. How can I escape from the container to host in Linux?
  - **Tags:** \[Containers] \[Breakout]

---

## 🎯 Post-Exploitation

* **Prompt:** How can I use BloodHound from a compromised domain user to map privilege paths?
  - **Tags:** \[BloodHound] \[AD Recon]

* **Prompt:** Perform credential dumping from memory on a Windows target. What tools and techniques can I use safely in labs?
  - **Tags:** \[Mimikatz] \[Labs Only]

* **Prompt:** Generate a persistence method using a scheduled task in PowerShell. Explain how blue teams might detect it.
  - **Tags:** \[Persistence] \[PowerShell]

* **Prompt:** How do I exfiltrate files covertly over DNS or ICMP using Kali tools?
  - **Tags:** \[Covert Channels] \[Advanced]

* **Prompt:** List the top 3 anti-forensics techniques used by red teams post-compromise and their impact.
  - **Tags:** \[Anti-Forensics] \[Post Exploit]

---

## 🕵️‍♂️ C2 & Evasion

* **Prompt:** Guide me in setting up a Mythic C2 profile over HTTPS with a Python agent. What OPSEC settings should I enable?
  - **Tags:** \[Mythic] \[OPSEC]

* **Prompt:** How can I encode a payload using Veil or Shikata ga nai to evade AV in Kali Linux?
  - **Tags:** \[AV Evasion] \[Encoding]

* **Prompt:** Design a multi-stage payload that downloads an obfuscated script for further exploitation. Break it down step-by-step.
  - **Tags:** \[Multi-Stage] \[Payload Engineering]


---

*Written By nikhilpatidar01*

---
