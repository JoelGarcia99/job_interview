<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teams | Job Interview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
	      <div class="container flex mb-4">
		<h1 class="font-bold flex-1">Showing list of registered teams</h1>
		<a 
		  href="{{route('teams.create')}}" 
		  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounde"
		>
		  Create
		</a>
	      </div>
	      <hr>
	      
	      <div class="container">
	        <ol>
		  @if(count($teams) == 0)
		    <span>There are no teams yet</span>
		  @endif
		  @foreach($teams as $team)
		    <li>{{$team->name}}</li>
		  @endforeach
		</ol>

		<div class="container">
		  {{$teams->links()}}
		</div>
	      </div>
            </div>
        </div>
    </div>
</x-app-layout>
