<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Team detail | Job Interview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
	      <!-- Header -->
	      <div class="container flex mb-4">
		<div class="flex-1">
		  <h1 class="font-bold flex-1">{{$team->name}} ({{"DT Pending"}})</h1>
		  <small>{{$team->location}}</small>
		</div>

		<a 
		  href="{{route('teams.edit', $team)}}" 
		  class="bg-transparent mr-2 hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounde"
		>
		  Edit
		<a 
		  href="{{route('teams.index')}}" 
		  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounde"
		>
		  Go back
		</a>
	      </div>
	      <br>

	      <!-- a little history about the team -->
	      <h2 class="my-2 font-bold text-base">History</h2>
	      <span>{{$team->history != null? $team->history:"No history"}}</span>
	      <br>
	      <br>

	      <!-- showing list of players in the team -->
	      <h2 class="font-bold text-base">Player list </h2>
	      <span>No players on this team</span>
	      <br>
	      
	      <div class="flex flex-1 items-center justify-center py-3">
		<form action="{{route('teams.destroy', $team)}}" method="POST">
		  @csrf
		  @method('DELETE')
		  <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent self-center rounded">
		    Delete
		  </button>
		</form>
	      </div>
	    </div>
	  </div>
        </div>
    </div>
</x-app-layout>
