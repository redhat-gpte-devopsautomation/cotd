
COTD: Cat of the Day

php web application using JQuery Mobile that publishes a list of ordered items. 
Each item has an image and trivia associated with it.
Cats are used as a default sample list, but lists of abritary items and length can be used.

# Website

A sample running application is hosted on OpenShift Online V2.

    http://www.cotd.net.au

# Configuration

Lists can be customed by editing the contents in the data subdirectory.
Edit selector.php to point to subdirectory name of the list of interest.
Edit the rank.php file under the subdirectory of the selected list.
Add images as required in the images subdirectory with names matching list items.

# Logging

Whenever the user rates an item, an entry is written to the php log.
These entries can be filtered and then used to test hypotheses regarding user engagement.
An example entry is as follows:

    [Sun Sep 25 09:14:40.037909 2016] [:error] [pid 15] [client 172.17.0.1:46572] <COTD> { "user" : "e299ra835usa88pp19sr25ipg6", items" : [ {"adelaide" : "1"}, {"canberra" : "3"}, ] , "client_ip" : "172.17.0.1",  "sydney_time" : "2016:09:25 19:14:40",  } </COTD>, referer: http://localhost:8080/item.php?nextpage=canberra

# AB Deployment Example

To demonstrate AB deployments try the following:

    ## Setup Environment
    Fork this Git repo
    Visit https://www.openshift.org/vm/ to create an instance of OpenShift 

    ## Create Project
    Visit the Console at https://10.2.2.2:8443/console/ using credentials user/user
    Create a project called cotd with description "Cat of the Day"

    ## Create A Application
    Visit your Git repo and change the data/selector.php to point to "cats"
    Create a php application called cotd1 and point it to this Git repo
    Verify that the application using http://cotd1-cotd.apps.10.2.2.2.xip.io

    ## Create B Application
    Visit your Git repo and change the data/selector.php to point to "cities"
    Create a php application called cotd2 and point it to this Git repo
    Verify that the application using http://cotd2-cotd.apps.10.2.2.2.xip.io

    ## Create AB Route Target
    Switch to the Applications > Routes tab in the Console
    Create a route ab pointing to http://ab-cotd.apps.10.2.2.2.xip.io
 
    ## Create AB Routing Rule
    From a terminal window issue an $ oc login https://10.2.2.2:8443 with credentials user/user 
    Set the project to cotd using $ oc project cotd
    Create a AB route using $ oc set route-backends ab cotd1=50 cotd2=50
    Visit the Console at https://10.2.2.2:8443/console/ using credentials user/user
    Verify the AB 50/50 setting in the cotd project

    ## Verify AB Behavior
    Launch a a different browser and set cookies preferences to "never allow"
    Open http://ab-cotd.apps.10.2.2.2.xip.io 
    Refresh and note changes between cats and cities versions


# Running using Docker Toolbox

    $ docker pull spicozzi/cotd
    $ docker run -d -i -p 8080:80 spicozzi/cotd
    Browser http://localhost:8080

# Running on Openshift3

    oc new-project cotd --display-name="City of the day" --description='City of the day'
    oc new-app openshift/php:5.6~https://github.com/<repo>/cotd.git
    oc expose svc cotd

# Developing on the fly in Openshift3

Edit the buildconfig:

    -- change from Git to binary
    source:
      type: Git
      git:
        uri: 'https://github.com/eformat/cotd.git'
      secrets: null

    -- to this
    source:
      type: Binary

    -- then build with
    oc start-build --from-dir=. cotd

You may also wish to enable live reload for php image (don't do this in prod)

    oc set env dc/cotd OPCACHE_REVALIDATE_FREQ=0

# Parse the pods running statistics

For now:

    ./parseCotdLogs.pl $(oc get pods | grep cotd | grep Running | awk '{print $1}')
