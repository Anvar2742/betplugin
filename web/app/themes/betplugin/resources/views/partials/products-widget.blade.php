<div class="bg-products-gradient shadow-lg p-1 rounded-lg">
    <!-- <pre>
    {{print_r($draws[0])}}
    </pre> -->
    @foreach ($draws as $draw)
    <div class="shadow-lg p-2 m-1 rounded-lg bg-product-gradient">
        <h3 class="font-bold text-xl mb-1 flex items-center">{{ $draw['displayName'] }} <span class="bg-gray-200 rounded-md px-1 ml-2  text-[.7rem]">{{$draw['countDownTime']}}</span></h3>
        <div class="flex items-center gap-4">
            <img src="{{asset('images/svs_product_'.$draw['productName'].'.svg')}}" alt="" class="w-16 h-16 rounded-lg">
            <ul class="product--info">
                <li class="flex gap-1">
                    <span>Spelstoppp: </span>
                    <span>{{ $draw['closeTimeFormatted']}}</span>
                </li>
                <li class="flex gap-1">
                    <span>Omsättning: </span>
                    <span>{{ $draw['turnover']}} kr</span>
                </li>
                @if (!empty($draw['jackpotItems']))
                <li class="flex gap-1">
                    <span>Jackpott: </span>
                    <span>{{ $draw['jackpotItems'][0]->amount}}</span>
                </li>
                @endif
            </ul>
        </div>
    </div>
    @endforeach
</div>