
Cat/City of the Day

Pages ordered by favourites decending based on rank.php

Interface: Swipe right for recording favourite - written as message to console.log Swipe left to scroll choices

A/B Use Case: Users record top preference using the application. Ater certain period, results in console.log are aggregrated. rank.php is edited to reflect results Change in rank.php triggers A/B deployment

Visit example at http://cotd-spicozzi.rhcloud.com/

# Running on Openshift3
oc new-project cotd --display-name="City of the day" --description='City of the day'
oc new-app openshift/php:5.6~https://github.com/<repo>/cotd.git
oc expose svc cotd