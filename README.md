# Example GuestBook Zend Framework1

This is a Zf Application, it makes for example and exercice.
The base of this script it's [this tutorial](http://framework.zend.com/manual/en/learning.quickstart.create-model.html).


```
<VirtualHost *:80>
    ServerName zf1-guestbook.local
    DocumentRoot "C:\xampp\htdocs\zf1-guestbook\public"

    SetEnv APPLICATION_ENV development

    <Directory "C:\xampp\htdocs\zf1-guestbook\public">
        Options Indexes FollowSymLinks
        AllowOverride All
        Order deny,allow
        Allow from all
    </Directory> 
</VirtualHost>
```

Sql Code for table db is
```
CREATE TABLE IF NOT EXISTS `guestbook` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(32) NOT NULL DEFAULT 'noemail@test.com',
  `comment` text,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;
```