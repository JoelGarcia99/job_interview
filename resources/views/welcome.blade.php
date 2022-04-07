<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Welcome | Job Interview</title>
  <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body >
  <div class="container flex flex-col mx-auto py-3 justify-center items-center">
    <!-- a kind of header  -->
    <div class="container flex py-4 px-4 mx-auto self-center rounded overflow-hidden shadow-lg">
      <h2 class="font-bold flex-1 w-64">Teams | Job Interview</h2>
      <a class="mr-2 bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" href="{{route('register')}}">Register</a>
      <a class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shadow" href="{{route('login')}}">Login</a>
    </div>
    <div>
      <div>
	<!-- A welcome message title -->
        <h1 class="py-4 font-bold">About This application</h1>
	<br>
	<span>
	  To start using this web site you need to login first, or create an account if you
	  don't have one. Once you are logged in you will be able to <strong>create, visualize,
	  edit</strong>, and <strong>delete</strong> football teams and players.
	  This application consits of two CRUDs where you can register football teams
	  and a list of players related to a specific team. The core of the application is 
	  based on MySQL and Jetstream, so all the authentication & session process will be managed
	  by Jetstream, aditionally, Tailwind CSS was used to give some styles to this webpage.
	  <br><br>
	</span>
	  <h2 class="py-4 font-bold">Possible problems</h2>
	  <span>
	    This page is based on Tailwild CSS, so if you experience some visual problems you should
	    check if you have node installed, and then run:<br>
	    <code class="container mx-auto text-center font-bold">npm run dev & npm run watch</code>
	    <br>
	    Also you need to have Laravel 8+ installed in order run it properly. If there is no data when
	    you logged in, it means you have not executed migrations, to do it run:<br>
	    <code class="container mx-auto text-center font-bold">php artisan migrate:fresh --seed</code>
	    <br>
	    The command below will also destroy your user, so you need to sign up again.
	  </span>

      </div>
    </div>
  </div>
</body>
</html>
