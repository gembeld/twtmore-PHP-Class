twtmore Class
=============

The twtmore PHP Class is an easier way to use the [twtmore](http://twtmore.com/) API. It organises the API into functions, making tweeting and getting content simple.
To use it, you must first declare the class:
	include 'twtmore.php';
	$twtmore = new Twtmore();
Then, tell the class what your API key is:
	$twtmore->apiKey = 'Some API Key';

Sending a Tweet
---------------
To send a tweet, use the following function:
	echo $twtmore->tweet("username", "This is a test of the twtmore PHP Class. It aims to make the twtmore API easier to use in PHP, as well as making your code cleaner. This tweet is now way over 140 characters.");
You can disable Staging by adding `false` to the end of the function - `tweet("username", "tweet", false);`.

Getting a Tweet
---------------
You can get a tweet's content with this function:
	echo $twtmore->get("id");
"id" should be the twtmore tweet id.