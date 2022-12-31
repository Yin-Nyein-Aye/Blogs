<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogs</title>    
    <link href="/images/favicon.png" rel="icon" type="image/png" sizes="16x16" />
    <link href="/blog.css" rel="stylesheet">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <body id="home">    
    <x-navbar />    
    {{$slot}}
    <x-footer /> 

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"
    crossorigin="anonymous">
    </script>
    
    {{-- ckeditor --}}
    <script src="/ckeditor/ckeditor.js"></script>
		<script>ClassicEditor
					.create( document.querySelector( '.editor' ), {						
						licenseKey: '',
					} )
					.then( editor => {
						window.editor = editor;
					} )
					.catch( error => {
						console.error( 'Oops, something went wrong!' );
						console.error( 'Please, report the following error on       https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:' );
						console.warn( 'Build id: eucamibllt8y-u4qj79foqkn3' );
						console.error( error );
					} );
		</script>
  </body>
</html>