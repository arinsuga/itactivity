<table id="filter" style="width: 100%;" class="table table-head-fixed text-nowrap">
    <thead>
        <tr>
            <th>Requester</th>
            <th>Department</th>
            <th>Category</th>
            <th>Subcategory</th>
            <th>Subject</th>
            <th>Description</th>
            <th>Resolution</th>
            <th>Request Type</th>
            <th>Technician</th>
            <th>Created By</th>
            <th>Start Time</th>
            <th>Completed Time</th>
            <th>Time Elapsed</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($viewModel->data->datalist as $item)
            <tr>
                <td>{{ $item->enduser['name'] }}</td>
                <td>{{ $item->enduserdept['name'] }}</td>
                <td>{{ $item->tasktype['name'] }}</td>
                <td>{{ $item->tasksubtype1['name'] }}</td>
                <td>{{ $item->subject }}</td>
                <td>{{ $item->description }}</td>
                <td>{{ $item->resolution }}</td>
                <td>{{ $item->activitysubtype['name'] }}</td>
                <td>{{ $item->technician['name'] }}</td>
                <td>{{ $item->createdBy['name'] }}</td>
                <td>{{ \Arins\Facades\Formater::datetime($item->startdt) }}</td>
                <td>{{ \Arins\Facades\Formater::datetime($item->enddt) }}</td>
                <td>{{ $item->startdt->diffInHours($item->enddt) }}:{{ $item->startdt->diff($item->enddt)->format('%I:%S') }}</td>
            </tr>
        @endforeach

    </tbody>
</table>
