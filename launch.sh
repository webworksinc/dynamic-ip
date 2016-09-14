#!/usr/bin/bash

ip=$(dig +short myip.opendns.com @resolver1.opendns.com)
echo $ip

#send IP to script
ip=$ip; curl -X GET "http://www.webworksmd.com/updateip.php${ip}"
