# Usage

Add a repository for each WPML plugin you want to use (under repositories in composer.json)

```
        {
            "type": "package",
            "package": {
                "name": "wpml/wpml-multilingual-cms",
                "version": "3.9.3",
                "type": "wordpress-plugin",
                "dist": {
                  "type": "zip",
                  "url": "https://httpbin.org/status/400?"
                },
                "require": {
                  "enelogic/wpml-installer": "^0.1",
                  "composer/installers": "^1.0"
                }
            }
        }
```        
        
(traling slash matters on that httpbin url)

And then require:

```
wpml/wpml-multilingual-cms
```

or in composer.json, add this to require

```
"wpml/wpml-multilingual-cms": "*",

```

Then set up environment vars for:

WPML_KEY

WPML_USER_ID

You can find these by logging into WPML website and copy/pasting a download link for any of the plugins.

WPML_KEY = subscription_id parameter on the url

WPML_USER_ID = user_id parameter on the url

You should be all set - rinse and repeat for other WPML plugins - a fuller config is below for easier copy/paste.


# More packages for easy copy/paste - edit the versions to whatever is current.

```
        {
            "type": "package",
            "package": {
                "name": "wpml/wpml-multilingual-cms",
                "version": "3.9.3",
                "type": "wordpress-plugin",
                "dist": {
                  "type": "zip",
                  "url": "https://httpbin.org/status/400?"
                },
                "require": {
                  "enelogic/wpml-installer": "^0.1",
                  "composer/installers": "^1.0"
                }
            }
        },

        {
            "type": "package",
            "package": {
                "name": "wpml/wpml-string-translation",
                "version": "2.7.3",
                "type": "wordpress-plugin",
                "dist": {
                  "type": "zip",
                  "url": "https://httpbin.org/status/400?"
                },
                "require": {
                  "enelogic/wpml-installer": "^0.1",
                  "composer/installers": "^1.0"
                }
            }
        },

        {
            "type": "package",
            "package": {
                "name": "wpml/wpml-translation-management",
                "version": "2.5.2",
                "type": "wordpress-plugin",
                "dist": {
                  "type": "zip",
                  "url": "https://httpbin.org/status/400?"
                },
                "require": {
                  "enelogic/wpml-installer": "^0.1",
                  "composer/installers": "^1.0"
                }
            }
        },

        {
            "type": "package",
            "package": {
                "name": "wpml/wpml-sticky-links",
                "version": "1.4.3",
                "type": "wordpress-plugin",
                "dist": {
                  "type": "zip",
                  "url": "https://httpbin.org/status/400?"
                },
                "require": {
                  "enelogic/wpml-installer": "^0.1",
                  "composer/installers": "^1.0"
                }
            }
        },

        {
            "type": "package",
            "package": {
                "name": "wpml/wpml-cms-nav",
                "version": "1.4.22",
                "type": "wordpress-plugin",
                "dist": {
                  "type": "zip",
                  "url": "https://httpbin.org/status/400?"
                },
                "require": {
                  "enelogic/wpml-installer": "^0.1",
                  "composer/installers": "^1.0"
                }
            }
        },

        {
            "type": "package",
            "package": {
                "name": "wpml/wpml-media",
                "version": "2.2.3",
                "type": "wordpress-plugin",
                "dist": {
                  "type": "zip",
                  "url": "https://httpbin.org/status/400?"
                },
                "require": {
                  "enelogic/wpml-installer": "^0.1",
                  "composer/installers": "^1.0"
                }
            }
        }
```
        
and requires:

```
"wpml/wpml-multilingual-cms": "*",
"wpml/wpml-string-translation": "*",
"wpml/wpml-translation-management": "*",
"wpml/wpml-sticky-links": "*",
"wpml/wpml-cms-nav": "*",
"wpml/wpml-media": "*",
```
