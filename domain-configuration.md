## Domain Local Configuration

```
DNS Local
C:\Windows\System32\drivers\etc\hosts

Apache Configuration
C:\xampp\apache\conf\httpd.conf

Apache Virtual Host Configuration
C:\xampp\apache\conf\extra\httpd-vhosts.conf

<VirtualHost *:80>
    ServerAdmin webmaster@myappm.com
    DocumentRoot "C:/xampp/htdocs/4ampr/public"
    ServerName myappm.com
    ServerAlias www.myappm.com
    ErrorLog "logs/myappm.com-error.log"
    CustomLog "logs/myappm.com-access.log" common
</VirtualHost>
```