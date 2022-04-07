<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Players | Job Interview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
	      <div class="container flex mb-4">
		<h1 class="font-bold flex-1">Showing list of registered player</h1>
		<a 
		  href="{{route('player.create')}}" 
		  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounde"
		>
		  Create
		</a>
	      </div>
	      <hr>
	      
	      <!--table of content-->
	      <div class="container">
		  @if($players == null || count($players) == 0)
		    <span>There are no player yet</span>
		  @endif
		  <div class="flex flex-col">
		    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
		      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
			<div class="overflow-hidden">
			  <table class="min-w-full">
			    <thead class="border-b">
				<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
				  ID
				</th>
				<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
				  Name
				</th>
				<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
				  Slug
				</th>
				<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
				  Dorsal
				</th>
				<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
				  Position
				</th>
				<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
				  Age
				</th>
				<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
				  Foot
				</th>
				<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
				  Team
				</th>
			      <tr>
			    </thead>
			    <tbody>
			      @foreach($players as $player)
			      @php
				$today = new Datetime(date('y.m.d'));
				$diff = $today->diff(new DateTime($player->born_date));
			      @endphp
			      <tr class="bg-white border-b">
				<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
				  {{$player->id}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  {{$player->name}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  {{$player->slug}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  {{$player->dorsal}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  {{$player->position}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  {{$diff->y}}
				</td>

				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  {{$player->foot}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  {{$player->team_name}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  <a href="{{route('player.show', $player)}}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shado">
				    Details
				  </a>
				</td>
			      </tr>
			      @endforeach
			    </tbody>
			  </table>
			  <!-- pagination button -->
			  {{$players->links()}}
			</div>
		      </div>
		    </div>
		  </div>
            </div>
        </div>
    </div>
</x-app-layout>
