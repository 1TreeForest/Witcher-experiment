cve=micro;plus=hms; docker kill $cve-$plus; sleep 1; docker run --privileged -id --rm --name $cve-$plus -w $(pwd) -v /p:/p -v /p/Witcher-experiment/early_experiments/microtests/coverages:/tmp/coverages witcherfuzz/php7run && docker exec -it $cve-$plus bash -c "chown www-data:wc /tmp/coverages; sudo chmod 777 /tmp/coverages; cd /p/Witcher-experiment/early_experiments/microtests; sudo bash ./install_db.sh; sudo bash ./initial_setup.sh; echo performance | sudo tee /sys/devices/system/cpu/cpu*/cpufreq/scaling_governor" && ipaddr=$(docker inspect $cve-$plus | jq '.[]|.NetworkSettings.Networks.bridge.IPAddress'|tr -d '"') && sed -r 's/(^.*form_url.*http:\/\/)[0-9\.]+(.*)/\1'"$ipaddr"'\2/' /p/Witcher-experiment/early_experiments/microtests/witcher_config.json > /tmp/tmpcfg.json && cp /tmp/tmpcfg.json witcher_config.json

----- not sure -----
timeout --signal KILL 4h node /helpers/request_crawler/main.js request_crawler http://172.17.0.2/ $(pwd) ; ret=$?; if [ $ret -eq 137 ] || [ $ret -eq 124 ] || [ $ret -eq 0 ]; then mkdir -p ../ccov && find . -name '*.cc.json' -exec cp {} ../ccov \; && echo "Crawl reached completion "; fi


timeout --signal KILL 3600s  node /helpers/request_crawler/main.js request_crawler http://localhost/ $(pwd)
