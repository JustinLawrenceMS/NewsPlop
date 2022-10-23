# NewsPlop
Takes news from Bing and plops it onto a Wordpress Blog


This is a working example of an ongoing project.  To use it, you need a Bing Search API key, which you can get from Azure.

Then navigate to your plugins folder and clone the repo.

Then you need to add the API key to database.  The option is called ``bing_api_key`` and it lives in the wp_options table.  

You will need composer and you will need to run ``composer install``

After that, go to your plugins page in your admin portal and activate the plugin.

Create a new post but *** important *** do not publish.  Type a shortcode called ``[plopper][/plopper]`` Until I get time to do a more permanent fix, preview this page to run the plug-in.  If you want to remove duplicate posts, use the following shortcode: ``[swabber][/swabber]``

Check your posts page on your admin portal for unpublished posts.  Your search results should be there.  Then just publish them.

### TODO Build interface in admin portal, drop shortcode hooks and use correct hooks.
