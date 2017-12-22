$(document).ready(function(){
	var max_field = 15;
	var wrapper = $(".form-group row");
	var add_button = $(".btn-default");

	var x = 1;
	$(add_button).click(function(e){
		e.preventDefault();
		if(x < max_field){
			x++;
			$(wrapper).append('<div><input type="text" name="dev"></input><a href="#" class="remove_field">Remove</a></div>');
		}
	});

	$(wrapper).on("click",".remove_field", function(e){
		e.preventDefault(); $(this).parent('div').remove(); x--;
	});
});
