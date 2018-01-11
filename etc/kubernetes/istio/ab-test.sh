istioctl get routerules
echo ""

# Extract URL
export COTD_URL=$(kubectl get pod -n istio-system -l istio=ingress -o 'jsonpath={.items[0].status.hostIP}'):$(kubectl get svc istio-ingress -n istio-system -o 'jsonpath={.spec.ports[0].nodePort}')
echo $COTD_URL
echo ""

while true; do curl -s http://$COTD_URL/item.php | grep "data/images" | awk '{print $5}'; sleep 2; done
