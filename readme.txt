=== Browser Body Classes with Shortcodes ===

Name: Browser Body Classes with Shortcodes

Contributors: thomstark

Author: Thom Stark

Version: 1.6

Requires at least: 3.3

Tested up to: 3.9

Stable tag: 1.6

License: GPLv3

Tags: Browser, Class, Classes, Body Classes, Browser Body Classes, Shortcode, Shortcodes, desktop, handheld, tablet, modile, ios, firefox, chrome, safari, opera, maxthon, msie, ie5, ie6, ie7, ie8, ie9, ie10, ie11, ns4, lynx, samsunggalaxytablet, kindlefire, kindlesilk, ipad, iphone, ipod, android, blackberry, skyfire, operamobile, operamini, samsung, winmobile, iemobile, nokia, motorola, palm, symbian, lg, blazer, bolt, unknown



Adds browser-specific body classes for styling, and shortcodes to show or hide content to/from specified browsers and devices.





== Description ==



Adds browser-specific body classes for styling, and shortcodes to show or hide content to/from specified browsers and devices.


* **As of v1.6, compatible with WordPress 3.9.** 

* **As of v1.5, includes new body classes, including catch-alls like: desktop, handheld, mobile, and tablet.** 

* **As of v1.4, includes Shortcode Generator Modal Window, and 16 new Browser Body Classes, for a total of 33.**

* **As of v1.3, includes Shortcode Generator Meta Box, and an Options page, with the option to restrict access to the Meta Box according to user capability, or disable it altogether.**



*Browser Body Classes with Shortcodes* provides more than 40 browser-specific body classes to make styling your site for different platforms and devices a cinch. The plugin also comes with two powerful, yet simple, shortcodes to specify which browsers/devices to show content to, and which to hide it from. Still don't feel like typing all those browser names? No worries! *Browser Body Classes with Shortcodes* comes with two different shortcode generators, with options to control who gets to use them. 



The two shortcodes each have just one required attribute: [showto browser=""][/showto] and [hidefrom browser=""][/hidefrom]



* Example: [showto browser="firefox ie10"] Your Content [/showto] 

This will show the content only to Firefox and IE10.



* Example: [hidefrom browser="opera safari chrome"] Your Content [/hidefrom]

This will hide the content only from Opera, Chrome, and Safari.



* Example: [hidefrom browser="unknown"] Your Content [/hidefrom]

This will hide the content from any browser not in the list of browser options below. 



**Note:** You can use other shortcodes inside these shortcodes. You can also put a [hidefrom] shortcode inside a [showto] shortcode, but not the other way around.



* Example: [showto browser="firefox chrome"]Chrome and Firefox will see this. [hidefrom browser="firefox"]Firefox won't see this but Chrome will.[/hidefrom][/showto]



Browser options must be all lowercase and must contain a space or a comma between them if multiple are used. Acceptable Browser options are:



* desktop

* handheld

* tablet

* mobile

* ios

* firefox

* chrome

* safari

* opera

* maxthon

* msie

* ie5

* ie6

* ie7

* ie8

* ie9

* ie10

* ie11

* ns4

* lynx

* samsunggalaxytablet

* kindlefire

* kindlesilk

* ipad

* iphone

* ipod

* android

* blackberry

* skyfire

* operamobile

* operamini

* samsung

* winmobile

* iemobile

* nokia

* motorola

* palm

* symbian

* lg

* blazer

* bolt

* unknown







== Installation ==



1. Upload 'browser-body-classes-with-shortcodes/' to the '/wp-content/plugins/' directory.

2. Activate the plugin through the 'Plugins' menu in WordPress.

3. Configure your Options at Settings > Browser Body Classes Options

4. Use the provided shortcodes on your pages and posts, or use the provided body classes to style your own browser-specific and device-specific content.



== Requirements ==



* PHP 5.2+

* WordPress 3.3+





== Screenshots ==



1. A shiny button.

2. To insert the shortcode, you have to click stuff. Sorry, no direct Brain-to-WordPress feature yet, but it's in the plans.

3. See what happens when you click stuff? Wait... what's that shiny box down below?

4. Oh, it's the meta box, with another shortcode generator. You know... options. People like options.

5. Yes, you have to click stuff here too.

6. And more stuff. Then you have to copy and paste it. What a rip-off.

7. Look. More options.





== Changelog ==


= 1.6 = 

* Compat with WordPress 3.9.



= 1.5 = 

Some important additions in this release:



* Added 9 new device-specific body-classes, including catch-alls like: desktop, handheld, tablet, mobile, ios.

* Added option to choose onto which row of the TinyMCE panel your shortcode button will go. 

* Fixed a few minor bugs. 



= 1.4 = 

Major Additions in this release: 



* Added 16 new browser and device-specific body classes, bringing the total to 33. 

* Added another option for automated shortcode generation: a button on your Visual Editor toolbar opens up the generator in a modal window. You still have the Meta Box. Either or both can be disabled, or access-controlled based on user capabilities. 

* The "Configure Options" button in the Meta Box now only shows up for Administrators. 

* Completely revamped the PHP that powers the shortcodes, now optimized to reduce server load. 

* Fixed some problems with a few of the existing body classes, specifically Opera, Android, and iPhone. All better. 

* Tweaked some styles.

* Added support and review links to the Options page. 



= 1.3 =

Major Additions: 



* Now includes Shortcode Generator Meta Box located beneath the page editor, and an Options page, with the option to restrict access to the Meta Box according to user capability, or disable it altogether.



= 1.2 =

* Cleaned up code for IE version checker. No functional change from 1.1



= 1.1 =

* This version no longer uses CSS to show or hide content. Everything is done with PHP. 

* Fixed problem with IE.



= 1.0 =

* Initial release





== Upgrade Notice ==

= 1.5 =

Adds several new body classes and some additional options for configuring your shortcode generators. 



= 1.2 =

Fixes problem with IE and cleans up code. Important update.