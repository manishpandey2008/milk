$(document).ready(function(){
			
			$('#find_pattern').on('click',function(){
				var val=$(this).val();
				if(val=='day'){
					$('#find_year_div').hide();
					$('#find_month_div').hide();
					$('#find_date_div').show();
				}
				else if(val=='month'){
					$('#find_date_div').hide();
					$('#find_year_div').show();
					$('#find_month_div').show();
					
				}
				else if(val=='year'){
					$('#find_year_div').show();
					$('#find_month_div').hide();
					$('#find_date_div').hide();
				}
			})

		$("$edit").on('click',function(){
			var name=$("#name").val();
			var f_name=$("#f_name").val();
			var add=$("#add").val();
			var pin=$("#pin").val();
			var payee_name=$("#payee_name").val();
			var bank_name=$("#bank_name").val();
			var ac_no=$("#ac_no").val();
			var ifsc_no=$("#ifsc_no").val();
			
			$('#name').val(name);
			$('#f_name').val(f_name);
			$('#add').val(add);
			$('#pin').val(pin);
			$('#payee_name').val(payee_name);
			$('#bank_name').val(bank_name);
			$('#ac_no').val(ac_no);
			$('#ifsc_no').val(ifsc_no);
			


		})

		});