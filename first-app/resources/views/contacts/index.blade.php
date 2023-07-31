<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('お問合わせ一覧') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <a href="{{route('contacts.create')}}" class="hover:text-blue-400" >新規登録</a>
         

                    <div class="pt-4">

                        <form action="{{route('contacts.index')}}">
                        <input type="text" name="search" placeholder="検索" class ='rounded border focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-ou'>
                        <button class=" text-white bg-pink-200  border-0 py-2 px-8 focus:outline-none hover:bg-pink-300 rounded text-lg">検索する</button>
                        </form>
                    </div>
                </div>
                <div class="lg:w-2/3 w-full mx-auto overflow-auto px-5">
                    <table class="table-auto w-full text-left whitespace-no-wrap">
                      <thead>
                        <tr>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100 rounded-tl rounded-bl">id</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">氏名</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">件名</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">登録日</th>
                          <th class="px-4 py-3 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">詳細</th>
                       
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($contacts as $contact)

                        <tr>
                          <td class="px-4 py-3">{{$contact->id}}</td>
                          <td class="px-4 py-3">{{$contact->name}}</td>
                          <td class="px-4 py-3">{{$contact->title}}</td>
                          <td class="px-4 py-3 text-gray-900">{{$contact->created_at}}</td>
                          <td class="px-4 py-3 text-gray-900"><a class="text-blue-400" href="{{route('contacts.show',['id'=>$contact->id])}}">詳細画面</a></td>
                        </tr>

                        @endforeach
                      </tbody>
                    </table>
                  </div>
            </div>
            {{$contacts->links()}}
        </div>
    </div>
</x-app-layout>
