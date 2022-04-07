<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Player detail | Job Interview') }}
        </h2>
    </x-slot>

    @php
      $today = new Datetime(date('y.m.d'));
      $diff = $today->diff(new DateTime($player->born_date));
    @endphp
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
	      <!-- Header -->
	      <div class="container flex mb-4">
		<div class="flex-1">
		  <h1 class="font-bold flex-1">{{$player->name}}</h1>
		  <small>{{$diff->y}} years old</small>
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

	      <div class="container">
		@if($team!= null)
		  Currently playing for the team <strong>{{$team->name}}</strong>.&nbsp;
		@endif
		This player was born the date of {{$player->born_date}} and uses the number
		{{$player->dorsal}} on his shirt. He usually uses his {{$player->foot == "L"? "left":"right"}}
		 foot to play as in the position {{$player->position}}.
	      </div>

	      <div class="flex flex-1 items-center justify-center py-3">
		<form action="{{route('player.destroy', $player)}}" method="POST">
		  @csrf
		  @method('DELETE')
		  <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent self-center rounded">
		    Delete Player
		  </button>
		</form>
	      </div>
	    </div>
	  </div>
        </div>
    </div>
</x-app-layout>
