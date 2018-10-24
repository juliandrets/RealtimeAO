<section class="viewPJ">

    <section id="pj">
        <div class="head">
            <img src="/img/heads/{{ Auth::user()->getRace->getHead->image }}" alt="">
            @if(Auth::user()->helmet_id)
                <img src="/img/items/helmets/{{ Auth::user()->getHelmet->pj_view }}" class="helmethover">
            @endif
        </div>

        <div class="body">
            @if(Auth::user()->armor_id)
                <img src="/img/items/armors/{{ Auth::user()->getArmor->pj_view }}">
            @else
                <img src="/img/bodies/{{ Auth::user()->getRace->body }}" alt="">
            @endif
            @if(Auth::user()->weapon_id)
                <img src="/img/items/weapons/{{ Auth::user()->getWeapon->pj_view }}" class="weapon">
            @endif
            @if(Auth::user()->shield_id)
                <img src="/img/items/shields/{{ Auth::user()->getShield->pj_view }}" class="shield">
            @endif
        </div>

        <section class="name">
            <p>{{ Auth::user()->name }}</p>
            <small> < ATR > </small>
        </section>

        <section class="stats">
            <ul>
                <li>
                    <img src="/img/ui/modules/item-inventary/attack.png" alt=""> <p>{{ Auth::user()->getWeapon->attack }}</p>
                </li>
                <li>
                    <img src="/img/ui/modules/item-inventary/defense.png" alt=""> <p>{{ Auth::user()->getArmor->defense + Auth::user()->getShield->defense + Auth::user()->getHelmet->defense }}</p>
                </li>
            </ul>
        </section>
    </section>

    <section id="items-view-pj">
        @if(Auth::user()->weapon_id)
        <div class="item weapon tooltip" data-tooltip-content="#weapon-tooltip">
            <img src="/img/{{ Auth::user()->getWeapon->image }}">
        </div>
        @endif
        @if(Auth::user()->armor_id)
        <div class="item armor tooltip"  data-tooltip-content="#armor-tooltip">
            <img src="/img/{{ Auth::user()->getArmor->image }}">
        </div>
        @endif
        @if(Auth::user()->shield_id)
        <div class="item shield tooltip"  data-tooltip-content="#shield-tooltip">
            <img src="/img/{{ Auth::user()->getShield->image }}">
        </div>
        @endif
        @if(Auth::user()->helmet_id)
        <div class="item helmet tooltip"  data-tooltip-content="#helmet-tooltip">
            <img src="/img/{{ Auth::user()->getHelmet->image }}">
        </div>
        @endif

        <!-- Tooltips -->
        @if(Auth::user()->armor_id)
            <div id="armor-tooltip" class="tooltip-item">
                <strong>{{ Auth::user()->getArmor->name }}</strong>
                <hr>
                <ul class="data-item">
                    <li><img src="/img/ui/modules/item-inventary/defense.png" alt=""> <p>Defensa: {{ Auth::user()->getArmor->defense }}</p></li>
                </ul>
            </div>
        @endif
        @if(Auth::user()->helmet_id)
            <div id="helmet-tooltip" class="tooltip-item">
                <strong>{{ Auth::user()->getHelmet->name }}</strong>
                <hr>
                <ul class="data-item">
                    <li><img src="/img/ui/modules/item-inventary/defense.png" alt=""> <p>Defensa: {{ Auth::user()->getHelmet->defense }}</p></li>
                </ul>
            </div>
        @endif
        @if(Auth::user()->weapon_id)
        <div id="weapon-tooltip" class="tooltip-item">
            <strong>{{ Auth::user()->getWeapon->name }}</strong>
            <hr>
            <ul class="data-item">
                <li><img src="/img/ui/modules/item-inventary/attack.png" alt=""> <p>Daño: {{ Auth::user()->getWeapon->attack }}</p></li>
            </ul>
        </div>
        @endif
        @if(Auth::user()->shield_id)
        <div id="shield-tooltip" class="tooltip-item">
            <strong>{{ Auth::user()->getShield->name }}</strong>
            <hr>
            <ul class="data-item">
                <li><img src="/img/ui/modules/item-inventary/defense.png" alt=""> <p>Defensa: {{ Auth::user()->getShield->defense }}</p></li>
            </ul>
        </div>
        @endif


    </section>

</section>
