$(document).ready(function(){
	$('#vill_name').on('click',function(){
		var vill_name=$(this).val();
		if(vill_name!='0')
		{
			$('#new_vill').hide();
		}
		else{
			$('#new_vill').show();
		}
	});

    


	 $('#member_list').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
        	url:"{{ route('getallmembers') }}",
        },
        columns: [
            { data: 'id', name: 'id' },
            { data: 'user_id', name: 'name' },
            { data: 'name', name: 'created_at' },
            { data: 'father_name', name: 'father_name' },
            { data: 'photo', name: 'photo' },
            { data: 'phone_number', name: 'phone_number' },
            { data: 'village', name: 'village' },
            { data: 'payee_name', name: 'payee_name' },
            { data: 'bank_name', name: 'bank_name' },
            { data: 'acount_number', name: 'acount_number' },
            { data: 'ifsc_code', name: 'ifsc_code' },
            { data: 'details', name: 'details' },
          

        ]
    });

     


});


