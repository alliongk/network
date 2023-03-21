<x-app-layout>

    
<div class="grid grid-cols-4 gap-5 ml-5">
<x-following :users="$users"></x-following>


</div>
<div class="mt-6">
{{ $users->links() }}
</div>


</x-app-layout>