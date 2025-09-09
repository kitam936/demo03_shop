<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl mb-4 text-gray-800 dark:text-gray-200 leading-tight">
        <div>
            発注可能在庫数変更
        </div>
        </h2>
        <div class="md:flex ml-8 ">
        <div class="ml-2 mb-2 md:mb-0">
            <button type="button" onclick="location.href='{{ route('order_index') }}'" class="w-32 h-8 text-center text-sm text-white bg-indigo-400 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-600 rounded ">発注リスト</button>
        </div>
        </div>



            <div class="ml-60 px-2 py-2 text-gray-900 dark:text-gray-100">

                <form method="POST" action="{{ route('order_point_update',['id'=>1]) }}">
                    @csrf
                    <div class="flex">

                    <div class="mt-1 flex">
                    <div class="mt-1 md:mt-8">
                    <select name="pcs" class="rounded h-10">
                        <option value="{{ $order_point->order_stop_pcs }}">{{ $order_point->order_stop_pcs ?? 0}}</option>
                        @for ($i = 1; $i <= 20; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    </div>
                    <div class="ml-8 mt-1 md:mt-8 h-10">
                    <button type="submit" class="bg-green-500 text-white rounded text-sm ml-0 h-10 w-16">更新</button>
                    </div>
                    </div>
                </div>
                </form>
            </div>



    </x-slot>


</x-app-layout>
