<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Show Users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
					
                </div>				
            </div>
			<div class="table-responsive mt-5 shadow border border-dark p-2">
				<table id="example1" class="display nowrap table table-bordered text-center " style="width:100%">
				  <thead class="table-dark">
					<tr>
					 <th>Id</th>
				     <th>User name</th>
					 <th>User email</th>					 
					</tr>
				 </thead>
				 <tbody>
				  @foreach($users as $list)
					<tr>
					<td>{{ $list->id }}</td>
					<td>{{ $list->name }}</td>
					<td>{{ $list->email }}</td>		  
					</tr>
				    @endforeach
			     	</tbody>
				</table>
			</div>
			
        </div>
		
    </div>
	
	 
</x-app-layout>
