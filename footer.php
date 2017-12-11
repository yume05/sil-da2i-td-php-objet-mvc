<footer>
		Auteur Camille Lapprand
</footer>
    <script>
        // on attend que le document soit complètement construit
        $(document).ready(function() {
            // votre script
				var action;
				var answer;
				var attribute;
				$('#hideAside').on('click', function() {
					$('#navigation').slideToggle(500);
				});
				$('#fadeImg').on('click', function() {
				    $('img').fadeToggle().delay('10000');
				});
				$('#fadeImg').on('click', function() {
				    $('img').fadeToggle().delay('10000');
				});

				$('dt')
				.on('mouseenter', function() {
						answer = $(this).find('+dd');
						answer.show();

				})
				.on('mouseleave', function() {	
					if(!$(this).hasClass('persistent')){
						answer = $(this).find('+dd');
						answer.hide();
					}

				})
				.on('click', function() {
					$(this).toggleClass('persistent');
					//$('p').append(jQuery.hasData($(this)) + " " );
					if(($(this).data('nbr')) > 0){
						var nbr = $(this).data('nbr');
						nbr++;
						//alert(nbr);
						var nbr = $(this).data('nbr', nbr);
						nbr = parseInt(nbr);
						alert(nbr);
						$('#clic'+$(this).data('quest')).replaceWith(nbr);
					}else{
						$(this).data('nbr', 1);
						$('#clic'+$(this).data('quest')).replaceWith(1);
					}
					//$('p').append($(this).data('quest'));
					
				});
					
				
				/*$('dt').on('click', function(event) {
				    //event.preventDefault();
				    event.stopPropagation();
				   var answer = $(this).find('+dd');
				   //$('dt').preventDefault();
			        answer.hide();
				});*/
	        });
    </script>
</body>
</html>
