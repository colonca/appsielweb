<div>
    <!-- Page-header start -->
    <div class="page-header card">
        <div class="card-block">
            <h5 class="m-b-10">{{$title}}</h5>
            <p class="text-muted m-b-10">{{$description}}</p>
            <ul class="breadcrumb-title b-t-default p-t-10">
                @foreach($urls as $key=>$value)
                    <li class="breadcrumb-item">
                        <a href="{{$value}}"> {{$key}} </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <!-- Page-header end -->
</div>
