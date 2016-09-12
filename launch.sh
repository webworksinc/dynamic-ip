#!/usr/bin/bash

ip=$(dig +short myip.opendns.com @resolver1.opendns.com)
echo $ip

#send IP to script
#curl --data "ip=$IP" http://www.example.com
