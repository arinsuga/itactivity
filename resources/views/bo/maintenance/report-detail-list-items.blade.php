<table id="filter" style="width: 100%;" class="table table-head-fixed text-nowrap">
    <thead>
        <tr>
            <th>Jenis Maintenance</th>
            <th>Object Maintenance</th>
            <th>Subject</th>
            <th>Description</th>
            <th>Resolution</th>
            <th>Created By</th>
            <th>Start Time</th>
            <th>Completed Time</th>
            <th>Time Elapsed</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($viewModel->data as $item)
            <tr>
                <td>{{ $item->activitysubtype->name }}</td>
                <td>{{ $item->tasktype->name }}</td>
                <td>{{ $item->subject }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->resolution }}</td>
                <td>{{ $item->createdBy['name'] }}</td>
                <td>{{ \Arins\Facades\Formater::datetime($item->startdt) }}</td>
                <td>{{ \Arins\Facades\Formater::datetime($item->enddt) }}</td>
                <td>{{ $item->startdt->diffInHours($item->enddt) }}:{{ $item->startdt->diff($item->enddt)->format('%I:%S') }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
