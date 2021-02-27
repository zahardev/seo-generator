=== SEO Generator ===
Contributors: zahardoc
Tags: seo, generator, content
Requires at least: 4.7
Tested up to: 5.6
Stable tag: 1.0
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

== Description ==

Plugin for adding some random SEO texts to your posts.

Requires Advanced Custom Fields plugin to be installed.
You can add the fields from Advanced Custom Fields plugin inside the SEO templates.
For example, if you have field `reading_time`, you can use {{reading_time}} in your template, and it will be replaced with the actual value.

How to use:
1. Add some new SEO templates: SEO texts -> Add New, the more the better.
2. Go to SEO Texts -> Settings, check "Regenerate SEO texts" checkbox, and click "Save Changes".
3. Check your posts - you'll see one of the texts from the templates you added on the 1st step.
   If you used ACF fields templates, they should be replaced with the current value.

You can add generated text before content, after it, or anywhere with shortcode `[seo_generator_text]`.


== Frequently Asked Questions ==

= Why do I need SEO texts? =
Google likes pages with a lot of text content on them. But sometimes it's not possible to add a text content for each page manually -
for example, you have thousand of pages, and it's just pages with a picture, or with a video, or with a map.
So, if you add some random text there, it will improve SEO score for those pages.
Ideally, if those pages have some meta fields. Then they will be replaced with their values, and each page will have quite a unique text.

== Screenshots ==

1. Create any number of SEO text templates. The more the better.
2. Example of the SEO text template.
3. Example of one of your posts.
4. Generating process.
5. Result - SEO text is added to you post, ACF field templates are replaced with their values.

== Changelog ==

= 1.0 =
* Plugin release, all the main features are added in this version.
