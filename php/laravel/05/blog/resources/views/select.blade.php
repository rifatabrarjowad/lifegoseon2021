<table class="">
    @foreach($viewData as $item)
    <tr>
        <td style="border:1px solid black">{{ $item->id}}</td>
        <td style="border:1px solid black">{{ $item->name}}</td>
        <td style="border:1px solid black">{{ $item->email}}</td>
    </tr>
    @endforeach
</table>