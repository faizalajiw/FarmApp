<div>
    <div class="page-heading">
        <h3>Statistik</h3>
    </div>


    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <livewire:dashboard.count-lembaga/>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <livewire:dashboard.count-kelompok/>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <livewire:dashboard.count-peternak/>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <livewire:dashboard.count-kandang/>
                    </div>
                </div>
                <div class="row">
                    <x-card>
                        <x-slot:body>
                            Hello World!
                        </x-slot:body>
                    </x-card>
                </div>
            </div>

            <div class="col-12 col-lg-3">

                <x-card>
                    <x-slot:body class="py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ auth()->user()->avatar }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h6>me :</h6>
                                <h5 class="font-bold">{{ auth()->user()->name }}</h5>
                                <h6 class="text-muted mb-0">{{ auth()->user()->email }}</h6>
                            </div>
                        </div>
                    </x-slot:body>
                </x-card>
                <div>
                    @livewire('dashboard.chart-lembaga')
                </div>

            </div>
        </section>
    </div>
</div>
