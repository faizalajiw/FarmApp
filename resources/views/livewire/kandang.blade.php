<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <x-co-tabel-kandang />
    <livewire:kandang-table></livewire:kandang-table>
    <table>
        <tbody>
        @foreach($cage as $item)
        <td>
            <tr></tr>
        </td>
        @endforeach
        </tbody>
    </table>
</div>
