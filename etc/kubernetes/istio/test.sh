kubectl get pods -n=istio-system
echo ""
istioctl get routerules
echo ""

# Extract URL
export COTD_URL=$(kubectl get pod -n istio-system -l istio=ingress -o 'jsonpath={.items[0].status.hostIP}'):$(kubectl get svc istio-ingress -n istio-system -o 'jsonpath={.spec.ports[0].nodePort}')

# Test endpoints
echo "Testing ->" http://$COTD_URL/cats/item.php
curl -s http://$COTD_URL/cats/item.php | grep "data/images" | awk '{print $5}'; 
echo ""
sleep 2

echo "Testing ->" http://$COTD_URL/cities/item.php
curl -s http://$COTD_URL/cities/item.php | grep "data/images" | awk '{print $5}'; 
echo ""
sleep 2

echo "Testing ->" http://$COTD_URL/cats
curl -s http://$COTD_URL/cats | grep "data/images" | awk '{print $5}'; 
echo ""
sleep 2

echo "Testing ->" http://$COTD_URL/cities
curl -s http://$COTD_URL/cities | grep "data/images" | awk '{print $5}'; 
echo ""
sleep 2
