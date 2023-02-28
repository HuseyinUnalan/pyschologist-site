   <!-- Client Section Start -->
   <div class="client-logo-area">
    <div class="container">
        <div class="client-logo">
            
            @foreach ($clients as $client)
            <div class="single-logo">
                <a href="#">
                    <img src="{{ asset($client->photo) }}" alt="{{$client->name}}">
                </a>
            </div>
            @endforeach
           
        </div>
    </div>
</div>
<!-- Client Section End -->