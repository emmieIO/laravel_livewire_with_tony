<div>
    @if (session('success'))
        <div id="toast-success"
            class="flex items-center w-full max-w-xs p-4 mb-4 text-gray-500 bg-white rounded-lg shadow dark:text-gray-400 dark:bg-gray-800"
            role="alert">
            <div
                class="inline-flex items-center justify-center flex-shrink-0 w-8 h-8 text-green-500 bg-green-100 rounded-lg dark:bg-green-800 dark:text-green-200">
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                    viewBox="0 0 20 20">
                    <path
                        d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z" />
                </svg>
                <span class="sr-only">Check icon</span>
            </div>
            <div class="ms-3 text-sm font-normal">{{$success}}</div>
            <button type="button"
                class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700"
                data-dismiss-target="#toast-success" aria-label="Close">
                <span class="sr-only">Close</span>
                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 14 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                </svg>
            </button>
        </div>
    @endif

    <form class="max-w-sm my-8 mx-auto" wire:submit="save">
        <div class="mb-5">
            <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
            <input type="text" id="title"
                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Title" wire:model="form.title">
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
                wire:model="form.slug">
            <div>
                @error('form.slug')
                    <small class="text-red-500 text-sm">{{ $message }}</small>
                @enderror
            </div>
        </div>
        <div class="mb-5">
            <label for="description"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
            <textarea id="description" rows="4"
                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                placeholder="Description" wire:model="form.description"></textarea>
            <div>
                @error('form.description')
                    <small class="text-red-500 text-sm">{{ $message }}</small>
                @enderror
            </div>
        </div>

        <div class="mb-5">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
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

        <div class="mb-5">
            <label for="deadline"
                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Deadline</label>
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
                    style="margin: auto; background:none; display: inline-block; shape-rendering: auto;"
                    width="20px" height="20px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid">
                    <path d="M10 50A40 40 0 0 0 90 50A40 42 0 0 1 10 50" fill="#fff" stroke="none">
                        <animateTransform attributeName="transform" type="rotate" dur="1s"
                            repeatCount="indefinite" keyTimes="0;1" values="0 50 51;360 50 51"></animateTransform>
                    </path>
                </svg>
            </div>
        </button>
    </form>

</div>
