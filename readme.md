Installation (WAMP)
===

## Configure WAMP vhost

Edit C:\wamp\bin\apache\Apache2.2.21\conf\extra\httpd-vhosts.conf
	
	<VirtualHost *:80>
		DocumentRoot "C:\path\to\sydphp.org"
		ServerName sydphp.local
		ErrorLog "logs/webui.log"
		CustomLog "logs/webui.log" common
	</VirtualHost>
	

	
## Configure Hostfile	

Edit C:\Windows\System32\drivers\etc\hosts

	127.0.0.1		sydphp.local
	
	
	