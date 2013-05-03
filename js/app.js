var Ranks = {
	data: [],
	current: 0,
	register: function (name, min, max, id) {
		this.data.push({
			name: name,
			min: min,
			max: max,
			id: id
		});
	},
	rankAtPosition: function (x) {
		var i;
		
		for (i = 0; i < this.data.length; ++i) {
			if (this.data[i].min <= x && x <= this.data[i].max) {
				this.current = i;
				return this.data[i];
			}
		}
		
		return '';
	},
	getData: function () {
		return this.data;
	},
	getCurrent: function () {
		return this.current;
	},
	setCurrent: function (i) {
		this.current = i;
	},
	toggleButtons: function () {
		if (this.current === 0) {
			$('.btn-left').hide();
		} else {
			$('.btn-left').css({display: 'inline-block'});
		}
		
		if (this.current === this.data.length - 1) {
			$('.btn-right').hide();
		} else {
			$('.btn-right').css({display: 'inline-block'});
		}
	}
};

$(window).load(function () {
	// map data
	var lastPosition = 0;
	$('.rank-place').each(function () {
		Ranks.register($(this).text(), lastPosition, $(this).position().top, this.id);
		lastPosition = $(this).position().top + 1;
	});
	
	console.log(Ranks.getData());
	
	$(window).scroll(function () {
		updateRankDisplay();
	});
	
	updateRankDisplay();
});

$(document).ready(function () {
	$('.btn-left').click(function (e) {
		e.preventDefault();
		
		var node = $('#' + Ranks.getData()[Ranks.getCurrent()-1].id);
		
		$('html, body').stop(true).animate({scrollTop: node.position().top - 50});
	});
	
	$('.btn-right').click(function (e) {
		e.preventDefault();
		
		var node = $('#' + Ranks.getData()[Ranks.getCurrent()+1].id);
		
		$('html, body').stop(true).animate({scrollTop: node.position().top - 50});
	});
});

function updateRankDisplay() {
	var r = Ranks.rankAtPosition($(window).scrollTop());
	$('.data-out').text(r.name);
	Ranks.toggleButtons();
}