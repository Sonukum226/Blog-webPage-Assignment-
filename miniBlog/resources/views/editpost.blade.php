<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Post') }}
        </h2>
    </x-slot>


    <div>
        <div>
            <div>
                <h1>Edit Post</h1>
                <div>
                    <form method="POST">
                         @csrf
                         @method('PUT')
                         <div>
                             <div>
                                 <label
                                 for="title">Title</label>
                                </div>
                                <div>
                                    <input type="text" name="title" value="{{$post->title}}">
                                </div>
                            </div>
                        <div>
                           <div>
                                <label
                                for="body">Body</label>
                            </div>
                            <div  >
                                 <textarea   name="body" style="width:255px;">
                                 {{$post->body}}
                                </textarea>
                             </div>
                            </div>
                            <div>
                                <div></div>
                                <div>
                                     <input type="submit"value="Update">
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
