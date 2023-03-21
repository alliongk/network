<x-app-layout >
    
<div class="container ">
    <div class="row">
        <div class="col-md-6">
            <form action="{{ route('tasks.update', $tasks->id) }}" method="post">

                @method ('put')
                @csrf
                <div class="block font-medium text-lg text-black-700 ml-2 mb-2 mt-5">Edit Your Tasks</div>
                @include('tasks._form')
            </form>
        </div>
    </div>
</div>

</x-app-layout>