<div class="w-6/12 my-8">
    <livewire:tasks.task-count :$count/>
    @foreach ($tasks as $task)
        <div
            class="mb-3 w-11/12  p-4 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg dark:bg-gray-700 dark:border-gray-600 dark:text-white">
            <div class="flex justify-between">
                <h2 class="text-lg font-semibold">
                    {{ $task->title }}
                </h2>
                <small class="border p-1 rounded-md">{{ $task->deadline->diffForHumans() }}</small>
            </div>
            <p class="mt-3">{{ $task->description }}</p>
        </div>
    @endforeach
    <div class="mt-5">
        {{$tasks->links()}}
    </div>
</div>
