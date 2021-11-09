<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
		<!--bootsrap-->
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

	   <!-- datatable cdn !-->
	   <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
	   <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
		 <style>
    select{
		
		background-position:right -2px center !important;
		background-size:1.1em 1.1em !important;
	}
	</style>
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
		<!-- bootstrap js-->
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
		 
		<script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
		<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js" type="text/javascript"></script>
		<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js" type="text/javascript"></script>	
		<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js" type="text/javascript"></script>	
		<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.print.min.js" type="text/javascript"></script>
			   
		<script>
			$(document).ready(function() {				
				$('#example1').DataTable( {					
					"lengthMenu": [[5, 10, 25, 50, -1], [5, 10, 25, 50, "All"]],
					dom: 'lfBrtip',    
					buttons: [
						'copy', 'csv', 'excel', 'pdf', 'print'
					],
				 } );
				 
					 //fadeOut success message
					  setTimeout(function(){
					
					  $("#msg").fadeOut(5000);
				  });
			} );
				
		</script>
    </body>
</html>
