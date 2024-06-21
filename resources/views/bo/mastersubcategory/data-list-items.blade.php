<table id="filter" style="width: 100%;" class="table table-hover-pointer table-head-fixed text-nowrap">
    <thead>
        <tr>
            <th style="width: 5%;"></th>
            <th style="width: 20%">Category</th>
            <th style="width: 20%;">Sub Category</th>
            <th style="width: 55%;">Deskripsi</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($viewModel->data as $item)
            <tr onclick="window.location.assign('{{ route('mastersubcategory.show', ['mastersubcategory' => $item->id]) }}');">
                <td>
                    <div class="image-table-cell">
                        <img src="{{ Arins\Facades\Filex::image($item->image) }}" alt="{{ $item->name }}">
                    </div>
                </td>
                <td>{{ $item->tasktype->name }}</td>
                <td>
                    <div>{{ $item->name }}</div>
                </td>
                <td>
                    <div class="truncate-multiline">{!! nl2br(e($item->description)) !!}</div>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
