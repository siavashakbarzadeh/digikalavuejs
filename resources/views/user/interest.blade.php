@include('layouts.header.header')
@include('layouts.menu.menu')

<div class="col-lg-12"  style="display: flex;">

    @include('layouts.user.UserSidebar')
    <div class="interest_title">

        <h5 style="text-align: right;margin-bottom: 24px;">لیست علاقه مندی ها</h5>
    </div>


    <div class="col-lg-9">

    @foreach($interest as $interests)

       <div class="col-lg-6" style="float: right;margin-top: 80px;">

        <div class="card" style="height: 215px;">

            <div class="card-body">

                <div  class="card-title">

                    <p style="text-align: right;margin-top: 23px;width: 340px;float: left;">{{$interests->product_title}}</p>


                </div>

                <div class="card_image">

<img src="/imagepro/{{$interests->product_image}}" style="width: 100px; height: 100px;">

                </div>

                <form action="/profile/removeinterest" method="post">

                    @csrf
                    <input type="hidden" name="id" value="{{$interests->id}}">
                    <button type="submit" class="card_close" >

                        <i class="icon icon-remove"></i>

                    </button>
                </form>


                <div class="card-price">
                    <p>{{$interests->product_price}} تومان</p>
                </div>

                <div class="card_url">


                    <a href="{{$interests->product_url}}">مشاهده محصول</a>
                </div>

            </div>

        </div>

    </div>


        @endforeach

</div>

</div>


@include('layouts.footer')