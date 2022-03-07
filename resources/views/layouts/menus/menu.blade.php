<div id="mysidenav" class="sidenav" >



    <a href="javascript:;" class="closebtn"   >

        <img  src="/img/digi.png"style="width: 127px;margin-left: 61px;margin-top: 32px;border-bottom: 1px solid #aaa9a9;">
    </a>

        @foreach($menu as $menus)


            <ul>



                <li style="font-size: 13px;margin-top: 6px; color: #000 !important;" data-toggle="collapse" data-target="#collapse{{$menus->id}}" aria-expanded="false" aria-controls="collapseExample"
                3>{{$menus->name}}</li>








                @foreach($submenu as $submenus)



                    @if($submenus->parent_id == $menus->id)

                        <li class="" style="margin-right: 15px;margin-top: 10px;" class="collapse" id="collapse{{$menus->id}}">

                            <a  style="color: #212121; !important;  font-size: 10px;" class="" data-toggle="collapse" href="#collapseExample{{$submenus->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">{{$submenus->name}}</a>



                            @foreach($submenu as $smenus)


                                @if($smenus->parent_id === $submenus->id)
                                    <ul style="margin-right: 20px; " class="collapse" id="collapseExample{{$submenus->id}}">

                                        <li class="" style="">

                                            <a href=""  style="color: #212121 !important;font-size: 12px; ">{{$smenus->name}}</a>

                                        </li>
                                    </ul>


                                @endif


                            @endforeach



                        </li>
                    @endif


                @endforeach



            </ul>




        @endforeach


    </a>


</div>