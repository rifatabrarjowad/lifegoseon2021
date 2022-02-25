<a href="{{ url('/')}}">List</a> <br />
<input placeholder="Name" type="text" id="MyName" /><br>

<input placeholder="Email" type="text" id="MyEmail" /> <br />
<input type="password" placeholder="Password" id="MyPass" /> <br />
<button type="submit" onclick="SentData()">Insert</button>

<script type="text/javascript" src="{{ asset('js/jq.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>