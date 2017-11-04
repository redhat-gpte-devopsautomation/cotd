export COTD_URL=$(kubectl get pod -n istio-system -l istio=ingress -o 'jsonpath={.items[0].status.hostIP}'):$(kubectl get svc istio-ingress -n istio-system -o 'jsonpath={.spec.ports[0].nodePort}')

echo $COTD_URL

curl -s http://$COTD_URL/cats/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cats/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cats/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cats/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cats/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cats/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cats/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cats/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cats/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cats/item.php | grep "data/images" | awk '{print $5}'; 


curl -s http://$COTD_URL/cities/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cities/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cities/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cities/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cities/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cities/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cities/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cities/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cities/item.php | grep "data/images" | awk '{print $5}'; 
curl -s http://$COTD_URL/cities/item.php | grep "data/images" | awk '{print $5}'; 

