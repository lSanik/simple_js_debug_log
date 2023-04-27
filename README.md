# simple_js_debug_log
Simple java-script error back end log for your site.

It's a simple JS + PHP application will allow you to gather information about all JS errors on the website.

The reason I wrote this script is because there are now a huge number of devices and browsers, and it's difficult to understand why something somewhere is not working.

This script will help you identify the source of the error and provide an understanding of which page, device, and time the JS malfunction occurred.

I'm just leaving this code here, it's not standalone and requires additional effort to integrate into your system to work.

But perhaps it will help someone simplify their work with the website.

Good luck in finding and fixing errors! =)


Example view in database

1,TypeError: Cannot read properties of undefined (reading 'nodeName'),www.example.com/common.js,Uncaught TypeError: Cannot read properties of undefined (reading 'nodeName'),1,71080,www.example.com/my_home_page,2022-04-27 14:11:01,8.8.8.8,"Mozilla/5.0 (Linux; Android 11; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Mobile Safari/537.36"

2,SecurityError: Failed to read the 'localStorage' property from 'Window': Access is denied for this document.,www.example.com,Uncaught SecurityError: Failed to read the 'localStorage' property from 'Window': Access is denied for this document.,693,2134,www.example.com,2022-04-26 15:09:05,8.8.8.8,"Mozilla/5.0 (Linux; Android 10; Redmi Note 9 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/100.0.4896.127 Mobile Safari/537.36"

P.S. it's real log from my site, but i'm remove all personal information like user IP or domain name
