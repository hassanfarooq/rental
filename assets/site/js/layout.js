window.addEvent('domready',function(){

	var startItem = 3; //or   0   or any
	var thumbs_mask7 = $('thumbs_mask7').setStyle('left',(startItem*60-568)+'px').set('opacity',0.8);
	var fxOptions7 = {property:'left',duration:1000, transition:Fx.Transitions.Back.easeOut, wait:false}
	var thumbsFx = new Fx.Tween(thumbs_mask7,fxOptions7);
	var nS7 = new noobSlide({
		box: $('box7'),
		items: [0,1,2,3,4,5,6,7],
		handles: $$('#thumbs_handles7 span'),
		fxOptions: fxOptions7,
		onWalk: function(currentItem){
			thumbsFx.start(currentItem*60-568);
		},
		startItem: startItem
	});
	//walk to first with fx
	nS7.walk(0);
});

$('#signup li.dropdown').hover(function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeIn(500);
}, function() {
  $(this).find('.dropdown-menu').stop(true, true).delay(200).fadeOut(500);
});

$(document).ready(function(){
	$('#select-province').change(function() {
		alert('hello');
		var prov_id = $(this).val();
		console.log(prov_id);
	});
});