@component('mail::message')

<table style="border:none;">
    <tr>
        <td style="width: 20%;">Purpose</td>
        <td style="width: 1%;">:</td>
        <td style="width: 79%;">{{ $data['purpose'] }}</td>
    </tr>

    <tr>
        <td style="width: 20%">Dikirim oleh</td>
        <td style="width: 1%">:</td>
        <td style="width: 79%">{{ $data['firstName'].' '.$data['lastName'] }}</td>
    </tr>

    <tr>
        <td style="width: 20%">Alamat Email</td>
        <td style="width: 1%">:</td>
        <td style="width: 79%">{{ $data['email'] }}</td>
    </tr>
</table>

@endcomponent
