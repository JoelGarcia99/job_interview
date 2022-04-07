<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Player detail | Job Interview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
	      <!-- Header -->
	      <div class="container flex mb-4">
		<div class="flex-1">
		  <h1 class="font-bold flex-1">{{$player->name}} (DT: {{$player->dt}})</h1>
		  <small>{{$player->stadium}} | {{$player->location}}</small>
		</div>

		<a 
		  href="{{route('player.edit', $player)}}" 
		  class="bg-transparent mr-2 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounde"
		>
		  Edit
		<a 
		  href="{{route('player.index')}}" 
		  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounde"
		>
		  Go back
		</a>
	      </div>
	      <br>


	      <div class="flex flex-1 items-center justify-center py-3">
		<form action="{{route('players.destroy', $player)}}" method="POST">
		  @csrf
		  @method('DELETE')
		  <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent self-center rounded">
		    Delete Team
		  </button>
		</form>
	      </div>
	    </div>
	  </div>
        </div>
    </div>
</x-app-layout>
