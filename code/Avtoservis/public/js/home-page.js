$(document).ready(function() {

	// plugin options for each word
	var options = [
		{ 	// word 1
			size : 300,
			weight : 8,
			color: '#fff',
			duration: 0.5,
			fade: 0,
			delay: 0.2,
			easing: d3_ease.easePolyOut.ease
		},
		{ 	// word 2
			size : 210,
			weight : 8,
			color: '#f5f5f5',
			duration: 0.7,
			fade: 0.7,
			delay: 0.05,
			easing: d3_ease.easeSinInOut.ease
		},
		{ 	// word 3
			size : 330,
			weight : 12,
			color: '#151517',
			duration: 0.4,
			fade: 0,
			delay: 0.2,
			easing: d3_ease.easePolyOut.ease
		}
	]

	function init() {
        var word = document.querySelector('.list__text')
        // initialize the plugin
        instance = new Letters(word, options[0])

        // show word
        instance.showInstantly();

        instance.hideInstantly();
        instance.show();
	}

	init();
});
