$(document).ready(function(){

	setInterval(function(){

    var unread = $.get("http://"+ document.domain +"/clinica/messages/getunread");
		

 /*     	$.ajax({
      	url : 'clinica/MessagesController/getunread',
      	type: 'POST',
      	success : function(response){
        $('#unread').html(response);
      }
  });
      $('#unread').val(unread);
		//alert(unread);


	},3000);

	$('#fisica_number').change(function(){

			var suma = parseInt($('#quimica_number').val()) + parseInt($('#fisica_number').val())+ parseInt($('#biologia_number').val());

		if(suma!=21 ){
		  $('#end').hide();
		  $('#end1').show();
		}
		else {
			$('#end1').hide();
			$('#end').show();
			}
		$('#total').val(suma);
	});

	/** Cambia el valor de química**/
	$('#quimica_number').change(function(){

			var suma1 = parseInt($('#quimica_number').val()) + parseInt($('#fisica_number').val()) + parseInt($('#biologia_number').val());

			
		if(suma1!=21 ){
		  $('#end').hide();
		  $('#end1').show();

		}
		else {
			$('#end1').hide();
			$('#end').show();
			}
		$('#total').val(suma1);

	});

	/** Cambia el valor de biología**/
	$('#biologia_number').change(function(){

			var suma2 = parseInt($('#quimica_number').val()) + parseInt($('#fisica_number').val())+ parseInt($('#biologia_number').val());

		if(suma2!=21 ){
		  $('#end').hide();
		  $('#end1').show();

		}
		else {
			$('#end1').hide();
			$('#end').show();
			}
		$('#total').val(suma2);
	});
	
	/** Al presionar next borra oculta los campos de informacion del usuario, y muestra los datos de la prueba**/
		
	$('#nextButton').click(function(){

			if($('#name1').val()!='' && $('#lastname1').val()!='' && $('#last_surname1').val()!=''&& $('#institution1').val()!=''&& $('#email1').val()!=''&& $('#group1').val()!=''){
				$('#name').hide();
				$('#lastname').hide();
				$('#last_surname').hide();
				$('#institution').hide();
				$('#group').hide();
				$('#email').hide();
				$('#fisica').show();
				$('#fisica2').show();
				$('#quimica').show();
				$('#quimica2').show();
				$('#biologia').show();
				$('#biologia2').show();
				$('#total1').show();
				$('#end1').hide();
				$('#end').show();
				$('#next').hide();
				$('#next1').show();
				document.getElementById('message').innerHTML = '';
			}
			else{
				//$('#message').val('Por favor llene todos los campos');
				document.getElementById('message').innerHTML = 'Por favor llene todos los campos';
				}
		});

});
