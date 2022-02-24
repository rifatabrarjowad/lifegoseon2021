@extends('layout.app')
@section('title', 'Portfolio')
@section('content')
<div class="container">
    <div class="row">
        @for($i = 0; $i <5; $i++) <div class="col-md-3">
            <div class="card mt-5">
                <img src="https://www.visa.com.bs/dam/VCOM/regional/lac/ENG/Default/Pay%20With%20Visa/Find%20a%20Card/Debit%20Cards/Visa%20Debit%20Gold/debit-gold-eng-640x404.jpg"
                    class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional
                        content. This content is a little bit longer.</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated 3 mins ago</small>
                </div>
            </div>
    </div>
    @endfor

</div>
</div>
@endsection