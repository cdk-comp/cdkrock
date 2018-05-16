#!/bin/bash

echo "==============="
echo "wp updating"
echo "==============="
rsync -a wp-tmp/ wp/
rm -rf wp-tmp/

echo "==============="
echo "rocket licence added"
echo "==============="
sed -i -e s/WP_ROCKET_KEY\',\ \'\'/WP_ROCKET_KEY\',\ \'a9cabfc9\'/g  wp/wp-content/plugins/wp-rocket/licence-data.php
sed -i -e s/WP_ROCKET_EMAIL\',\ \'\'/WP_ROCKET_EMAIL\',\ \'bzx@mail.ru\'/g  wp/wp-content/plugins/wp-rocket/licence-data.php

echo "==============="
echo "Akismet and HelloDolly removing"
echo "==============="
rm -rf wp/wp-content/plugins/akismet && rm wp/wp-content/plugins/hello.php

echo "==============="
echo "Ready for development"
echo "==============="
