<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Component') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
				
                    You're logged in!
					
                </div>
				
				{{-- component page --}}
				
				<div class="row p-5">
				 <div class="col-6 mx-auto">
				    <div class="card shadow">
					  <div class="card-header">Component</div>
					  <div class="card-body">
					    <form action="/update/{{$components->id}}"method="post"id="formdata"onsubmit="return validation()">
						@csrf
						  <div class="form-group">
							<label>Component Name:</label>
							<input type="text"id="name" class="form-control" placeholder="Enter component name"name="component"value="{{$components->name}}"onkeypress="if (!isNaN( String.fromCharCode(event.keyCode))) return false;">
							<span id="checkname"class="text-danger"></span>
							
							@if($errors->any())
							<div class="alert-danger">
							   @foreach($errors->get('component') as $message)
								{{ $message }}
							   @endforeach
							</div>
							@endif
							
						  </div>
						  <div class="form-group">
							<label>Amount</label>
							<input type="text" id="amount" class="form-control" placeholder="Enter amount"name="amount"value="{{$components->amount}}"onkeypress="if (isNaN( String.fromCharCode(event.keyCode))) return false;">
							<span id="checkamount"class="text-danger"></span>
							
							@if($errors->any())
							<div class="alert-danger">
							   @foreach($errors->get('amount') as $message)
								{{ $message }}
							   @endforeach
							</div>
							@endif
							
							
						  </div>
						  <div>
							<select  class="form-control"name="status"value="{{$components->status}}">
							 <option>Active</option>
							 <option>Inactive</option>
							</select>
					       </div>
						   <button class="btn btn-info mt-3">Update</button>
					    </form>
					  </div>
					  
					</div>
				 </div>
				</div>
            </div>
        </div>
		
		<script>
		function validation()
		{
			var name=$("#name").val();
			var amount=$('#amount').val();
			//alert(name);
			
			if(name=='')
			{
				//alert('name field required');
				$('#checkname').html("name field required");
				
				return false;
			}
			
			if(!isNaN(name))
			{
				//alert('Only charecters are allowed');
				$('#checkname').html("Only charecters are allowed");
				return false;
			}
			
			//amount
			
			if(amount=='')
			{
				//alert('amount field required');
				$('#checkamount').html("amount field required");
				
				return false;
			}
			
			if(isNaN(amount))
			{
				//alert('Only number are allowed');
				$('#checkamount').html("Only number are allowed");
				return false;
			}
		}


	</script>
    </div>
</x-app-layout>