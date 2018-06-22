   @if($items_have)
    <div class="row">
        @foreach ($items_have as $key => $item_have)
            <div class="item">
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="panel panel-default">
                        <div class="panel-heading text-center">
                            <img src="{{ $item_have->image_url }}" alt="" class="">
                        </div>
                        <div class="panel-body">
                            @if ($item_have->id)
                                <p class="item-title"><a href="{{ route('items.show', $item_have->id) }}">{{ $item_have->name }}</a></p>
                            @else
                                <p class="item-title">{{ $item_have->name }}</p>
                            @endif
                            <div class="buttons text-center">
                                @if (Auth::check())
                                    @include('items.want_button', ['item' => $item_have])
                                    @include('items.have_button', ['item' => $item_have])
                                @endif
                            </div>
                        </div>
                        @if (isset($item_have->count))
                            <div class="panel-footer">
                                <p class="text-center">{{ $key+1 }}位: {{ $item_have->count }} Haves</p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    @endif