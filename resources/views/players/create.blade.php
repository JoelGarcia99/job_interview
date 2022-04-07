<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Player registration | Job Interview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
	      <!-- Header -->
	      <div class="container flex mb-4">
		<h1 class="font-bold flex-1">Create a new player</h1>
		<a 
		  href="{{route('player.index')}}" 
		  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounde"
		>
		  Go back
		</a>
	      </div>
	      <hr>
	      
	      <!-- Register form-->
	      <div class="container">
		<form class="w-full max-w-lg" method="POST" action="{{route('player.store')}}">
		  <!-- secure token -->
		  @csrf

		  <div class="flex flex-wrap -mx-3 mb-6">
		    <x-custom-input 
		      class="w-full md:w-1/3 px-3 mb-6 md:mb-0"
		      name="name"
		      title="Name"
		      type="text"
		      placeholder="Player's name"
		      style="border: none !important"
		    />
		  </div>

		  <div class="flex flex-wrap justify-center items-center -mx-3 mb-6">

		    <!-- team selection -->
		    <div class="w-40 px-3 mb-6 md:mb-0">
		      <label 
			class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
			for="team_id"
		      >
			Team
		      </label>
		      <select name="team_id">
			@foreach($teams as $option)
			  <option value="{{$option->id}}" {{old('team_id')==$option->id?"selected":""}}>
			    {{$option->name}}
			  </option>
			@endforeach
		      </select>
		      @error('team_id')
			 <p class="text-red-500 text-xs italic">{{$message}}</p>
		      @enderror
		    </div>

		    <!-- player position -->
		    <div class="w-20 px-3 mb-6 md:mb-0">
		      <label 
			class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
			for="position"
		      >
			Position
		      </label>
		      <select name="position">
			@foreach(['PT','DC','DF','MC','LI','LD','EXI','EXD','MO'] as $option)
			  <option value="{{$option}}" {{old('position')== $option?"selected":""}}>
			    {{$option}}
			  </option>
			@endforeach
		      </select>
		      @error('position')
			 <p class="text-red-500 text-xs italic">{{$message}}</p>
		      @enderror

		    </div>

		    <!-- this is just a blank space -->
		    <div class="w-5"></div>

		    <!-- player foot -->
		    <div class="w-20 px-3 mb-6 md:mb-0">
		      <label 
			class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
			for="foot"
		      >
			Foot
		      </label>
		      <select name="foot">
			@foreach(['L', 'R'] as $option)
			  <option value="{{$option}}" {{old('foot')== $option?"selected":""}}>
			    {{$option}}
			  </option>
			@endforeach
		      </select>

		      @error('foot')
			 <p class="text-red-500 text-xs italic">{{$message}}</p>
		      @enderror

		    </div>
		    <x-custom-input 
		      class="w-20 px-3 flex-1 mb-6 md:mb-0"
		      name="dorsal"
		      title="Dorsal"
		      type="number"
		      style="border: none !important"
		    />
		    <x-custom-input 
		      class="w-20 flex-1 px-3 mb-6 md:mb-0"
		      style="border: none !important"
		      name="born_date"
		      title="Born Date"
		      type="date"
		    />
		  </div>


		  <div class="container flex justify-center flex-1">
		    <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
		      Register Player
		    </button>
		  </div>
		</form>
	      </div>
            </div>
        </div>
    </div>
</x-app-layout>
