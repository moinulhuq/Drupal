# Theme development using bootstrap from scratch

# Disable Drupal 8 caching during development

Steps

1) Copy and rename the sites/example.settings.local.php to sites/default/settings.local.php

$ cp sites/example.settings.local.php sites/default/settings.local.php

2) Open settings.php file in sites/default and uncomment these lines:

 if (file_exists(__DIR__ . '/settings.local.php')) {
   include __DIR__ . '/settings.local.php';
 }

 This will include the local settings file as part of Drupal's settings file.

3) Open settings.local.php and uncomment this line to enable the null cache service:

$settings['container_yamls'][] = DRUPAL_ROOT . '/sites/development.services.yml';

NOTE: Do not create development.services.yml. It exists under /sites

4) In settings.local.php change the following to be TRUE if you want to work with enabled css- and js-aggregation:

$config['system.performance']['css']['preprocess'] = FALSE;
$config['system.performance']['js']['preprocess'] = FALSE;

5) Uncomment these lines in settings.local.php to Disable the render cache and Disable Dynamic Page Cache

$settings['cache']['bins']['render'] = 'cache.backend.null';
$settings['cache']['bins']['dynamic_page_cache'] = 'cache.backend.null';

If you do not want to install test modules and themes, set following to FALSE

$settings['extension_discovery_scan_tests'] = TRUE;

6) Open development.services.yml in the sites folder and add the following block (to disable twig cache)

parameters:
  twig.config:
    debug: true
    auto_reload: true
    cache: false

7) Afterwards you have to rebuild the Drupal cache. Otherwise your website will encounter an unexpected error on page reload. This can be done by with drush:

drush cr

or by visiting the following URL from your Drupal 8 website:

http://yoursite/core/rebuild.php

8) Finished! Now you're able to develop in Drupal 8 without manual cache rebuilds on a regular basis.
