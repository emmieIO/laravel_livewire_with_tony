<div class="w-5/12  bg-blue-200 my-8 self-start rounded-lg">
    <div>
        <h1 class="text-3xl font-bold text-center py-5"><span class="text-purple-600 ">EmmieIO</span> Task Manager</h1>
        <p class="text-center">This is simple task manager built with laravel, livewire </p>
    </div>
     @if (session('message'))
           <div class=" w-3/5 mx-auto my-2 flex items-center justify-center p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400"
               role="alert">
               <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                   fill="currentColor" viewBox="0 0 20 20">
                   <path
                       d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
               </svg>
               <span class="sr-only">Info</span>
               <div>
                   <span class="font-medium">Success alert!</span> {{ session('message') }}
               </div>
           </div>
       @endif
    

    <form class="max-w-sm my-8 mx-auto" wire:submit="save">
        <div class="flex justify-between">
            <div class="mb-5">
                <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
                <input type="text" id="title"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Title" wire:model.live="form.title">
                <div>
                    @error('form.title')
                        <small class="text-red-500 text-sm">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-5">
                <label for="slug" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">slug</label>
                <input type="text" id="slug"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    wire:model.live="form.slug">
                <div>
                    @error('form.slug')
                        <small class="text-red-500 text-sm">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>
        <div class="mb-5">
            <label for="description"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea id="description" rows="4"
                class="block resize-none p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Description" wire:model.live="form.description"></textarea>
            <div>
                @error('form.description')
                    <small class="text-red-500 text-sm">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="flex justify-between">
            <div class="mb-5">
                <label for="status"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                <select id="status"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    wire:model="form.status">
                    <option value="">Select status</option>
                    @foreach (App\Enums\StatusType::cases() as $enum)
                        <option value="{{ $enum->value }}">{{ $enum->name }}</option>
                    @endforeach

                </select>
                <div>
                    @error('form.status')
                        <small class="text-red-500 text-sm">{{ $message }}</small>
                    @enderror
                </div>
            </div>
            <div class="mb-5">
                <label for="priority"
                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Priority</label>
                <select id="countries"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    wire:model="form.priority">
                    <option value="">Select priority</option>

                    @foreach (App\Enums\PriorityType::cases() as $priority)
                        <option value="{{ $priority->value }}">{{ $priority->name }}</option>
                    @endforeach

                </select>
                <div>
                    @error('form.priority')
                        <small class="text-red-500 text-sm">{{ $message }}</small>
                    @enderror
                </div>
            </div>
        </div>


        <div class="mb-5">
            <label for="deadline" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
            <input type="date" id="deadline"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                wire:model="form.deadline">
            <div>
                @error('form.deadline')
                    <small class="text-red-500 text-sm">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <button type="submit"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 flex">Add
            Task
            <div wire:loading>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                    style="margin: auto; background:none; display: inline-block; shape-rendering: auto;" width="20px"
                    height="20px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <path d="M10 50A40 40 0 0 0 90 50A40 42 0 0 1 10 50" fill="#fff" stroke="none">
                        <animateTransform attributeName="transform" type="rotate" dur="1s"
                            repeatCount="indefinite" keyTimes="0;1" values="0 50 51;360 50 51"></animateTransform>
                    </path>
                </svg>
            </div>
        </button>
    </form>
</div>
