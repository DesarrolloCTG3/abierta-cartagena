/* Aura version: 1.8.5 */

jQuery(function($){

	var tweetsBock = $('.pi-footer-tweets'),
		twitterAcc = typeof(twitterAccount) !== "undefined" ? twitterAccount : '@PIthemess';

	tweetsBock.twittie({
		apiPath : '/3dParty/tweetie/api/tweet.php',
		username: twitterAcc,
		dateFormat: '%b. %d, %Y',
		template: '<span class="pi-bullet-icon"><i class="icon-twitter"></i></span>{{screen_name}} {{tweet}} <br /><span class="pi-smaller-text pi-italic pi-text-opacity-50">{{date}}</span>',
		count: 2
	}, function(){
		tweetsBock.find('ul').addClass('pi-bullets-circle pi-bullets-base pi-bullets pi-list-big-margins');
	});

});