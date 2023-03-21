<x-card>

<div class="block font-medium text-lg text-black-700 ml-2">Create New Task</div>

<div class="card-body">

  <form action={{ route('tasks.store') }} method="post" >

    @csrf
    
    @include('tasks._form',[

    'tasks' => new App\Models\Task,

  ])
  </form>

</div>

</x-card>

