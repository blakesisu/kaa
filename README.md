# WordPress / Trellis / Bedrock Starter

This is a starter repo for building a bespoke WordPress site using modern dev tools.

## Philosophy

TO DO. Talk about general workflow and how things are synced and managed.

- WordPress plugins are managed using Composer

## Stack

### Server

- [Trellis](https://roots.io/trellis/) - Uses Ansible to configure consistent dev/stage/production environments
  - Ubuntu 16.04 Xenial LTS
  - Nginx (with optional FastCGI micro-caching)
  - PHP 7.1
  - MariaDB (a drop-in MySQL replacement)
  - SSL support (scores an A+ on the [Qualys SSL Labs Test](https://www.ssllabs.com/ssltest/))
  - Let's Encrypt integration for free SSL certificates
  - HTTP/2 support (requires SSL)
  - Composer
  - WP-CLI
  - sSMTP (mail delivery)
  - MailHog
  - Memcached
  - Fail2ban
  - ferm

## CMS

- [Wordpress](https://wordpress.org/) - The web's most popular CMS
- [Bedrock](https://roots.io/bedrock/) - Improved WordPress boilerplate
  - Using Composer to manage all dependencies, including WordPress
  - Easier environment-specific configuration
  - Separate WP core files from our site files
- [WP Sync DB](https://github.com/wp-sync-db/wp-sync-db) - Push, pull, and sync database tables between WordPress installations
- [WP Sync DB Media Files](https://github.com/wp-sync-db/wp-sync-db-media-files) - Sync media libraries between WordPress installations
- [Advanced Custom Fields](https://www.advancedcustomfields.com/)

## Theme Development

- [Gulp](http://gulpjs.com/) - Efficient, configurable, streaming task runner
- [BrowserSync](https://www.browsersync.io/) - Live reload changes
- [Webpack 2.6](https://webpack.github.io) - Automatic common module chunk bundling and tree shaking
- [Babel](https://babeljs.io/) - Use the latest ECMAScript features
- [Sass](http://sass-lang.com/) - Easier CSS dev with variables, nesting, partials, import, mixins, inheritance, and operators
- [PostCSS](http://postcss.org/) - Autoprefix CSS
- [ESLint](http://eslint.org/) - Catch syntax and style issues

## Client

- [jQuery](https://jquery.com/) - Get off my lawn!
- [Lodash](https://lodash.com/) - Little utilities like throttle/debounce
- [Postal](https://github.com/postaljs/postal.js) - pub/sub library to allow decoupled communication between components
- [Modernizr](https://modernizr.com) - Browser feature detection (touch-events)

## Project Structure

- **site** - Bedrock-based WordPress site
  - **config** - WordPress configuration files
    - **environments** - Environment specific configs
    - `application.php` - Primary WP config file (wp-config.php equivalent)
  - **vendor** - Composer packages (never edit)
  - **web** - Web root (vhost document root)
    - **app** - wp-content equivalent
      - **mu-plugins** - Must use plugins
      - **plugins** - General Plugins
      - **themes** - Themes
      - **uploads** - Uploads
    - **wp** - WordPress core (never edit)
    - `index.php` - WordPress view bootstrapper
    - `wp-config.php` - Required by WP (never edit)
  - .env - Automatically configured by Trellis
  - `composer.json` - Manage versions of WordPress, plugins & dependencies
- **trellis** - Trellis Ansible files
  - **deploy-hooks**
    - `build-before.yml` - Custom commands to run before deploying
  - **group_vars** - Environment variables for Ansible
    - **all**
    - **development**
    - **production**
    - **staging**
  - **hosts** - Server host names for each environment
  - **lib**
  - **roles**
  - `dotfiles` - Various configs

## Docs

### Setting up a new project

1. [Configure everything for local development](docs/get_started.md)
1. [Create custom site/theme](docs/development_workflow.md)
1. [Setup a remote server for staging/production](docs/remote_server_setup.md)
1. [Deploy changes to staging/production](docs/deployment_workflow.md)
1. [Keep everything in sync between Dev, Staging, and Production](docs/syncing_dev_staging_production.md)

### Joining an existing project

1. [Configure everything for local development](docs/get_started.md)
1. [Add your SSH key](#) - To do
1. [Edit site/theme](docs/development_workflow.md)
1. [Deploy changes to staging/production](docs/deployment_workflow.md)
1. [Keep everything in sync between Dev, Staging, and Production](docs/syncing_dev_staging_production.md)











