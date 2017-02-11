This is the code behind the website at www.ecolefrancodanoise.dk
================================================================
The general idea behind the design is to keep it as simple as possible while
 * allowing contributions in the form of markdown text
 * having a tree menu available for navigation.

It depends on Apache and PHP.


How to install
--------------
```
sudo apt-get install apache2 libmarkdown-php

sudo a2enmod rewrite

cd /var/www #assuming here that you have write access to /var/www
git clone git@github.com:raisoman/www.ecolefrancodanoise.dk.git local.ecolefrancodanoise.dk
cd local.ecolefrancodanoise.dk; cp parameters.php.dist parameters.php

mkdir /var/log/apache2/local.ecolefrancodanoise.dk

sudo cp www.ecolefrancodanoise.dk.conf.dist /etc/apache/sites-available/local.ecolefrancodanoise.dk.conf
```

Configure local.ecolefrancodanoise.dk.conf to point to the proper DocumentRoot, Directory and log directory

edit /etc/hosts and add the line

```
127.0.0.1 local.ecolefrancodanoise.dk
```

Then

```
a2ensite local.ecolefrancodanoise.dk.conf
```

Updating the site
-----------------
New items that need to appear in the navigation menu are entered in the file inc/menu_struct_user.inc and should be added as Markdown files (with the .mdwn extension).
