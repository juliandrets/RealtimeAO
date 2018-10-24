@extends('layouts.default')

@section('content')

    @include('layouts.header')

    <section id="generalContent">
        @include('modules.datosPJ')

        <section id="pjContainer">
            <section id="vistaPJ">
                @include('modules.viewPJ')
            </section>
            <section id="inventario">
                <ul class="inv">
                    @foreach(Auth::user()->getInventory as $item)
                        <li>
                            @include('modules.item-inventory')
                        </li>
                    @endforeach
                </ul>
            </section>
        </section>
    </section>

@endsection