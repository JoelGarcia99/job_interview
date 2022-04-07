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
	      
	      <!--table of content-->
	      <div class="container">
		  @if(count($teams) == 0)
		    <span>There are no teams yet</span>
		  @endif
		  <div class="flex flex-col">
		    <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
		      <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
			<div class="overflow-hidden">
			  <table class="min-w-full">
			    <thead class="border-b">
			      <tr>
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
				  Color
				</th>
				<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
				  Location
				</th>
				<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
				  Stadium
				</th>
				<th scope="col" class="text-sm font-medium text-gray-900 px-6 py-4 text-left">
				  Actions
				</th>
			      </tr>
			    </thead>
			    <tbody>
			      @foreach($teams as $team)
			      <tr class="bg-white border-b">
				<td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
				  {{$team->id}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  {{$team->name}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  {{$team->slug}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  {{$team->color}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  {{$team->location}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  {{$team->stadium}}
				</td>
				<td class="text-sm text-gray-900 font-light px-6 py-4 whitespace-nowrap">
				  <a href="{{route('teams.show', $team)}}" class="bg-white hover:bg-gray-100 text-gray-800 font-semibold py-2 px-4 border border-gray-400 rounded shado">
				    Details
				  </a>
				</td>
			      </tr>
			      @endforeach
			    </tbody>
			  </table>
			  <!-- pagination button -->
			  {{$teams->links()}}
			</div>
		      </div>
		    </div>
		  </div>
	      </div>
            </div>
        </div>
    </div>
</x-app-layout>
