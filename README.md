# streaming
<h1>Streamign ecosystem for Video OTT delivery using HLS </h1>

Features: 
This ecosystem allow you to deliver video content over the internet or local network with a highly scalable architecture. As part of the main features is also to index and process the video to be prepared for internet and ABR transport protocols like HLS (Stage 1) and DASH (Stage 2)

The main idea for this project is to fulfill the actual requirements for a small company which want to have a streamign service reliable and robust enough to be used for production environment.

<h3>Software elements and environment:</h3>

-Ubuntu Server ( Minimum 12GB Ram and 4 Cores)
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

<h3> STEP 2: Admin and Operations web portal </h3>

<h3> STEP : Database </h3> 

<h3> STEP : Video transcoding and processing </h3>

ffmpeg -i /tmp/hls/saitama.mp4 -c:v libx264 -c:a aac -strict experimental -b:v 1000k -b:a 128k -hls_time 3 -hls_list_size 0 -f hls /tmp/hls/streaming.m3u8
![image](https://github.com/user-attachments/assets/3d0b41a0-61a7-413e-a7d3-9931d009cdbe)




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

<h3> STEP : API - Dynamic Video Library </h3>

<h3> STEP : Content protection </h3>

<h3> STEP : Main page for video consumption </h3>




