<nav class="container-large ">

    <ul class="nav navbar-nav ">

        <span>

    @foreach($menu as $menus)

                <li class="dropdown dropdown-large" id="dropdown-large">

            <a href="javascript:;" id="dropdown" class="dropdown dropdown-large" data-toggle="dropdown">


                {{$menus->name}}

            </a>


            <ul class="dropdown-menu dropdown-menu-large row pull-right" role="menu">

                <div class="menu-level2">

                    <div class="menu-wrapper" style="width: 100%;">

                        @foreach($submenu as $submenus)



                            @if($submenus->parent_id == $menus->id)

                                <li class="col-sm-2">

                                    <a href="/search/{{$submenus->id}}" style="color: #1ca2bd; !important; font-weight: bold; font-size: 13px;">{{$submenus->name}}</a>



                                    @foreach($submenu as $smenus)


                                        @if($smenus->parent_id === $submenus->id)
                                            <ul style="padding-right: 4px; width: 57%; display: block;">

                                        <li class="" style="width: 78%;">

                                    <a href="/search/{{$smenus->id}}"  style="color: #000 !important; ">{{$smenus->name}}</a>

                                </li>
                                        </ul>


                                        @endif


                                    @endforeach



     </li>
                            @endif


                        @endforeach


                        <div class="image">

                              <img src="{{$menus->image}}" style="width: 234px;margin-top: 37px;">


                        </div>



                    </div>



                </div>



            </ul>
           </li>





            @endforeach


    </span>
    </ul>

</nav>


<!----------------------menu mobile----------------------->


<div class="navigation">


            <span style="font-size: 30px; cursor: pointer; " class="openNav">


               &#9776

                <span style="color: #000; font-size: 15px;">دسته بندی ها</span>
            </span>



    @include("layouts.menus.menu")


</div>
