# SEO Generator

Plugin for adding some random SEO texts to your posts.

Requires Advanced Custom Fields plugin to be installed.
You can add the fields from Advanced Custom Fields plugin inside the SEO templates. 
For example, if you have field `reading_time`, you can use {{reading_time}} in your template, and it will be replaced with the actual value.

How to use:
1. Add some new SEO templates: SEO texts -> Add New, the more the better.
2. Go to SEO Texts -> Settings, check "Regenerate SEO texts" checkbox, and click "Save Changes".
3. Check your posts - you'll see one of texts from the templates you added on the 1st step.
   If you used ACF fields templates, they should be replaced with the current value.

You can add generated text before content, after it, or anywhere with shortcode `[seo_generator_text]`.
