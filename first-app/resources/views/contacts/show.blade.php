<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('詳細画面') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <section class="text-gray-600 body-font relative">

                      
                      {{$contact->id}}
                      {{$contact->name}}
                          <div class="lg:w-1/2 md:w-2/3 mx-auto">
                            <div class="flex flex-wrap -m-2">
                              <div class="p-2 w-1/2">
                                <div class="relative">
                                  <label for="name" class="leading-7 text-sm text-gray-600">氏名</label>
                                  <div class="w-full rounded border focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$contact->id}}</div>
                                </div>
                              </div>
                              <div class="p-2 w-1/2">
                                <div class="relative">
                                  <label for="title" class="leading-7 text-sm text-gray-600">件名</label>
                                  <div class="w-full rounded border focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$contact->name}}</div>
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                                  <div class="w-full rounded border focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$contact->email}}</div>
                                </div>
                              </div>

                              @if($contact->url)
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="url" class="leading-7 text-sm text-gray-600">ホームページ</label>
                                  <div class="w-full rounded border focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$contact->url}}</div>
                                </div>
                              </div>
                              @endif

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="gender" class="leading-7 text-sm text-gray-600">性別</label>
                                  <br>
                                  <div class="w-full rounded border focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$gender}}</div> 
                                </div>
                              </div>

                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label  class="leading-7 text-sm text-gray-600">年齢</label>
                                  <div class="w-full rounded border focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$age}}</div>
                                </div>
                              </div>
                           
                              <div class="p-2 w-full">
                                <div class="relative">
                                  <label for="contact" class="leading-7 text-sm text-gray-600">お問い合わせ内容</label>
                                  <div class="w-full rounded border focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">{{$contact->contact}}</div> 
                                </div>
                              </div>

                              <form method="GET" action="{{route('contacts.edit',['id'=> $contact->id])}}" >

                              <div class="p-2 w-full">
                                <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">編集する</button>
                              </div>

                            </form>

                            <form id='delete_{{$contact->id}}' method="POST" action="{{route('contacts.destroy',['id'=> $contact->id])}}" >
                              @csrf
                              <div class="p-2 w-full">
                                <a data-id='{{$contact->id}}' onclick="deletePost(this)" class="flex mx-auto text-white bg-pink-400  border-0 py-2 px-8 focus:outline-none hover:bg-pink-500 rounded text-lg">削除する</a>
                              </div>

                            </form>
                            
                              <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                                <a class="text-indigo-500">example@email.com</a>
                                <p class="leading-normal my-5">49 Smith St.
                                  <br>Saint Cloud, MN 56301
                                </p>
                                <span class="inline-flex">
                                  <a class="text-gray-500">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                      <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                    </svg>
                                  </a>
                                  <a class="ml-4 text-gray-500">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                      <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"></path>
                                    </svg>
                                  </a>
                                  <a class="ml-4 text-gray-500">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                      <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                      <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                    </svg>
                                  </a>
                                  <a class="ml-4 text-gray-500">
                                    <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                      <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                                    </svg>
                                  </a>
                                </span>
                              </div>
                            </div>
                          </div>
                        </div>
                    
                      </section>
                </div>
            </div>
        </div>
    </div>

    <script>
      function deletePost(e){
        if(confirm('本当に削除しますか？')){
          document.getElementById('delete_'+e.dataset.id).submit()
        }
      }
    </script>
</x-app-layout>
