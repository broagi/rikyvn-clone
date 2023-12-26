<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Video Upload') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" enctype="multipart/form-data">
                    <div class="space-y-12 p-4">
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="col-span-full">
                                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Cover
                                    (Max: 500Kb)</label>
                                <div
                                    class="mt-2 flex justify-center rounded-lg border border-dashed border-gray-900/25 px-6 py-10">
                                    <div class="text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-300" viewBox="0 0 24 24"
                                            fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                d="M1.5 6a2.25 2.25 0 012.25-2.25h16.5A2.25 2.25 0 0122.5 6v12a2.25 2.25 0 01-2.25 2.25H3.75A2.25 2.25 0 011.5 18V6zM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0021 18v-1.94l-2.69-2.689a1.5 1.5 0 00-2.12 0l-.88.879.97.97a.75.75 0 11-1.06 1.06l-5.16-5.159a1.5 1.5 0 00-2.12 0L3 16.061zm10.125-7.81a1.125 1.125 0 112.25 0 1.125 1.125 0 01-2.25 0z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <div class="mt-4 flex text-sm leading-6 text-gray-600">
                                            <label for="cover-upload"
                                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input accept="image/*" id="cover-upload" name="cover" type="file"
                                                    class="sr-only">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        {{-- <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p> --}}
                                        <p id="cover-upload-name"></p>
                                        @error('cover')
                                            <div class="alert alert-danger text-red-500">{{ $errors->first('cover') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div>
                                <label for="title"
                                    class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                <div>
                                    <input name="title" value="{{ old('title') }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    @error('title')
                                        <div class="alert alert-danger text-red-500">{{ $errors->first('title') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="description"
                                    class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                                <div>
                                    <textarea name="description" rows="5" value="{{ old('description') }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                                    @error('description')
                                        <div class="alert alert-danger text-red-500">{{ $errors->first('description') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="frame" class="block text-sm font-medium leading-6 text-gray-900">Embed
                                    Frame</label>
                                <div>
                                    <input name="embed_frame" value="{{ old('embed_frame') }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    @error('embed_frame')
                                        <div class="alert alert-danger text-red-500">{{ $errors->first('embed_frame') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="ordering"
                                    class="block text-sm font-medium leading-6 text-gray-900">Ordering</label>
                                <div>
                                    <input name="ordering" type="number" value="{{ old('ordering') }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    @error('ordering')
                                        <div class="alert alert-danger text-red-500">{{ $errors->first('ordering') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="ordering" class="block text-sm font-medium leading-6 text-gray-900">Video
                                    tổng hơp?</label>
                                <div>
                                    <input type="checkbox" name="primary" />
                                    @error('primary')
                                        <div class="alert alert-danger text-red-500">{{ $errors->first('primary') }}</div>
                                    @enderror
                                </div>

                            </div>
                        </div>
                    </div>

            </div>

            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Upload</button>
            </div>
            </form>
        </div>
    </div>
    </div>
</x-app-layout>
