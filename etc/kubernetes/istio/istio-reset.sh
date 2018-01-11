# Restart istio-system
kubectl delete pods --all -n=istio-system
kubectl get pods -n=istio-system
