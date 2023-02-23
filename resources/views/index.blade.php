<html>
	<head>
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
	   <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	 <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet"/>
	 <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
	</head>

	<div class="container">
		 <form action="/laravel-task/public/insert" method="post">
			@csrf
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
		
		
			<h4> BLOG POST</h4>
			<div class="mb-3">
				<label for="Name" class="form-label">Name</label>
				<input type="text" style="width:30%;" class="form-control" name="name" id="name" value="" >
			</div>
				<div class="mb-3">
				<label for="Author" class="form-label">Author</label>
				<input type="text" style="width:30%;" class="form-control" name="Author" id="Author" value="" >
			</div>
				<div class="mb-3">
				<label for="Created" class="form-label">Created</label>
				<input type="text" style="width:30%;" class="form-control" name="Created" id="Created">
			</div>
				<div class="mb-3">
				<label for="Description" class="form-label">Description</label>
				<input class="form-control" style="width:30%;" name="Description" id="Description" value="" rows="3"></input>
			</div>

			<button type="submit" class="btn btn-primary" onclick="return validation();">Submit</button>
		</form>
	</div>
<script>
function validation(){
		var Name=$("#name").val(); 
		var Author=$("#Author").val(); 
		var Created=$("#Created").val(); 
		var Description=$("#Description").val(); 
		if(Name==""){
			toastr.warning("Please enter a Name...");
			return false;			
		}else if(Author==""){ 
			toastr.warning("Please enter a Author...");	
			return false;
		}else if(Created==""){ 
			toastr.warning("Please enter a Created...");
			return false;			
		}else if(Description==""){ 
			toastr.warning("Please enter a Description...");	
			return false;
		}

}
</script>

</html>