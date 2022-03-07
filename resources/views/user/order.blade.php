@include('layouts.header.header')
@include('layouts.menu.menu')

<div class="col-lg-12"  style="display: flex;">

@include('layouts.user.UserSidebar')

    <div class="col-lg-9" style="float: left;margin-top: 80px;">
        <h5 style="text-align: right;margin-bottom: 24px;">همه سفارش ها</h5>
        <div class="card">

            <div class="card-body">


                <table class="table table-hover table-striped " style="text-align: center;">

                    <thead>

                    <tr>
                        <th>مشخصات محصول</th>
                        <th>شماره سفارش</th>
                        <th>قیمت خریداری شده</th>



                    </tr>


                    </thead>


                    <tbody>

                    @foreach($order as $orders)
                    <tr>
                        <td>{{$orders->product_full_name}}</td>
                        <td>{{$orders->id_orders}}</td>
                        <td>{{$orders->price}}</td>

                    </tr>


                        @endforeach


                    {{$order->links()}}

                    </tbody>

                </table>



            </div>


        </div>




    </div>



</div>


@include('layouts.footer')