# Simple MVC, OOP PHP microframework (View, Controller and BussinesLogic as Model).

# Requirements:
- PHP > 5.6 (PHP 7), Apache2


# Installation: 

1. Clone git repo and set up apache vhost with document root configured to webroot/index.php, e.g.:

Listen 127.0.1.1:8080  
<VirtualHost 127.0.1.1:8080>  
  ServerName microframework  
  DocumentRoot /path_to_your_folder/webroot  
  DirectoryIndex index.php  
  <Directory "/path_to_your_folder/webroot">  
    Options Indexes FollowSymLinks MultiViews  
    AllowOverride None  
    Allow from All  
    Require all granted  
  </Directory>  
</VirtualHost>  

2. Clone git repo and from webroot folder run from console: php -f index.php or from Controller folder: php -f MainController.php

