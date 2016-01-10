# gae-php
Execute php script on Google App Engine.


# Local development
## Setup
Create a new GAE project.
- https://console.cloud.google.com/start/appengine

Download and install Google App Engine SDK.
- https://cloud.google.com/appengine/downloads#Google_App_Engine_SDK_for_PHP

Get source code.
```
$ git clone git@github.com:tayutaedomo/gae-php.git
```

Launch local server.
- https://cloud.google.com/appengine/docs/php/tools/devserver
```
$ dev_appserver.py gae-php
```

Your App should now be running on localhost:8080.
Your Admin should now be running on localhost:8000.

# Deploy
Deploy by following command:
```
appcfg.py -A <your app name> update app.yaml
```

Access to http://<your app name>.appspot.com/.


# [helloworld.php](helloworld.php)
Show 'Hello World'.

# favicon
See: https://cloud.google.com/appengine/kb/#erroruris

