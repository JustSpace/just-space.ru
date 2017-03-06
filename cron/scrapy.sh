#!/etc/bin/

scrapy crawl getmail --set FEED_URI=base_21.csv --set FEED_FORMAT=csv -a base=in_21.csv
scrapy crawl getmail --set FEED_URI=base_20.csv --set FEED_FORMAT=csv -a base=in_20.csv
scrapy crawl getmail --set FEED_URI=base_19.csv --set FEED_FORMAT=csv -a base=in_19.csv
