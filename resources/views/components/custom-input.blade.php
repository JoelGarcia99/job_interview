<div {{$attributes}}>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <label 
      class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
      for="{{$attributes['name']}}"
    >
      {{$attributes['title']}}
    </label>

    <input 
      class="appearance-none block w-full bg-gray-200 "
	    ."text-gray-700 border border-red-500 rounded"
	    ." py-3 px-4 mb-3 leading-tight focus:outline-none"
	    ." focus:bg-white"
      type="{{$attributes['type']}}"
      name="{{$attributes['name']}}"
      placeholder="{{$attributes['placeholder']}}"
      value="{{old($attributes['name']) != null? old($attributes['name']):$attributes['value']}}"
    >
    @error($attributes['name'])
       <p class="text-red-500 text-xs italic">{{$message}}</p>
    @enderror
</div>
