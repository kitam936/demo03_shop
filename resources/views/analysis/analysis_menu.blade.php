<x-app-layout>
    <x-slot name="header">
        {{--  <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Menu
        </h2><br>   --}}
        @if($logIn_user->shop_id == 1104 || (($logIn_user->shop_id > 5000) && ($logIn_user->shop_id < 7000)))
        <h3 class="ml-8 font-semibold text-xl text-indigo-800 leading-tight">
            {{ $my_shop->shop_name }}店　店頭状況
        </h3>
        <div class="md:flex ">
        <div class="flex ml-8 p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('my_budget_progress') }}'" >予算進捗</button>
                       <button type="button" class="ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('my_sales_transition') }}'"  >自店売上推移</button>
        </div>

        <div class="ml-8 md:ml-0 md:flex p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('my_sales_product') }}'" >自店商品別売上順</button>
            <button type="button" class="ml-1 md:ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('my_stocks_product') }}'">自店在庫</button>
        </div>
        </div>

        <br>
        <h3 class="ml-8 font-semibold text-xl text-indigo-800 leading-tight">
            全店　店頭状況
        </h3>
        <div class="md:flex ">
        <div class="flex ml-8 p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('sales_total') }}'">社店累計売上順</button>
            <button type="button" class="ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded "  onclick="location.href='{{ route('sales_transition') }}'" >社店売上推移</button>
        </div>

        <div class="ml-8 md:ml-0 md:flex p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('sales_product') }}'" >商品別売上順</button>
            <button type="button" class="ml-1 md:ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('stocks_product') }}'" >在庫</button>
        </div>
        </div>

        <br>

        <h3 class="ml-8 font-semibold text-xl text-indigo-800 leading-tight">
            店舗Report
        </h3>
        <div class="md:flex ">
        <div class="flex ml-8 p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('report_list') }}'" >店舗Report</button>
            {{-- <button type="button" class="ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('shop_index') }}'" >店舗リスト</button> --}}
        </div>

        <div class="ml-8 md:ml-0 md:flex p-1 text-gray-900  ">
            {{-- <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('product_index') }}'" >商品リスト</button> --}}
            {{-- <button type="button" class="ml-1 md:ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('memberlist') }}'" >STAFFリスト</button> --}}
        </div>
        </div>

         <br>

        <h3 class="ml-8 font-semibold text-xl text-indigo-800 leading-tight">
            業務Menu
        </h3>

        <div class="md:flex ">
            <div class="flex ml-8 p-1 text-gray-900  ">
                <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('order_index') }}'" >発注</button>
                <button type="button" class="ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('move_result_index') }}'" >商品移動</button>
            </div>

            <div class="ml-8 md:ml-0 md:flex p-1 text-gray-900  ">
                <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('pos_result_index') }}'" >売上</button>
                <button type="button" class="ml-1 md:ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('inventory_result_index') }}'" >棚卸</button>
            </div>
        </div>

        <br>

        <h3 class="ml-8 font-semibold text-xl text-indigo-800 leading-tight">
            DataMenu
        </h3>
        <div class="md:flex ">
        <div class="flex ml-8 p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('product_index') }}'" >商品リスト</button>
            <button type="button" class="ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('shop_index') }}'" >店舗リスト</button>
        </div>

        <div class="ml-8 md:ml-0 md:flex p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('memberlist') }}'" >STAFFリスト</button>
            <button type="button" class="ml-1 md:ml-2 h-8 w-32 text-center text-sm text-white bg-green-500 border-0 py-1 px-2 focus:outline-none hover:bg-green-700 rounded " onclick="location.href='{{ route('manual_download') }}'" >マニュアルDL</button>
        </div>
        </div>   

        <div class="ml-8 mt-1 md:ml-8 md:mt-1 p-1">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-32 h-8 text-sm bg-gray-500 text-white ml-0 md:ml-0 hover:bg-gray-600 rounded">ログアウト</button>
            </form>
        </div>

        @endif

        @if($logIn_user->shop_id == 101)
        <h3 class="ml-8 font-semibold text-xl text-indigo-800 leading-tight">
            店頭状況Menu
        </h3>

        <div class="md:flex ">
        <div class="flex ml-8 p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('budget_progress') }}'" >予算進捗</button>
            <button type="button" class="ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('report_list') }}'" >店舗Report</button>
        </div>

        {{--  <div class="ml-8 md:ml-0 md:flex p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('sales_product') }}'" >商品別売上順</button>
            <button type="button" class="ml-1 md:ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('stocks_product') }}'" >在庫</button>
        </div>  --}}
        </div>

        <div class="md:flex ">
        <div class="flex ml-8 p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('sales_transition') }}'" >社店売上推移</button>
            <button type="button" class="ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('sales_total') }}'" >社店累計売上順</button>
        </div>

        <div class="ml-8 md:ml-0 md:flex p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('sales_product') }}'" >商品別売上順</button>
            <button type="button" class="ml-1 md:ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('stocks_product') }}'" >在庫</button>
        </div>
        </div>

        <br>

        <h3 class="ml-8 font-semibold text-xl text-indigo-800 leading-tight">
            DataMenu
        </h3>
        <div class="md:flex ">
        <div class="flex ml-8 p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('product_index') }}'" >商品リスト</button>
            <button type="button" class="ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('shop_index') }}'" >店舗リスト</button>
        </div>

        <div class="ml-8 md:ml-0 md:flex p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('partner_index') }}'" >卸先リスト</button>
            <button type="button" class="ml-1 md:ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('memberlist') }}'" >STAFFリスト</button>
        </div>
        </div>

        <br>

        <h3 class="ml-8 font-semibold text-xl text-indigo-800 leading-tight">
            業務Menu
        </h3>

        @if($dl_new_order)
        <div class="ml-12 text-ml text-red-500">
            ※　発注の新着Dataがあります !  
        </div>        
        @endif
        @if($dl_new_d)
        <div class="ml-12 text-ml text-red-500">
            ※　商品移動の新着Dataがあります !  
        </div>        
        @endif
        @if($dl_new_pos)
        <div class="ml-12 text-ml text-red-500">
            ※　売上の新着Dataがあります !
        </div>
        @endif
        @if($dl_new_inv)
        <div class="ml-12 text-ml text-red-500">
            ※　棚卸の新着Dataがあります !
        </div>
        @endif

        <div class="md:flex ">
        <div class="flex ml-8 p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('order_index') }}'" >発注</button>
            <button type="button" class="ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('move_result_index') }}'" >商品移動</button>
        </div>

        <div class="ml-8 md:ml-0 md:flex p-1 text-gray-900  ">
            <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('pos_result_index') }}'" >売上</button>
            <button type="button" class="ml-1 md:ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('inventory_result_index') }}'" >棚卸</button>
        </div>
        </div>

        <div class="md:flex ">
            <div class="flex ml-8 p-1 text-gray-900  ">
                <button type="button" class="w-32 h-8 text-center text-sm text-white bg-green-500 border-0 py-1 px-2 focus:outline-none hover:bg-green-700 rounded " onclick="location.href='{{ route('manual_download') }}'" >マニュアルDL</button>
                <div class="ml-2 mt-0 md:ml-2 md:mt-0 ">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-32 h-8 text-sm bg-gray-500 text-white ml-0 md:ml-0 hover:bg-gray-600 rounded">ログアウト</button>
                    </form>
                </div>
            </div>

            <div class="ml-8 md:ml-0 md:flex p-1 text-gray-900  ">
                {{-- <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('inventory_result_index') }}'" >棚卸</button> --}}
                {{-- <button type="button" class="ml-1 md:ml-2 h-8 w-32 text-center text-sm text-white bg-green-500 border-0 py-1 px-2 focus:outline-none hover:bg-green-700 rounded " onclick="location.href='{{ route('manual_download') }}'" >マニュアルDL</button> --}}
            </div>
            </div>


        @endif

        @if($logIn_user->shop_id == 4102)
        <h3 class="ml-8 mt-2 mb-4 font-semibold text-xl text-indigo-800 leading-tight">
            {{$logIn_user->shop_name}}　様用　Menu 
        </h3>
            <div class="md:flex ">
            <div class="ml-8 md:ml-4 md:flex p-1 text-gray-900  ">
                <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('product_index') }}'" >商品リスト</button>
                <button type="button" class="ml-2 md:ml-4 w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('order_index') }}'" >発注</button>
            </div>
            <div class="ml-8 md:ml-2 md:flex p-1 text-gray-900  ">
                <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('move_result_index') }}'" >商品移動</button>
                <button type="button" class="ml-2 md:ml-4 w-32 h-8 text-center text-sm text-white bg-green-500 border-0 py-1 px-2 focus:outline-none hover:bg-green-700 rounded " onclick="location.href='{{ route('manual_download') }}'" >マニュアルDL</button>
            </div>
            <div class="ml-8  md:ml-2  md:mt-1 p-1">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="w-32 h-8 text-sm bg-gray-500 text-white ml-0 md:ml-0 hover:bg-gray-600 rounded">ログアウト</button>
                    </form>
                </div>
            </div>

        @endif

        @if(($logIn_user->shop_id >4000 && $logIn_user->shop_id <5000) && $logIn_user->shop_id != 4102)
            <h3 class="ml-8 mt-12 mb-8 font-semibold text-xl text-indigo-800 leading-tight">
                {{$logIn_user->shop_name}}　様用　Menu 
            </h3>
            <div class="md:flex ">
            <div class="ml-8 md:ml-4 md:flex p-1 text-gray-900  ">
                <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('product_index') }}'" >商品リスト</button>
                <button type="button" class="ml-2 md:ml-4 w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('order_index') }}'" >発注</button>
            </div>
            <div class="flex">
            <div class="ml-8 md:ml-2 md:flex p-1 text-gray-900  ">
                <button type="button" class="w-32 h-8 text-center text-sm text-white bg-green-500 border-0 py-1 px-2 focus:outline-none hover:bg-green-700 rounded " onclick="location.href='{{ route('manual_download') }}'" >マニュアルDL</button>           
            </div>
            <div class="ml-2 mt-1 md:ml-40 md:mt-1">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-32 h-8 text-sm bg-gray-500 text-white ml-0 md:ml-5 hover:bg-gray-600 rounded">ログアウト</button>
            </form>
            </div>
            </div>
            
            </div>
        @endif

    </x-slot>

    @if($logIn_user->shop_id == 106)

    <h3 class="ml-8 mt-12 mb-8 font-semibold text-xl text-indigo-800 leading-tight">
        {{$logIn_user->shop_name}}　様用　Menu 
    </h3>

    @if($dl_new_k)
    <div class="ml-12 text-ml text-red-500">
        ※　商品移動の新着Dataがあります !  
    </div>
    <br> 
    @endif

    <div class="md:flex ">
    <div class="flex ml-12 p-1 text-gray-900  ">
        <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('move_result_index') }}'" >商品移動</button>
        <button type="button" class="ml-2 md:ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('memberlist') }}'" >STAFFリスト</button>
    </div>

    <div class="ml-12 md:ml-0 md:flex p-1 text-gray-900  ">
        <button type="button" class="w-32 h-8 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('shop_index') }}'" >店舗リスト</button>
        <button type="button" class="ml-1 md:ml-2 h-8 w-32 text-center text-sm text-white bg-indigo-500 border-0 py-1 px-2 focus:outline-none hover:bg-indigo-700 rounded " onclick="location.href='{{ route('partner_index') }}'" >卸先リスト</button>
    </div>
    <div class="ml-10 mt-1 md:ml-0 md:mt-1">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="w-32 h-8 text-sm bg-gray-500 text-white ml-3 md:ml-2 hover:bg-gray-600 rounded">ログアウト</button>
        </form>
    </div>
    </div>
    
    @endif



</x-app-layout>
