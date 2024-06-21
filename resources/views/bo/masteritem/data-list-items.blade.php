<table id="filter" style="width: 100%;" class="table table-hover-pointer table-head-fixed text-nowrap">
    <thead>
        <tr>
            <th style="width: 5%;"></th>
            <th style="width: 15%;">Activity</th>
            <th style="width: 15%;">Category</th>
            <th style="width: 15%;">Sub Category</th>
            <th style="width: 15%;">Item</th>
            <th style="width: 35%;">Deskripsi</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($viewModel->data as $item)
            <tr onclick="window.location.assign('{{ route('masteritem.show', ['masteritem' => $item->id]) }}');">
                <td>
                    <div class="image-table-cell">
                        <img src="{{ Arins\Facades\Filex::image($item->image) }}" alt="{{ $item->name }}">
                    </div>
                </td>
                <td>{{ $item->activitytype->name }}</td>
                <td>{{ $item->tasktype->name }}</td>
                <td>{{ $item->tasksubtype1->name }}</td>
                <td>{{ $item->name }}</td>
                <td>
                    <div class="truncate-multiline">{!! nl2br(e($item->description)) !!}</div>
                </td>
            </tr>
        @endforeach

    </tbody>
</table>
