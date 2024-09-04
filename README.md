# streaming
<h1>Streaming ecosystem for Video OTT delivery using HLS </h1>

Features: 
This ecosystem allow you to deliver video content over the internet or local network with a highly scalable architecture. As part of the main features is also to index and process the video to be prepared for internet and ABR transport protocols like HLS (Stage 1) and DASH (Stage 2)

The main idea for this project is to fulfill the actual requirements for a small company which want to have a streamign service reliable and robust enough to be used for production environment.

<h3>Software elements and environment:</h3>

-Ubuntu Server ( Minimum 12GB Ram and 4 Cores)
-Raspberry OS
-Nginx
-Nginx RTMP
-MySQL (PostgreSQL can be added but this project is only for MySQL)
-FFMPEG
-PHP
-Javascript
-IP addressing plan

<h3>STEP 1: Initial server configuration</h3>

IP/Networking config and requirements

Software instalation

<h3> STEP : Admin and Operations web portal </h3>

<h3> STEP : Monitoring </h3> 

To ensure optimal performance and reliability, the server requires continuous monitoring of key parameters such as RAM usage, CPU load, storage utilization, network traffic, and active worker processes.
A web server built with Flask will expose these metrics via a RESTful API, providing a structured and easily accessible endpoint for data retrieval.
An administrative console or management portal will consume the API data, uploading the metrics to a centralized database for long-term storage and analysis. This portal will also feature a web-based interface for real-time visualization and monitoring of the server's health and performance.

Conectivity parameters required for API monitoring data consumption: 
Server IP:
TCP Port:
Data to be shown: 

To keep the monitor active:
sudo apt update
sudo apt install tmux
tmux new -s monitor
python3 /home/sgonzalezm/monitor.py


Example: 

<h3> STEP : Database </h3> 

<h3> STEP : Video transcoding and processing </h3>

ffmpeg -i /tmp/hls/saitama.mp4 -c:v libx264 -c:a aac -strict experimental -b:v 1000k -b:a 128k -hls_time 3 -hls_list_size 0 -f hls /tmp/hls/streaming.m3u8

<br>
1.- Watch folder for ingest
<br>
2.- File transfer SFTP


<h3> STEP : Multiscreen ABR </h3>

<h3> STEP : Domain and intertet access </h3>

DNS
VPN
IPV4
IPv6
Network routing
Network isolation

The first stage about the domain and OTT video delivery consider a basic server on premise which currently is running IPV6 link global to provide the service,
it is not the most interactive and dynamic way to deploy the system. 

Keeping on mind it , the main page will be hosted in the cloud, this main page will manage all the links to the multiple content are available in the on-prem server which is going to keep the IP address.

On a regular basis the server is going to register the IPv6 global it has assigned, this action will be performed through API to the web service in the cloud and it will log into the database.
If there is more than one server, each server will register its own IPv6 address.

Of curse there are many other approaches for this kind of services , but most of them requires a CDN which is currently beyond economical, the main idea again is to keep the cost as minimum.
Once the system is big enough to consider a CDN, it could be possible to have a dedicated link and increase the server capacity, recall this is not cloud based service but old school highly specialized service.

<h3> STEP : API - Dynamic Video Library </h3>

<h3> STEP : Content protection </h3>

<h3> STEP : Main page for video consumption </h3>

<h3> STEP : Mobile Android App </h3>

Native Player using HLS + Fairplay

<h3> STEP : Mobile iOS App </h3>

Native Player using MPEG-DASH + Widevine







