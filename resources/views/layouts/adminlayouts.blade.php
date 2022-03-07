<!DOCTYPE html>
<html>
<head>
    <title>دیجی کالا </title>
    <link rel="stylesheet" type="text/css" href="/css/app.css">
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">

    <link rel="stylesheet" href="/css/persian-datepicker.css"/>
    <link rel="stylesheet" type="text/css" href="/css/admin.css">
    <link rel="stylesheet" type="text/css" href="/css/admin.sass">
    <link rel="stylesheet" type="text/css" href="/css/dropzone.css">
    <link rel="stylesheet" type="text/css" href="/font-awesome/css/font-awesome.css">
</head>
<body>


@include('layouts.header')
<div class="col-lg-12">
    @include('layouts.sidebar')


    <div class="col-lg-10" style="float: left !important; ">


        <section>



                    @yield('content')


        </section>
    </div>

</div>
<script src="/js/jquery-1.8.3.min.js"></script>
<script src="/js/app.js"></script>

<script src="/persian-date.js"></script>
<script src="{{url('js/persian-datepicker.js')}}"></script>
<script src="/js/ckeditor.js"></script>
    <script src="/js/dropzone.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="/js/sweetalert.min.js"></script>

    <script type="text/javascript">
        $('.observer-example').persianDatepicker({
            observer: true,
            format: 'YYYY/MM/DD',
            altField: '.observer-example-alt'
        });

        $('.observer-example1').persianDatepicker({
            observer: true,
            format: 'YYYY/MM/DD',
            altField: '.observer-example-alt'
        });
        DecoupledEditor
            .create( document.querySelector( '#editor' ) )
            .then( editor => {
                const toolbarContainer = document.querySelector( '#toolbar-container' );

                toolbarContainer.appendChild( editor.ui.view.toolbar.element );
            } )
            .catch( error => {
                console.error( error );
            } );



$(document).ready(function(){

    $(".btn-info").click(function(){

        $("#myModal").modal('show');

            alert("okkk");
    });




    $("#date1").pDatepicker();


});


        Dropzone.options.oneupload={

            paramName:"file",
            maxFilesize:2,

            success:function(file,response){
                $("#image").val(response);

            }


        };


        Dropzone.options.dropzone2={

            paramName:"file",
            maxFilesize:2,

            success:function(file,response){
                $("#brandimage").val(response);

            }


        };

        Dropzone.options.ImageCategory={

            paramName:"file",
            maxFilesize:2,

            success:function(file,response){
                $("#image1").val(response);

            }


        }
        Dropzone.options.oneupload={

            paramName:"file",
            maxFilesize:2,

            success:function(file,response){
                $("#image").val(response);

            }


        };


        Dropzone.options.dropzone2={

            paramName:"file",
            maxFilesize:2,

            success:function(file,response){
                $("#brandimage").val(response);

            }


        };

        Dropzone.options.ImageCategory={

            paramName:"file",
            maxFilesize:2,

            success:function(file,response){
                $("#image1").val(response);

            }


        }

    </script>
</body>
</html>