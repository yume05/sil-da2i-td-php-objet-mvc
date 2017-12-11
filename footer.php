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
					$(this).data('quest', {
						    nbr: +1,
						});
					$('p').append($(this).data('quest'));
					$('p').append($(this).data('nbr'));
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
