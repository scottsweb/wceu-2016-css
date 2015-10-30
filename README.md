![WordCamp Europe CSS 2016](http://cloud.scott.ee/images/wceu-2016-css.png)

# WordCamp Europe CSS 2016

* Status: ✔ Active
* Contributors: [@scottsweb](http://twitter.com/scottsweb)
* Description: Custom CSS for the WordCamp Europe 2016 theme.
* Author: [Scott Evans](http://scott.ee)
* Author URI: [http://scott.ee](http://scott.ee)
* License: GNU General Public License v2.0
* License URI: [http://www.gnu.org/licenses/gpl-2.0.html](http://www.gnu.org/licenses/gpl-2.0.html)

## About

This plugin generates the custom CSS for the WordCamp Europe 2016 theme.

To get started you will need to grab the latest WordCamp plugins and themes from SVN. Use:

```
svn co https://meta.svn.wordpress.org/sites/trunk/wordcamp.org/public_html/wp-content/
```

This will download the `wp-content` folder to your local machine. You can then move the plugins and themes to a local WordPress installation.

Next grab this plugin from GitHub and add it to your `wp-content/plugins/` directory. Activate your chosen theme (`wordcampe-baae-v2`) and this plugin via the WordPress admin.

Make sure you have `node` and `npm` [installed](https://nodejs.org/en/). Navigate to the plugin folder in your terminal app and type `npm install`. After a few minutes all the dependencies should be ready. You can then type `gulp` to start the build process and watch for changes.

CSS generated from this plugin (`folder/css/`) needs to be copy and pasted into the `Appearance -> Edit CSS` screen on the live site.

## Frequently Asked Questions

...