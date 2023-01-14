<!DOCTYPE html>
<html>
  <head>
  	<meta charset="UTF-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  	
    <title>PHP Test Application</title>
    
	<link href="favicon.ico" type="image/x-icon" rel="icon" />
	<link href="favicon.ico" type="image/x-icon" rel="shortcut icon" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/application.css">
  </head>
  <body>

  <header class="d-flex flex-wrap justify-content-center py-3 mb-4 bg-dark text-white">
	  <div class="container">
		  <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
			  <span class="fs-4">🦄 PHP Test Application</span>
		  </a>
	  </div>
  </header>

  <div class="container">
  <?= $content ?>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.6.3.slim.js" integrity="sha256-DKU1CmJ8kBuEwumaLuh9Tl/6ZB6jzGOBV/5YpNE2BWc=" crossorigin="anonymous"></script>
  <script src="js/application.js" defer async></script>
  </body>
</html>