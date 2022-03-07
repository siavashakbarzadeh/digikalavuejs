@include('layouts.header.header')
@include('layouts.menu.menu')

<div class="col-lg-12"  style="display: flex;">

    @include('layouts.user.UserSidebar')
    <div class="interest_title">

        <h5 style="text-align: right;margin-bottom: 24px;">نقد و نظرات</h5>
    </div>


    <div class="col-lg-9">

        @foreach($comment as $comments)

            <div class="col-lg-6" style="float: right;margin-top: 80px;">

                <div class="card" style="min-height: 272px;">

                    <div class="card-body" style="padding: 0px !important;">

                        <div  class="card-title" style="background-color: #fcfcfc; width: 348px ; float: left;height: 100%;">

                            <p style="text-align: right;margin-top: 23px;width: 340px;float: left;font-size: 14px;">{{$comments->comment_title}}</p>
                            <p style="text-align: right;margin-top: 15px;width: 340px;float: left;font-size: 14px;line-height: 25px;position: relative;z-index: 9999;">{{$comments->text}}</p>


                            <img src="/img/comment.png" style="position: absolute;left: 0;top: 66px;">
                        </div>

                        <div class="card_image" style="position: absolute;top: 76px;

right: 14px;">

                            <img src="/imagepro/{{$comments->product_image}}" style="width: 100px; height: 100px;">

                        </div>

                        <form action="/profile/removcomment" method="post">

                            @csrf
                            <input type="hidden" name="id" value="{{$comments->id}}">
                            <button type="submit" class="card_comment_close" >

                             حذف

                            </button>
                        </form>





                    </div>

                </div>

            </div>


        @endforeach

    </div>

</div>


@include('layouts.footer')