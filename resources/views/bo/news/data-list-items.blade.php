<table id="filter" class="table table-hover-pointer table-head-fixed">
    <thead>
        <tr>
            <th style="width: 5%;"></th>
            <th style="width: 10%;">Tanggal</th>
            <th style="width: 35%;">Judul</th>
            <th style="width: 50%;">Deskripsi</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($viewModel->data as $item)
            <tr onclick="window.location.assign('{{ route('news.show', ['news' => $item->id]) }}');">
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
                <td>
                    <div class="truncate-multiline">{!! nl2br(e($item->description)) !!}</div>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
