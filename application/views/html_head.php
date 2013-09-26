<html>
<head>
	<title>Welcome to Inflow!</title>
	<style type="text/css">
		body{
			background: url();
			margin: auto;
			color: #151B8D;
			width:100%;
			text-align: center;
		}

		#top{
			width:100%;
			margin:auto;
			padding-top: 5px;
			height: 50px;
			background-color: black;
			color:white;
		}

		#head{
			border-radius: 5px;
			text-align: center;
			box-shadow: 3px 3px 3px 3px grey;
			margin:auto;
			margin-top: 35px;
		}

		#center{
			width:500px;
			margin:auto;
			background-color: white;
			height:auto;
			padding: 30px 40px 20px 40px;
			border-radius: 15px;
			margin-top: 80px;
			border: 1px solid grey;
			float: left;
		}

		#admin{
			margin-top: 80px;
			padding-top: 200px;
			float: left;
			height: 100%;
			background-color: #E8E8E8;
			border: 1px solid grey;
			height: 300px;
			margin-right: 5px;
			border-radius: 10px; 
		}

		#recipients{
			width: 400px;
			height: 100px;
			background-color: #E8E8E8;
			border: 1px solid grey;
			margin: auto;
		}

		#content{
		}

		form input[type=text]{
			width: 250px;
			height:35px;
			text-align: justify;
			font-size: 20px;
			font-weight: bold;
		}

		form select{
				text-align: center;
				font-size: 20px;
				font-weight: bold;
		}


		select {
       		 width:150px;
    }

    #dashboard a{
    	float:left;
    	margin-left: 20px;
    	margin-top: 5px;
    	color:white;
    }

     #header{
     	margin:auto;
    }

     #logout a{
    	float:left;
    	margin-left: 20px;
    	margin-top: 5px;
    	color:white;
    }
	</style>

</head>
<body>

	<div id="top">
		<div id="dashboard"><a href="http://localhost/inflow/index.php/login/dashboard"><h4>Dashboard</h4></a></div>
		<div id="logout"><a href="http://localhost/inflow/index.php/login/logout"><h4>logout</h4></a></div>
		<div id="header"><h2>INFLOW</h2></div>
		
	</div>	
