Pull the app container and run the fuzzer

../scripts/run_single_experiment.sh openemr/user --pull

../scripts/run_single_experiment.sh openemr/user 


Find exploits in `exploits/` named by CVE.

## Credentials

service           | username | password | other
------------------|----------|----------|-------
mysql             | root     | root     |
`/openemr`        | admin    | pass     |
`/openemr/portal` | portal-user   | password | e@mail.com

Many opportunities for exploits that have been detailed here:
https://www.open-emr.org/wiki/images/1/11/Openemr_insecurity.pdf
