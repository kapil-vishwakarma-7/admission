	@extends('layouts.header')

	@section('body')

			<!--main content start-->
			<section id="main-content">
				<section class="wrapper">
					<div class="row">
						<div class="col-lg-12">
							<h3 class="page-header"><i class="fa fa-files-o"></i> Add Fees</h3>
							<ol class="breadcrumb">
								<li><i class="fa fa-home"></i><a href="{{ url('/') }}">Home</a></li>
								<li><i class="icon_document_alt"></i>Add</li>
								<li><i class="fa fa-files-o"></i>Fees</li>
							</ol>
						</div>
					</div>
					<!-- Form validations -->
					<div class="row">
						<div class="col-lg-12">
							<section class="panel">
								<header class="panel-heading">
									View Fees Detail
								</header>
								<div class="panel-body">
							
										
											<div class="col-md-8 col-md-offset-2">
									
													<select class="form-control" id="sel-course_id">
														@foreach($course as $e)
															<option value="{{ $e->id }}">{{ $e->name }}</option>
														@endforeach
													</select>
	<br>										</div>
</div>
								
@include('fees_master_table')

											

								
							</section>
							<section class="panel">
								<header class="panel-heading">
									Add Fees
								</header>
								<div class="panel-body">
						
								<div class="table-responsive">

								 <table class="table table-hover table-striped">
    <thead>
      <tr>
        <th width="5%">#</th>
        <th width="20%">Course</th>
        <th width="15%">Fees Type</th>
        <th width="20%">Amount</th>
        <th width="40%">Description</th>
        
        
        
      </tr>
    </thead>
    <tbody>
    	<form id="add-course" >

    		{{ csrf_field() }}
      <tr>
        <td>1</td>
	        <td>
	        	<select name="course_id" class="form-control" id="add-course_id">
	        			@foreach($course as $e)
							<option value="{{ $e->id }}">{{ $e->name }}</option>
						@endforeach
    	    	</select>
    		</td>
        <td>
        	<input type="text" class="form-control" name="fees_type">
        </td>
        <td><input type="text" class="form-control" name="amount"></td>
         <td><input type="text" class="form-control" name="description"></td>
      </tr>
      </form>
    
    </tbody>

  </table>	
  <center><button type="button" id="btn-add_course" class="btn btn-info">Save</button></center>		

</div>

											

								
							</section>

						</div>

					</div>
				 

				 @include('master_fees_table')
					<!-- page end-->
				</section>
			</section>
		
		 
	</body>

	<script type="text/javascript">
		
	$('#search-data').on('click',function(e){
			// alert('asds');
			e.preventDefault(e);
					$.ajax({
					type:"POST",
					url:'/searchstudent',
					data: $("#fees-form").serialize(),
					processData: false,
					dataType: 'json',
					success: function(data){
							alert('success');
							console.log(data);
							$("#result").html(data);
					},
					error: function(data){
							alert("ERROR")
							console.log(data);
							// $("#result").html(data);
							
					}
			})
			});


	$("#btn-add_course").on('click',function(){
		alert();		
		$.ajax({
			type:"POST",
			url:'/feesmaster',
			data:$("#add-course").serialize(),

			success: function(data){
				alert("Fee Master Created");
			},
			error:function(data){
				alert("Cannot Add master");
				console.log(data);
			}
		})
	});
	$("#sel-course_id").on('change',function(){
		var id = $(this).val();
		// alert(id);
		$.ajax({
			type:'GET',
			url : '/getfeemaster?id='+id,
			success:function(data){
				// alert('ScrollView');
				console.log(data);
				$("#tab-fee_masters").html(data);
			},
			error:function(data){
				alert(data);
				console.log(data);
			}
		})	
	})
	</script>
	
		@endsection