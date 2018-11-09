// Mining Weekly RSS Feed

function loadrssfeed_miningweekly(limit) {
	$.ajax({
		type: 'POST',
		url: 'assets/scripts/RSSParser/json.php',
		data: {
			url: 'https://zapier.com/engine/rss/3979555/onchange/'
		},
		dataType: 'json',
		cache: false,
		processData: true,
		success: function (msg) {
			console.log(msg);
			if (msg == "failure") {
				$('#load-spinner-miningweekly').attr("class", "alert alert-danger");
				$('#load-spinner-miningweekly').html('<i class="fa fa-ban" aria-hidden="true"></i> Unable to fetch RSS feed.');
				$('#load-rss-miningweekly').html('');
			} else {
				$('#load-spinner-miningweekly').attr("class", "alert alert-success");
				$('#load-spinner-miningweekly').html('<div>"' + msg.channel.title + '</div>"');
				var load = "";
				for (var i = 0; i < limit; i++) {
					if (msg.channel.item[i] != "undefined") {
						load = load +
                					'<div>' + msg.channel.item[i].description + '</div>';
					}
				}
				$('#load-rss-miningweekly').html(load);
			}
		}
	});
}

$(function () {
	loadrssfeed_miningweekly(3); // Show (latest) 3 items
	setInterval(loadrssfeed_miningweekly, 300000, 3); // Update every 5 minutes, 3 items max
});
