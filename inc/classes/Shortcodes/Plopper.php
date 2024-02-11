<?php

namespace Plop\Plopinator\Shortcodes;

/**
 *  * This is the class responsible for the 'plopper' shortcode.
 *   */
class Plopper
{
	public function Plopper()
	{
		$myKey = get_option('bing_api_key');
		$headers = [
			'Ocp-Apim-Subscription-Key' => $myKey
		];


		/* Change this to change subject matter of search results.
               The $terms array is where your searchterms live. 
               Each term is searched one time and retrieves multiple results.  */

		$terms = [
			'nerd',
			'dork',
			'geek'
		];

		for ($i = 0; $i < count($terms); $i++) {
			$http = new \GuzzleHttp\Client(['headers' => $headers]);
			$response = $http->get('https://api.bing.microsoft.com/v7.0/news/search?q=' . $terms[$i] . '&originalImg=true');
			$news = json_decode($response->getBody(), true);

			for ($j = 0; $j < count($news['value']); $j++) {
				$title = $news['value'][$j]['name'];
				$url = $news['value'][$j]['url'];
				$image = $news['value'][$j]['image']['contentUrl'];
				$desc = $news['value'][$j]['description'];
				$postContent = '<a href="' . $url . '">' . '<img src="' . $image . '" /></a><p>' . $desc . '</p>' . '<a href="' . $url . '"> ...more.</a>';
				$postExcerpt = '<a href="' . $url . '">' . '<img src="' . $image . '" /></a><p>' . $desc . '</p>' . '<a href="' . $url . '"><br>Content originally retrieved from the news Web and found here.</a>';
				$post = [
					'post_content' => $postContent,
					'post_title' => $title,
					'post_excerpt' => $postExcerpt
				];

				wp_set_post_terms(get_the_ID(), [0], 'Industry News', false);
				wp_insert_post($post);
			}


			unset($http);
			unset($response);
			unset($news);
		}
	}

	public function init()
	{
		add_shortcode('plopper', array($this, 'Plopper'));
	}
}