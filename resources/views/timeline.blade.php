<x-app-layout>

        <div class="grid grid-cols-12 gap-6 ml-5">
            <div class="col-span-7">

                <x-card>
                <div class="block font-medium text-lg text-black-700 ml-2 mb-2 mt-5">Update Your Status</div>
<form action="{{route('statuses.store')}}" method="post">
    @csrf
<div class="flex">
<div class="flex-shrink-0 mr-3 ">
     <img class="w-10 h-10 rounded-full" src="{{ Auth::user()->gravatar() }}" alt="{{Auth::user()->name}}">
</div>  
</div>

<div class="w-full">
    <div class="block font-medium text-lg text-black-700 ">
        {{Auth::user()->name}}
    </div>

    <div class="my-2">
        <textarea 
        name="body" 
        id="body" 
        placeholder="What is on your mind?" 
        class="form-textarea w-full border-grey-300 rounded-xl resize-none focus:border-blue-500 focus:ring focus:ring-blue-200 transition duration-200"></textarea>
    </div>
</div>

<div class="text-right">
    <x-primary-button>Post</x-primary-button>
</div>

</form>


</x-card>

            <div class="space-y-6 mt-5">
    <div class="space-y-5">
 <x-statuses :statuses="$statuses">
    
 </x-statuses>

    </div>


            </div>

        </div>


@if(Auth::user()->follows()->count())

        <div class="col-span-4 ml-10">
            <x-card>

            <h1 class="text-2xl mb-5"> Recently follows</h1>

        <div class="space-y-5">
       <x-following :users="Auth::user()->follows()->limit(5)->get()">

       </x-following>
</div>
</x-card> 
        </div>
@endif
        </div>

</x-app-layout>