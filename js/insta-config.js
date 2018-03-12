var feed = new Instafeed({
		get: 'user',
		userId: 2447702948,
		accessToken: '2447702948.909877a.e716a8de4ab1474f908ea61a474c70eb',
		target: 'instagram',
		resolution: 'standard_resolution',
		/*
		filter: function(image) {
			return image.tags.indexOf('magic') >=0
				|| image.tags.indexOf('disney') >= 0
				|| image.tags.indexOf('nobarriers') >= 0
				|| image.tags.indexOf('fionafairrie') >= 0
				|| image.tags.indexOf('tadathursday') >= 0
				|| image.tags.indexOf('techniquestartsearly') >= 0
				|| image.tags.indexOf('flamencodance') >= 0;
		},
		*/
		limit: '4',
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
