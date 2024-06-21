<table id="filter" style="width: 100%;" class="table table-hover-pointer table-head-fixed text-nowrap">
    <thead>
        <tr>
            <th style="width: 10%;"></th>
            <th style="width: 10%;">Tipe</th>
            <th style="width: 10%;">Sub Tipe</th>
            <th style="width: 20%;">Nama</th>
            <th style="width: 50%;">Deskripsi</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($viewModel->data as $item)
            <tr onclick="window.location.assign('{{ route('product.show', ['product' => $item->id]) }}');">
                <td>
                    <div class="image-table-cell">
                        <img src="{{ Arins\Facades\Filex::image($item->image) }}" alt="{{ $item->name }}">
                    </div>
                </td>
                <td>{{ $item->producttype != null ? $item->producttype->name : '' }}</td>
                <td>{{ $item->productsubtype != null ? $item->productsubtype->name : '' }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <div class="truncate-multiline">{!! nl2br(e($item->description)) !!}</div>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
