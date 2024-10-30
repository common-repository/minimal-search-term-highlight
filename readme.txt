=== Minimal Search Term Highlight ===
Contributors: mjke87
Donate link: https://paypal.me/mjjarrett
Tags: highlight, search, search-results, minimalist
Requires at least: 4.4.0
Tested up to: 5.0.1
Stable tag: 1.0.1
Requires PHP: 5.6
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Ultra-minimalist plugin to highlight search results.

== Description ==
This minimal and lightweight plugin will highlight search terms on your search result page. Furthermore, when you navigate to a content page via the search result, the search terms will be highlighted on the content page as well. This works by using specialized URLs on the search result page.

* Highlight search terms on the search result and content pages
* No configuration needed
* No JavaScript
* No StyleSheet
* Only standard WordPress hooks used
* Only 30 lines of code

= Highlighting =
The highlighting works by wrapping each search term with `<mark>` tag. The plugin does not provide any styling. Browser's typically display mark tags with a bright yellow background. It is recommended to define your own styling for mark elements in your theme CSS.

= Installation =
Simply install and activate the plugin. No configuration is needed.

= Troubleshooting =
In most cases, the plugin works out-of-the-box, should you experience any problems it is most likely due to an incompatibility with your theme or another plugin on your site. Please open a topic in the support section and we'll figure it out together.

== Changelog ==

= 1.0.1 (2018-12-14) =

* Remove word boundries in regex to allow highlighting word fragments as well

= 1.0.0 (2018-08-09) =

* First stable release