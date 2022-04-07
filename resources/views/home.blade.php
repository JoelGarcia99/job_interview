<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Home | Job Interview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white px-4 py-4 overflow-hidden shadow-xl sm:rounded-lg">
	      <!-- <x-jet-welcome /> -->
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
</x-app-layout>
