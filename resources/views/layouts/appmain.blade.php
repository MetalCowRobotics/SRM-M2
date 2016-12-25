<!DOCTYPE = html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

   <link href="media/header.css" type="text/css" rel="stylesheet">
   <link href="media/layout.css" type="text/css" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
   <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
  <div class="header-wrapper">
    <div class="header-logo">
        <a href="layout.html" id="srm_logo">
	      <img src="media\logo.png" onmouseover="this.src='media\\logo_hover.png'" onmouseout="this.src='media\\logo.png'">
	          </a>
		      <a href="https://www.metalcowrobotics.com" target="_blank" id="srm_title">
		            <img src="media\text.png">
			        </a>
				  </div>
				    <div class="header-aside">
				        <a class="header-aside-item new-sponsor-button-wrapper" href="addsponsor">
					      <img src="media\add_button.png">
					            <div>Add sponsor</div>
						        </a>
							    <a class="header-aside-item">
							        </a>
								    <div class="header-aside-item user-icon-wrapper">
								          <a class="user-icon" href="#">
									          <img src="media\lorem_icon.png">
										        </a>
											    </div>
											      </div>
  </div>
  <div class="wrapper">
        @yield('content')
  </div>
  </body>
</html>

