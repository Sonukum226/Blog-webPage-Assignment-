<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Post') }}
        </h2>
    </x-slot>


    <div>
        <div>
            <div>
                <h1>Create Post</h1>
                <div>
                    <form method="POST">
                         @csrf
                         <div>
                             <div>
                                 <label
                                 for="title">Title</label>
                                </div>
                                <div>
                                    <input type="text" name="title">
                                </div>
                            </div>
                        <div>
                           <div>
                                <label
                                for="body">Body</label>
                            </div>
                            <div  >
                                 <textarea   name="body" style="width:255px;">
                                </textarea>
                             </div>
                            </div>
                            <div>
                                <div></div>
                                <div>
                                     <input type="submit"value="Post">
                                </div>
                        </div>
                    </form>
                    @if(session()->has('status'))
                    {{session('status')}}
                    @endif
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
