
Cat/City of the Day

Pages ordered by favourites decending based on rank.php

Interface: Swipe right for recording favourite - written as message to console.log Swipe left to scroll choices

A/B Use Case: Users record top preference using the application. Ater certain period, results in console.log are aggregrated. rank.php is edited to reflect results Change in rank.php triggers A/B deployment

Visit example at http://cotd-spicozzi.rhcloud.com/

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
