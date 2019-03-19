<script>

	// open Deparment new page on button click 
	$('#newDepartmentOpenButton').click(function(){
		$('#addDepartment').modal('show');
		//window.open("{{ route('adminDepartment_new') }}", '_self');
	});
	// view Department Model 
	$(document).on('click','.view-DepartmentModel',function()
	{

		var id = $(this).attr("data-id") ;
		$.ajax(
		{
			type:'get',
			url:'../admin/Department_View/',
			data:{id:id},
			dataType:'json',
			success:function(viewResponse)
			{
				var name = viewResponse.name;
				var hours = viewResponse.hours;

				$('#viewDepartment').modal('show');

				$("#viewName").text(name);
				$("#viewHours").text(hours);
			},
			error:function()
			{
				alert('An Error has Occured, Please try again later');
			}
		});
	});

	// data view for edit Department in Model
	$(document).on('click','.edit-DepartmentModel',function()
	{

		var id = $(this).attr("data-id");		
		$.ajax(
		{
			type:'get',
			url:'../admin/Department_View/',
			data:{id:id},
			dataType:'json',
			success:function(viewResponse)
			{
				var name = viewResponse.name;
				var hours = viewResponse.hours;

				$('#editDepartment').modal('show');

				$("#editID").val(id);
				$("#editName").val(name);
				$("#editHours").val(hours);
			},
			error:function()
			{
				alert('An Error has Occured, Please try again later');
			}
		});
	});

	// Edit Department Button
	$('#editDepartmentButton').click(function(){
		var id = $('#editID').val();
		var name = $('#editName').val();
		var hours = $('#editHours').val();
			$.ajax(
			{
				type:'get',
				url:'../admin/Department_Edit/',
				data:{id: id, name: name, hours: hours},
				dataType:'json',
				success: function(response)
				{
					if(response.reply == 'Sucess')
					{
						location.reload();
					}
					else
					{
						alert('Error has been occured');
					}
				},
				error: function()
				{
					alert('All fields are mandatory');
				}
			});
	});

	// confirmation Model for delete Department 
	$(document).on('click','.delete-DepartmentModel',function()
	{
		var id = $(this).attr("data-id") ;

		$('#deleteDepartment').modal('show');

		$("#deleteID").val(id);
	});

	//deleteSupplierButton
	$('#deleteDepartmentButton').click(function(){
		var id = $('#deleteID').val();
		$.ajax(
		{
			type:'get',
			url:'../admin/Department_Delete/',
			data:{id:id},
			dataType:'json',
			success:function(deleteResponse)
			{
				location.reload();
			},
			error:function()
			{
				alert('An Error has Occured, Please try again later');
			}
		});
	});

	//********** Admin Designation *****************
	
	$('#addDesignationOpenButton').click(function(){
		$('#addDesignation').modal('show');
		//window.open("{{ route('adminDepartment_new') }}", '_self');
	});

	$(document).on('click','.view-DesignationModel',function()
	{
		var id = $(this).attr("data-id") ;
		$.ajax(
		{
			type:'get',
			url:'../admin/Designation_View/',
			data:{id:id},
			dataType:'json',
			success:function(viewResponse)
			{
				var name = viewResponse.name;
		
				$('#viewDesignation').modal('show');
				$("#viewName").text(name);
			},
			error:function()
			{
				alert('An Error has Occured, Please try again later');
			}
		});
	});

	// data view for edit Department in Model
	$(document).on('click','.edit-DesignationModel',function()
	{
		var id = $(this).attr("data-id");		
		$.ajax(
		{
			type:'get',
			url:'../admin/Designation_View/',
			data:{id:id},
			dataType:'json',
			success:function(viewResponse)
			{
				var name = viewResponse.name;

				$('#editDepartment').modal('show');

				$("#editID").val(id);
				$("#editName").val(name);
			},
			error:function()
			{
				alert('An Error has Occured, Please try again later');
			}
		});
	});

	// Edit Designation Button
	$('#editDesignationButton').click(function(){
		var id = $('#editID').val();
		var name = $('#editName').val();
		$.ajax(
		{
			type:'get',
			url:'../admin/Designation_Edit/',
			data:{id: id, name: name},
			dataType:'json',
			success: function(response)
			{
				if(response.reply == 'Sucess')
				{
					location.reload();
				}
				else
				{
					alert('Error has been occured');
				}
			},
			error: function()
			{
				alert('All fields are mandatory');
			}
		});
	});

	// confirmation Model for delete Designation 
	$(document).on('click','.delete-DesignationModel',function()
	{
		var id = $(this).attr("data-id") ;

		$('#deleteDesignation').modal('show');

		$("#deleteID").val(id);
	});
	
	//delete Designation Button
	$('#deleteDesignationButton').click(function(){
		var id = $('#deleteID').val();
		$.ajax(
		{
			type:'get',
			url:'../admin/Designation_Delete/',
			data:{id:id},
			dataType:'json',
			success:function(deleteResponse)
			{
				location.reload();
			},
			error:function()
			{
				alert('An Error has Occured, Please try again later');
			}
		});
	});

	//********** Admin Employee *****************
	// open Employee new page on button click 
	$('#newEmployeeOpenButton').click(function(){
		window.open("{{ route('adminEmployeeNew') }}", '_self');
	});

	// view Employee Model 
	$(document).on('click','.view-EmployeeModel',function()
	{
		var id = $(this).attr("data-id") ;
		$.ajax(
		{
			type:'get',
			url:'../admin/Employee_View/',
			data:{id:id},
			dataType:'json',
			success:function(viewResponse)
			{
				var name = viewResponse.name;
				var dob = viewResponse.dob;
				var gender = viewResponse.gender;
				var salary = viewResponse.salary;
				var email = viewResponse.email; 
				var password = viewResponse.password;
				var contactNo = viewResponse.contactNo;
				var hireDate = viewResponse.hireDate;
				var designation = viewResponse.designation;
				var department = viewResponse.department;
				var address = viewResponse.address;
				var bankName = viewResponse.bankName;
				var accountName = viewResponse.accountName;
				var accountNo = viewResponse.accountNo;
				var iban = viewResponse.iban;
				var branchName = viewResponse.branchName;
				var branchCode = viewResponse.branchCode;
				var bankAddress = viewResponse.bankAddress;

				$('#viewEmployeeModel').modal('show');

				$("#viewID").text(id);
				$("#viewDepartment").text(department);
				$("#viewName").text(name);
				$("#viewGender").text(gender);
				$("#viewEmail").text(email);
				$("#viewContact").text(contactNo);
				$("#viewDOB").text(dob);
				$("#viewHireDate").text(hireDate);
				$("#viewSalary").text(salary);
				$("#viewDesignation").text(designation);
				$("#viewAddress").text(address);
				$("#viewBankName").text(bankName);
				$("#viewAccountName").text(accountName);
				$("#viewAccountNumber").text(accountNo);
				$("#viewIBAN").text(iban);
				$("#viewBranchName").text(branchName);
				$("#viewBranchCode").text(branchCode);
				$("#viewBankAddress").text(bankAddress);
			},
			error:function()
			{
				alert('An Error has Occured, Please try again later');
			}
		});
	});

	// data view for edit Employee in Model
	$(document).on('click','.edit-EmployeeModel',function()
	{
		$("#editID").val('32');
		
		var id = $(this).attr("data-id") ;
		$.ajax(
		{
			type:'get',
			url:'../admin/Employee_View/',
			data:{id:id},
			dataType:'json',
			success:function(viewResponse)
			{
				var name = viewResponse.name;
				var dob = viewResponse.dob;
				var gender = viewResponse.gender;
				var salary = viewResponse.salary;
				var email = viewResponse.email; 
				var password = viewResponse.password;
				var contactNo = viewResponse.contactNo;
				var hireDate = viewResponse.hireDate;
				var designation = viewResponse.designation;
				var department = viewResponse.department;
				var address = viewResponse.address;
				var bankName = viewResponse.bankName;
				var accountName = viewResponse.accountName;
				var accountNo = viewResponse.accountNo;
				var iban = viewResponse.iban;
				var branchName = viewResponse.branchName;
				var branchCode = viewResponse.branchCode;
				var bankAddress = viewResponse.bankAddress;

				$('#editEmployeeModel').modal('show');

				
				$("#editID").val(id);
				$("#editDepartment").val(department);
				$("#editName").val(name);
				$("#editGender").val(gender);
				$("#editEmail").val(email);
				$("#editContact").val(contactNo);
				$("#editDOB").val(dob);
				$("#editHireDate").val(hireDate);
				$("#editSalary").val(salary);
				$("#editDesignation").val(designation);
				$("#editAddress").val(address);
				$("#editBankName").val(bankName);
				$("#editAccountName").val(accountName);
				$("#editAccountNo").val(accountNo);
				$("#editIBAN").val(iban);
				$("#editBranchName").val(branchName);
				$("#editBranchCode").val(branchCode);
				$("#editBankAddress").val(bankAddress);
			},
			error:function()
			{
				alert('An Error has Occured, Please try again later');
			}
		});
	});

	// confirmation Model for delete Employee 
	$(document).on('click','.delete-EmployeeModel',function()
	{
		var id = $(this).attr("data-id") ;

		$('#deleteEmployee').modal('show');

		$("#deleteID").val(id);
	});

	//deleteEmployeeButton
	$('#deleteEmployeeButton').click(function(){
		var id = $('#deleteID').val();
		$.ajax(
		{
			type:'get',
			url:'../admin/Employee_Delete/',
			data:{id:id},
			dataType:'json',
			success:function(deleteResponse)
			{
				location.reload();
			},
			error:function()
			{
				alert('An Error has Occured, Please try again later');
			}
		});
	});

	// view Users Model 
	$(document).on('click','.view-UsersModel',function()
	{
		var id = $(this).attr("data-id") ;
		$.ajax(
		{
			type:'get',
			url:'../admin/user_View/',
			data:{id:id},
			dataType:'json',
			success:function(viewResponse)
			{
				var name = viewResponse.name;
				var email = viewResponse.email; 
				var password = viewResponse.password;
				var designation = viewResponse.designation;
				var department = viewResponse.department;

				$('#viewUsers').modal('show');

				$("#viewID").text(id);
				$("#viewDepartment").text(department);
				$("#viewName").text(name);
				$("#viewEmail").text(email);
				$("#viewPassword").text(password);
				$("#viewDesignation").text(designation);
			},
			error:function()
			{
				alert('An Error has Occured, Please try again later');
			}
		});
	});

	// edit Users Model 
	$(document).on('click','.edit-UsersModel',function()
	{
		var id = $(this).attr("data-id") ;
		$.ajax(
		{
			type:'get',
			url:'../admin/user_View/',
			data:{id:id},
			dataType:'json',
			success:function(viewResponse)
			{
				var name = viewResponse.name;
				var email = viewResponse.email; 
				var password = viewResponse.password;
				var designation = viewResponse.designation;
				var department = viewResponse.department;

				$('#editUsers').modal('show');

				$("#editID").val(id);
				$("#editDepartment").text(department);
				$("#editName").text(name);
				$("#editEmail").text(email);
				$("#editPassword").val(password);
				$("#editDesignation").text(designation);
			},
			error:function()
			{
				alert('An Error has Occured, Please try again later');
			}
		});
	});

</script>