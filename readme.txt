=== SF Generate Tags ===
Contributors: Studiofreya
Donate link: http://studiofreya.com/sf-generate-tags
Tags: tags, generate, edit, posts, images, attached, text, admin, taxonomy, autotags
Requires at least: 3.8
Tested up to: 4.3.0
Stable tag: trunk
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Generate tags for posts from images or/and post text.

== Description ==
SF Generate Tags is a plugin that helps generate tags for posts. It scans the names of all attached images and/or the post content (text) and places the resulting tags in the built-in WordPress "Tags Widget" in the post editor.
The plugin analyzes collected words and picks out the most suitable for tags. 
All tags are then sorted in descending order and posted into the Tags widget. 
If you don't like a tag which has been discovered and want to delete them, you can just click the X button and save post without them.
The plugin doesn't mess with your existing tags. It preserves all your existing tags for the post. All the actions can be easily undone.

This plugin should work with any language. It's filtering algorithm is designed for English. All other languages will have all the words be added as tags.

[Plugin website](http://studiofreya.com/sf-generate-tags/)

= Features: =
* Easy to use from the admin panel for post edit 
* Choose to generate tags from attached images or post text or both
* Exclude words that you don't want to be tags
* Easy to remove all undesirable tags
* All actions can be undone
* Existing tags are preserved
* Add other tags later
* Regenerate tags after updating the post (or not)
* Limit number of generated tags

== Installation ==
1. Upload the plugin files to the /wp-content/plugins/ directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Use it while editing your posts in the Admin panel. The post needs to be saved to get the content evaluated.

== Frequently Asked Questions ==

[Plugin page](http://studiofreya.com/sf-generate-tags/)

Want more features? Tell us about it!

== Screenshots ==
1. Admin widget.

== ChangeLog ==

= 1.3 =
* Removed default tags limit
* Added more filter logic to English tags

= 1.2 =
* Limit number of tags.
* Better filter for English language.
* po/mo files. Plugin is now translation ready.

= 1.1 =
* Special filter for English language added. First step to multilanguage tags plugin.

= 1.0 =
* Initial release!

== Upgrade Notice ==

= 1.0 =
No upgrade available.

