# Usage

Install dependencies:

    composer install
    
## Local testing:

Start selenium server:

    java -Dwebdriver.chrome.driver=/home/me/progs/chromedriver -jar ~/progs/selenium-server-standalone-3.5.3.jar

Run the feature test with Behat:

    bin/behat

## Testing with Crossbrowsertesting.com

- Comment out the *wd_host* line with the localhost value.
- Uncomment the *wd_host* line with the Crossbrowsertesting hub and replace the *user* and *key* with the *Username* and
*Auth Key* you get from https://app.crossbrowsertesting.com/selenium/run .
You must urlencode your username: the "@" is encoded: "%40".
