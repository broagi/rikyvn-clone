<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Add new portifolio') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <form method="POST" enctype="multipart/form-data">
                    <div class="space-y-12 p-4">
                        <div class="border-b border-gray-900/10 pb-12">
                            <div class="col-span-full">
                                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Thumbnail
                                    (Max: 5Mb)</label>
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
                                            <label for="form-item-upload"
                                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input accept="image/*" id="form-item-upload" name="thumbnail" type="file"
                                                    class="sr-only form-item-upload">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        {{-- <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p> --}}
                                        <p class="form-item-upload-filename thumbnail"></p>
                                        @error('thumbnail')
                                            <div class="alert alert-danger text-red-500">{{ $errors->first('thumbnail') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Banner
                                    (Max: 5Mb)</label>
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
                                            <label for="form-item-upload2"
                                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input accept="image/*" id="form-item-upload2" name="image1" type="file"
                                                    class="sr-only form-item-upload">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        {{-- <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p> --}}
                                        <p class="form-item-upload-filename image1"></p>
                                        @error('image1')
                                            <div class="alert alert-danger text-red-500">{{ $errors->first('image1') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Desktop
                                    (Max: 5Mb)</label>
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
                                            <label for="form-item-upload3"
                                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input accept="image/*" id="form-item-upload3" name="image2" type="file"
                                                    class="sr-only form-item-upload">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        {{-- <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p> --}}
                                        <p class="form-item-upload-filename image2"></p>
                                        @error('image2')
                                            <div class="alert alert-danger text-red-500">{{ $errors->first('image2') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="col-span-full">
                                <label for="cover-photo" class="block text-sm font-medium leading-6 text-gray-900">Mobile
                                    (Max: 5Mb)</label>
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
                                            <label for="form-item-upload4"
                                                class="relative cursor-pointer rounded-md bg-white font-semibold text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-600 focus-within:ring-offset-2 hover:text-indigo-500">
                                                <span>Upload a file</span>
                                                <input accept="image/*" id="form-item-upload4" name="image3" type="file"
                                                    class="sr-only form-item-upload">
                                            </label>
                                            <p class="pl-1">or drag and drop</p>
                                        </div>
                                        {{-- <p class="text-xs leading-5 text-gray-600">PNG, JPG, GIF up to 10MB</p> --}}
                                        <p class="form-item-upload-filename image3"></p>
                                        @error('image3')
                                            <div class="alert alert-danger text-red-500">{{ $errors->first('image3') }}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>


                            <div>
                                <label for="title"
                                    class="block text-sm font-medium leading-6 text-gray-900">Title</label>
                                <div>
                                    <input name="title" required value="{{ old('title') }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    @error('title')
                                        <div class="alert alert-danger text-red-500">{{ $errors->first('title') }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label for="frame" class="block text-sm font-medium leading-6 text-gray-900">Link</label>
                                <div>
                                    <input name="link" value="{{ old('link') }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    @error('link')
                                        <div class="alert alert-danger text-red-500">{{ $errors->first('link') }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium leading-6 text-gray-900">Color</label>
                                <div class="inline-flex space-x-5">
                                    <div>
                                    <input name="color1" value="{{ old('color1') }}" placeholder="black"
                                        class="block rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    @error('color1')
                                        <div class="alert alert-danger text-red-500">{{ $errors->first('color1') }}
                                        </div>
                                    @enderror
                                </div>
                                <div>
                                    <input name="color2" value="{{ old('color2') }}" placeholder="white"
                                        class="block rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" />
                                    @error('color2')
                                        <div class="alert alert-danger text-red-500">{{ $errors->first('color2') }}
                                        </div>
                                    @enderror
                                </div>
                                </div>

                            </div>
                            <div>
                                <label for="ordering"
                                    class="block text-sm font-medium leading-6 text-gray-900">Ordering</label>
                                <div>
                                    <input name="ordering" type="number" value="{{ old('ordering') }}"
                                        class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" min="1" />
                                    @error('ordering')
                                        <div class="alert alert-danger text-red-500">{{ $errors->first('ordering') }}</div>
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
