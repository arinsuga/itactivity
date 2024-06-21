<table id="filter" class="table table-hover-pointer table-head-fixed">
    <thead>
        <tr>
            <th style="width: 10%;"></th>
            <th style="width: 20%;">Tanggal</th>
            <th style="width: 70%;">Judul</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($viewModel->data as $item)
            <tr onclick="window.location.assign('{{ route('event.show', ['event' => $item->id]) }}');">
                <td>
                    <div class="image-table-cell">
                        <img src="{{ Arins\Facades\Filex::image($item->image) }}" alt="{{ $item->name }}">
                    </div>
                </td>
                <td>
                    <div class="text-center">{{ \Arins\Facades\Formater::date($item->date) }}</div>
                    <div class="text-center">{{ \Arins\Facades\Formater::time($item->date) }}</div>
                </td>
                <td>{{ $item->name }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
