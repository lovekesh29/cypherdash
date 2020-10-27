@section('page_heading') 
<div class="hb-heading-page text-center bg-scroll" style="">
    <div class="container">
        <h1>{{ $heading }}</h1>
        <div class="hb-breadcrumbs">
            <ul>
                <li class="item-home">
                    <a class="bread-link bread-home" href="{{ url('/') }}" title="Home">Home</a>
                </li>
                <li class="separator separator-home"></li>
                <li class="item-current item-790">
                    <span class="bread-current bread-790">
                        {{ $heading }}</span>
                </li>
            </ul>
        </div>

    </div>

    <div
        class="bg-image bg-scroll overlay"
        style="background-image: url(/wp-content/themes/qrion/assets/images/bg-heading.jpg)"></div>
</div>
@endsection