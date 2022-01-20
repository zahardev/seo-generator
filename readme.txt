=== SEO Generator ===
Contributors: zahardoc
Tags: seo, generator, content
Requires at least: 4.7
Tested up to: 5.8
Stable tag: 1.1.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Plugin for adding some random SEO texts to your posts.

How to use:
1. Add some new SEO templates: SEO texts -> Add New, the more the better.
You can provide some ACF or post meta placeholders which will be replaced with real values.
2. Go to SEO Texts -> Settings, check "Generate SEO texts" checkbox, and click "Save Changes".
3. Check your posts - you'll see one of the texts from the templates you added on the 1st step.
   All the placeholders will be replaced with the current post values.

You can use both fields by Advanced Custom Fields plugin and native post meta fields inside the SEO text templates.
For example, if you have field `reading_time`, you can use {{reading_time}} in your template, and it will be replaced with the actual value.

To show the SEO generator content, you can use either shortcodes, or automatic mode.
In automatic mode, you can setup plugin to add SEO texts before post content ot after it.


== Frequently Asked Questions ==

= Why do I need SEO texts? =
Google likes pages with a lot of text content on them. But sometimes it's not possible to add a text content for each page manually -
for example, you have thousand of pages, and it's just pages with a picture, or with a video, or with a map.
So, if you add some random text there, it will improve SEO score for those pages.
If your posts have meta fields, you can use placeholders which will be replaced with their values - this way each page will have a relatively unique text.

== Screenshots ==

1. Create any number of SEO text templates - the more the better.
2. Example of the SEO text template.
3. Example of one of your posts.
4. Generating process.
5. Result - SEO text is added to you post, ACF field templates are replaced with their values.

== Changelog ==

= 1.1.0 =
* 2022-01-20
* UPDATE SUMMARY: Possibility to regenerate texts, get rid of ACF dependency
* [UPDATE] Possibility to regenerate texts
* [UPDATE] Code refactoring
* [UPDATE] Get rid of ACF dependency

= 1.0 =
* 2021-02-27
* Plugin release, all the main features are added in this version.
