<div class="page-heading">
    <h3>Statistik</h3>
</div>

<div class="page-content">
    <section class="row">
        <div class="col-12 col-lg-9">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <x-cocards>
                        @slot('icon')
                        <i class="iconly-boldHome"></i>
                        @endslot
                        @slot('header')
                        Lembaga
                        @endslot
                        @slot('total')
                        {{0}}
                        @endslot
                    </x-cocards>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <x-cocards>
                        @slot('icon')
                        <i class="iconly-boldUser1"></i>
                        @endslot
                        @slot('header')
                        Kelompok
                        @endslot
                        @slot('total')
                        {{0}}
                        @endslot
                    </x-cocards>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <x-cocards>
                        @slot('icon')
                        <i class="iconly-boldProfile"></i>
                        @endslot
                        @slot('header')
                        Peternak
                        @endslot
                        @slot('total')
                        {{0}}
                        @endslot
                    </x-cocards>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <x-cocards>
                        @slot('icon')
                        <i class="iconly-boldShow"></i>
                        @endslot
                        @slot('header')
                        Kandang
                        @endslot
                        @slot('total')
                        {{0}}
                        @endslot
                    </x-cocards>
                </div>
            </div>


            <div class="row">
            <x-co-chart-ternak>
                @slot('header')
                    Jumlah Hewan Ternak
                @endslot
            </x-co-chart-ternak>

        </div>

</div>

<div class="col-12 col-lg-3">
        <x-co-user-cards>
            @slot('avatar')
                {{ auth()->user()->avatar }}
            @endslot
                @slot('name')
                    {{ auth()->user()->name }}
                @endslot
                    @slot('email')
                     {{ auth()->user()->email }}
                @endslot
        </x-co-user-cards>

        <x-co-chart-lembaga>
        </x-co-chart-lembaga>

</div>

<div class="col-12">
    <div class="row">
            <x-co-chart-ecos>
            </x-co-chart-ecos>
        </div>
</div>



</section>
</div>
