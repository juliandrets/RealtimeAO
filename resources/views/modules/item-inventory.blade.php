
<article>
    <figure @if($item->pivot->equipado) class="equip" @endif>
        <img src="/img/{{ $item->image }}" class="tooltip"  data-tooltip-content="#{{$item->id}}">
    </figure>
    <ul class="options">
        @if(! $item->pivot->equipado)
        <li>
            <form action="/character/equip-item" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="itemId" value="{{ $item->id }}">
                <button>Equipar</button>
            </form>
        </li>
        @else
        <li>
            <form action="/character/unequip-item" method="POST">
                {{ csrf_field() }}
                <input type="hidden" name="itemId" value="{{ $item->id }}">
                <button>Desequipar</button>
            </form>
        </li>
        @endif
    </ul>
</article>

<div id="{{$item->id}}" class="tooltip-item">
    <strong>{{ $item->name }}</strong>
    @if($item->pivot->equipado)
        <p style="color: green; font-size: 12px">
            Equipado <i class="fa fa-check" aria-hidden="true"></i>
        </p>
    @endif
    <hr>
    <ul class="data-item">
        @if($item->attack)
            <li><img src="/img/ui/modules/item-inventary/attack.png" alt=""> <p>Daño: {{ $item->attack }}</p></li>
        @endif
        @if($item->defense)
            <li><img src="/img/ui/modules/item-inventary/defense.png" alt=""> <p>Defensa: {{ $item->defense }}</p></li>
        @endif
    </ul>
</div>
