<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-2">
    @if(session()->has('status'))
                    {{session('status')}}
                    @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-gray-800">
                    <div class="flex flex-col">
                        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-400">
                                        <thead class="bg-gray-700">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-white text-left text-xs front-medium text-gray-100 uppercase tracking-wider">
                                                    Name
                                                </th>
                                                <th scope="col" class="px-6 py-3 text-white text-left text-xs front-medium text-gray-100 uppercase tracking-wider">
                                                    Title
                                                </th>

                                                <th scope="col" class="px-6 py-3 text-white text-left text-xs front-medium text-gray-100 uppercase tracking-wider">
                                                    Body
                                                </th>

                                                <th scope="col" class="px-6 py- text-white text-left text-xs front-medium text-gray-100 uppercase tracking-wider">
                                                    Actions
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-gray-600 text white divide-y divide-gray-500">
                                            @foreach($posts as $post)
                                            <tr>
                                                <td class="px-6 py-4 whhitespace-nowrap text-white">
                                                    {{$post->user->name}}
                                                </td>
                                                <td class="px-6 py-4 whhitespace-nowrap text-white">
                                                    {{$post->title}}
                                                </td>

                                                <td class="px-6 py-4 whhitespace-nowrap text-white">
                                                    {{$post->body}}
                                                </td>

                                                <td class="px-6 py-4 whitespace-nowrap text-sm front-medium">
                                                    <a href="{{url('/post/edit',$post->id)}}" class="bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white text-sm py-1 px-2 rounded">
                                                        Edit
                                                    </a>

                                                    <a href="{{url('/post/delete',$post->id)}}" class="bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none text-white text-sm py-1 px-2 rounded">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
