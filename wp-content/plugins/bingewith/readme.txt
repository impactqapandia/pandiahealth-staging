=== Plugin Name ===
Contributors: bingewith
Tags: audio blogs
Requires at least: 4.6
Tested up to: 5.6
Requires PHP: 5.2.4
Stable tag: 1.11
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

The BingeWith plugin takes the text of any blog post and turns it into audio. The audio is displayed as a player at the top of every post. 

== Description ==

The BingeWith plugin takes the text of any blog post and turns it into audio. The audio is displayed as a player at the top of every post. 

The plugin allows you to provide your readers with audio content in English. The plugin in its current state is free to use. Additional customization is available for a fee. Customization includes: changing the physical appearance of the player and the voice used. 

The plugin is enabled on all posts by default. To select only specific posts with BingeWith navigate to the posts page and use the bulk actions to enabled/disable on any specific post.

You can use shortcode [bingewith] to place the plugin in a specific part of the post.

== Screenshots ==

1. This screenshot shows how the blog post page looks before the audio has been generated. Pushing the button will prompt the generation of the audio. Please note that the audio generation only works on live blog posts. Clicking the audio generation button while hosting localy (i.e.: on localhost:XXXX/ will not work as the page must be accessible by BingeWith)
2. This screenshots shows how the audio player looks once the audio is generated.

== Changelog ==

= 1.11 =
Adding resources post type to the supported post types

= 1.10 =
Changing the default behaviour for one instance

= 1.9 =
When shortcode is present outside of post content, no additional player will be displayed. JS must be loaded to display shortcode iframe.

= 1.8 = 
When shortcode is present on a post, no additional player will be displayed.

= 1.7 = 
Changing JS insertion placement to accomodate for various WP themes for both post and shortcode insertions

= 1.6 =
Adding marker in iframe to indicate the wordpress plugin version

= 1.5 =
Support for playlist functionality within the audio player

= 1.4 =
Making the plugin show up if the JS does not load.

= 1.3 =
Showing audio player on posts only. Excludes product pages or other post types. 
Reduces size of widget to 70px height taking the full 100% width;

= 1.1 =
* Shortcode functionality is available.

1. Disable Bingewith on the post you want to add a shortcode to using the bulk actions on the posts admin page.
2. Use shortcode [bingewith] in any of the posts you want to add BingeWith in a particular part of the post to.
(if you don't disable BingeWith with the bulk actions the audio player will show up in two places once you add the shortcode)

= 1.0 =
* The first version of the BingeWith Wordpress Plugin

Functionality:

1. Generate audio for your blog posts
2. Play the generated audio on your blog posts
3. Pause the generated audio on your blog posts

Enable BingeWith for specific posts:
1. Activate the BingeWith plugin
2. Navigate to Posts tab
3. All posts have BingeWith enabled by default. Choose any posts you want to to disable BingeWith on.
