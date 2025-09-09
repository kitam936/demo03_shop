
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold mb-2 text-xl text-gray-800 leading-tight">
            卸先一覧
        </h2>
        <div class="flex">
            <div class="pl-2 mt-2 ml-4 ">
                <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('analysis_index') }}'" >Menu</button>
             </div>           

           
        </div>



           </x-slot>

   <div class="py-12 border">
        <div class=" sm:px-4 lg:px-4 border ">
            <table class="md:w-2/3 bg-white table-auto w-full text-center whitespace-no-wrap">
                <thead>
                    <tr>
                        <th class="w-1/12 md:1/10 md:px-4 py-1 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">code</th>
                        {{-- <th class="w-3/12 md:2/12 md:px-4 py-1 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">社名</th> --}}
                        <th class="w-2/12 md:2/10 md:px-4 py-1 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">社名</th>
                        <th class="w-4/12 md:3/10 md:px-4 py-1 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">info</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($shops as $shop)
                    <tr>
                        <td class="w-3/12 md:1/12 text-sm md:px-4 py-1 text-center"> {{ $shop->id }} </td>
                        {{-- <td class="w-3/12 md:2/12 text-sm md:px-4 py-1 text-left">{{ Str::limit($shop->co_name,10) }}</td> --}}
                        <td class="w-6/12 md:2/12 text-sm md:px-4 py-1 text-left">{{ Str::limit($shop->shop_name,20) }}</td>
                        <td class="w-3/12 md:5/12 text-xs md:px-4 py-1 text-left">{{ Str::limit($shop->shop_info,28) }}</td>

                    </tr>
                    @endforeach

                </tbody>
            </table>        
        </div>
    </div>

     <div class="py-12 border">
        <div class="ml-24 mb-2 text-ml text-gray-800 leading-tight">
            アカウント一覧
        </div>
        <div class=" sm:px-4 lg:px-4 border ">
            <table class="md:w-2/3 bg-white table-auto w-full text-center whitespace-no-wrap">
                <thead>
                    <tr>
                        <th class="w-1/12 md:1/10 md:px-4 py-1 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Id</th>
                        <th class="w-2/12 md:2/10 md:px-4 py-1 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">所属</th>
                        <th class="w-4/12 md:3/10 md:px-4 py-1 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Name</th>
                        {{-- <th class="w-3/12 md:4/10 md:px-4 py-1 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">Info</th> --}}
                        {{-- <th class="w-3/12 md:2/12 md:px-4 py-1 title-font tracking-wider font-medium text-gray-900 text-sm bg-gray-100">メール</th> --}}

                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                    <tr>
                        <td class="w-3/12 md:1/12 text-sm md:px-4 py-1 text-center">{{ $user->id }} </td>
                        <td class="w-6/12 md:2/12 text-sm md:px-4 py-1 text-left"> {{ $user->shop_name }} </td>
                        <td class="w-3/14 md:2/12 text-sm md:px-4 py-1 text-center text-indigo-500"><a href="{{ route('member_detail',['user'=>$user->id]) }}" >{{ Str::limit($user->name,30) }}</a></td>
                        {{-- <td class="w-4/14 md:3/12 text-xs md:px-4 py-1 text-center">{{ Str::limit($user->user_info,28) }}</td> --}}
                        {{-- @if($user->mailService==1)
                        <td class="w-2/14 md:1/12 text-sm md:px-4 py-1 text-center"> ○ </td>
                        @endif
                        @if($user->mailService==0)
                        <td class="w-2/14 md:1/12 text-sm md:px-4 py-1 text-center"><span class="text-red-600 text-lg"> ー </span></td>
                        @endif --}}
                    </tr>
                    @endforeach

                </tbody>

            </table>
            {{  $users->links()}}
        </div>
    </div>





    

</x-app-layout>
