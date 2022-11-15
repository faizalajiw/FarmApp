<div>
    <x-card >
        <x-slot:header>
            <h4>Lembaga | Institusi</h4>
        </x-slot:header>
        <x-slot:body>
            <div id="chart-lembaga2"></div>
        </x-slot:body>
    </x-card>
</div>
@push('script')
    <script>
        // Chart Jumlah Lembaga
        let optionsJumlahLembaga2 = {
            series: @json($series),
            labels: @json($labels),
            colors: ['#435ebe', '#437aca', '#438aba', '#485aae', '#FAEBD7'],
            chart: {
                type: 'donut',
                width: '100%',
                height: '350px'
            },
            legend: {
                position: 'bottom'
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: '30%'
                    }
                }
            }
        }

        new ApexCharts(document.getElementById('chart-lembaga2'), optionsJumlahLembaga2).render();

        // chartKelompok;

    </script>
@endpush
