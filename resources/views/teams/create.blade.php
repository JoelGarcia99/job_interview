<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Teams | Job Interview') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-xl sm:rounded-lg">
	      <!-- Header -->
	      <div class="container flex mb-4">
		<h1 class="font-bold flex-1">Create a new Team</h1>
		<a 
		  href="{{route('teams.index')}}" 
		  class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounde"
		>
		  Go back
		</a>
	      </div>
	      <hr>
	      
	      <!-- Register form-->
	      <div class="container">
		<form class="w-full max-w-lg" method="POST" action="{{route('teams.store')}}">
		  <!-- secure token -->
		  @csrf

		  <div class="flex flex-wrap -mx-3 mb-6">
		    <x-custom-input 
		      class="w-full md:w-1/3 px-3 mb-6 md:mb-0"
		      name="name"
		      title="Team name"
		      type="text"
		      placeholder="The team name"
		    />

		  </div>

		  <div class="flex flex-wrap -mx-3 mb-6">

		    <x-custom-input 
		      class="w-full border-0 px-3 mb-6 md:mb-0"
		      name="color"
		      title="Team Color"
		      type="text"
		      placeholder="white"
		    />
		    <x-custom-input 
		      class="w-full border-0 px-3 mb-6 md:mb-0"
		      name="dt"
		      title="DT name"
		      type="text"
		      placeholder="Diego Maradona"
		    />

		  </div>

		  <div class="flex flex-wrap -mx-3 mb-6">
		    <x-custom-input 
		      class="w-full border-0 px-3 mb-6 md:mb-0"
		      name="location"
		      title="Location"
		      type="text"
		      placeholder="City, Country"
		    />

		    <x-custom-input 
		      class="w-full border-0 px-3 mb-6 md:mb-0"
		      name="stadium"
		      title="Stadium"
		      type="text"
		      placeholder="Arena"
		    />
		  </div>


		  <div class="w-full">
		    <label for="">History</label>
		    <textarea name="history" class="w-full" rows="10">{{old('history')}}</textarea>
		    @error('history')
		     <p class="text-red-500 text-xs italic">{{$message}}</p>
		    @enderror
		  </div> 

		  <div class="container flex justify-center flex-1">
		    <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
		      Create Team
		    </button>
		  </div>
		</form>
	      </div>
            </div>
        </div>
    </div>
</x-app-layout>
