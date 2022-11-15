<div>
    <x-card>
        <x-slot:body class="px-4 py-4-5">
            <div class="row">
                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start">
                    <x-utilities.icon icon="{{$icon}}"/>
                </div>
                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                    <h6 class="text-muted font-semibold">{{$title}}</h6>
                    <h6 class="font-extrabold mb-0">{{$total}}</h6>
                </div>
            </div>
        </x-slot:body>
    </x-card>
</div>
