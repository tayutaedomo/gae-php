# gae-php
Execute php script on Google App Engine.


# Local development
## Setup
Create a new GAE project.
- https://console.cloud.google.com/start/appengine

Download and install Google App Engine SDK.
- https://cloud.google.com/appengine/downloads#Google_App_Engine_SDK_for_PHP

Get source code and install packages.
```
$ git clone git@github.com:tayutaedomo/gae-php.git
$ curl -s https://getcomposer.org/installer | php
$ php composer.phar install
```

Launch local server.
- https://cloud.google.com/appengine/docs/php/tools/devserver
```
$ dev_appserver.py gae-php
```

Your App should now be running on localhost:8080.<br>
Your Admin should now be running on localhost:8000.

# Deploy
Deploy by following command:
```
$ appcfg.py -A <your app name> update app.yaml
```

Access to http://&lt;your app name&gt;.appspot.com/.

## By codeship
[ ![Codeship Status for tayutaedomo/gae-php](https://codeship.com/projects/47efc750-999a-0133-7859-72dca61597c3/status?branch=master)](https://codeship.com/projects/126275)

# Admin Console
- https://appengine.google.com/

# Source
## [index.php](https://github.com/tayutaedomo/gae-php/blob/master/app/index.php)
Show 'Hello World'.

## favicon
See: https://cloud.google.com/appengine/kb/#erroruris

## [phpinfo.php](https://github.com/tayutaedomo/gae-php/blob/master/app/phpinfo.php)
Show phpinfo.

## [session.php](https://github.com/tayutaedomo/gae-php/blob/master/app/session.php)
Use PHP session.

