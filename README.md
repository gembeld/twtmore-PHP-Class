twtmore Class
=============

The twtmore PHP Class is an easier way to use the [twtmore](http://twtmore.com/) API. It organises the API into functions, making tweeting and getting content simple.
To use it, you must first declare the class:
	`include 'twtmore.php';
	$twtmore = new Twtmore();`
Then, tell the class what your API key is:
	`$twtmore->apiKey = 'Some API Key';`
Finally, you can execute the functions, either make a new tweet:
	`echo $twtmore->tweet("username", "This is a test of the twtmore PHP Class. It aims to make the twtmore API easier to use in PHP, as well as making your code cleaner. This tweet is now way over 140 characters.");`
Or get a tweet's content:
	`echo $twtmore->get("id");`