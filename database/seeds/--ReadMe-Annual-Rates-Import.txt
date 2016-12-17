FedEx has this crappy form that takes forever.. or you can just follow these links.

Here you go, bro:
ftp://ftp.fedex.com/pub/us/rates/downloads/documents2/PO.csv
ftp://ftp.fedex.com/pub/us/rates/downloads/documents2/2DayAM.csv
ftp://ftp.fedex.com/pub/us/rates/downloads/documents2/SO.csv
ftp://ftp.fedex.com/pub/us/rates/downloads/documents2/2Day.csv
ftp://ftp.fedex.com/pub/us/rates/downloads/documents2/FO.csv
ftp://ftp.fedex.com/pub/us/rates/downloads/documents2/ESP.csv
ftp://ftp.fedex.com/pub/us/rates/downloads/documents2/Ground.csv
ftp://ftp.fedex.com/pub/us/rates/downloads/documents2/FHD.csv
ftp://ftp.fedex.com/pub/us/rates/downloads/documents2/SameDay.csv

(yes, fedex has their ftp wide open)

Here is your checklist:

    √  Save these as CSV files
    √  nix all the garbage text before the zones
    √  nix everything after the last weight
    √  make sure the zones are 2-8 only
    √  Change any  "FedEx Envelope Bullshit Package" to "0" - as in "0 Pounds"
    √  Save as Tab Delimited files, which should look like this:

Zones	2	3	4	5	6	7	8
0	$17.26	$17.97	$18.74	$20.82	$25.58	$26.99	$27.53
1	$18.04	$18.79	$19.60	$21.77	$26.74	$28.22	$28.78
2	$18.35	$19.17	$19.98	$23.20	$29.59	$32.50	$34.18
...

These files should live in /database/seeds/data/{year}-rates/{carrier}/{service-name}.txt

Create a new seeder - see /database/seeds/ShippingRates2016UPSSeeder.php for an example

Cheers.
