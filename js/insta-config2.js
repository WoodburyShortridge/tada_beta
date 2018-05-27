var feed = new Instafeed({
		get: 'user',
		userId: 2447702948,
		// accessToken: '2447702948.909877a.e716a8de4ab1474f908ea61a474c70eb',
    	accessToken:'2447702948.1677ed0.cd5413aaeef04f11ae7cfc408331679f',
    	target: 'instagram',
		resolution: 'standard_resolution',
	
		after: function() {
			var el = document.getElementById('instagram');
			if (el.classList)
				el.classList.add('show');
			else
				el.className += 'show'  ;
		$( ".show img" ).wrap( "<div class='insta-img'></div>" );
		$(".insta-img").append("<span class='glyphicon glyphicon-heart' aria-hidden='true'></span>");
		$(".insta-img > img").attr('alt', 'Instagram image');
		},
});
window.onload = function() {
	feed.run();
};
