<a href="{{ url('insert')}}">Insert</a>
<table class="">
    @foreach($viewData as $item)
    <tr>
        <td style="border:1px solid black" id="MyId" value="{{ $item->id }}">{{ $item->id}}</td>
        <td style="border:1px solid black">{{ $item->name}}</td>
        <td style="border:1px solid black">{{ $item->email}}</td>
        <td style="border:1px solid black"> <button onclick="DeleteData()" type="button">Delete</button></td>

    </tr>
    @endforeach
</table>

<script type="text/javascript" src="{{ asset('js/jq.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>