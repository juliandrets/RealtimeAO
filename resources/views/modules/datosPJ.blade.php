<section id="headerPJ">
    <section id="datosPJ">
        <div id="level">
            {{Auth::user()->level}}
        </div>
        <section id="data">
            <h2 class="nombrePJ">
                <img src="/img/heads/{{ Auth::user()->getRace->getHead->image }}">
                {{Auth::user()->name}}
            </h2>
            <h3 class="dataPJ">
                Clase: {{ Auth::user()->getClass->name }} - Raza: {{ Auth::user()->getRace->name }}
            </h3>
            <div class="levelbar">0%</div>
        </section>
        <section id="stats">
            <ul>
                <li>
                    <img src="/img/ui/modules/header-pj/health.png" alt="">
                    <div class="healthBar">
                        <span>{{ Auth::user()->health }} / {{ Auth::user()->max_health }}</span>
                        <?php $getHealth = (Auth::user()->health / Auth::user()->max_health) * 100; ?>
                        <div class="bar health" style="width: {{$getHealth}}%"></div>
                    </div>
                </li>
                <li>
                    <img src="/img/ui/modules/header-pj/energy.png" alt="">
                    <div class="energyBar">
                        <span>{{ Auth::user()->stamina }} / {{ Auth::user()->max_stamina }}</span>
                        <?php $getStamina = (Auth::user()->stamina / Auth::user()->max_stamina) * 100; ?>
                        <div class="bar stamina" style="width: {{$getStamina}}%"></div>
                    </div>
                </li>
                <li>
                    <img src="/img/ui/modules/header-pj/ore.png" alt="">
                    <p>{{ Auth::user()->gold }}</p>
                </li>
            </ul>
        </section>
    </section>
</section>