
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */


Vue.component('pagination', require('./components/Paginationcomponent.vue'));
Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app',
    data:{
        NameCat:"",
        parent_id:"",
        categorys:[],
        DeleteCategory:"",
        updatecat:"",
        updatecat1:"",
        catid:"",
        fname:"",
        lname:"",
        email:"",
        role:"",
        password:"",
        ProductName:"",
        ProductPrice:"",
        ProductCount:"",
        ProductCategory:"",
        imageurl:"",
        users:[],
        NameGroup:"",
        NameBrand:"",
        itemid:"",
        attributegroup_id:"",
        AtributeGroup:"",
        AttributeItem:"",
        Name_Attr1:"",
        name:"",
        text:"",
        value:"",
        code:"",
        AddReview:"",
        begindate:"",
        enddate:"",
        BrandName:"",
        Country:"",
        BrandProduct:"",
        ImageBrand:"",
        Ename:"",
        BrandCategory:"",
        brand:[],
        product:[],
        checkbrands:[],
        sortpriceA:"",
        check_status:"",
        attribute:"",
        state1:"",
        state2:"",
        state3:"",
        state4:"",
        attributeitems:"",
        checkattribute:[],
        date:[],
        pagination:{

            'current_page':1
        },
        province:""



    },

    mounted() {
        this.ShowProduct();

    },

    computed: {
        products: function() {

            return _.orderBy(this.products, 'price','desc');
            console.log(_.orderBy(this.products, 'price','desc'));
        }
    },
    created:function(){

        this.getvaluecayegory();
        this.getvalueuser();
        this.ShowBrand();
        this.ShowProduct();
        this.showattribute();
        this.showattributeitems();
        this.getCountLike();
    },
    methods:{
        /*************************Interest**************************************/


        Interest:function(id){

            axios.post('/Like',{
             ProductID :id
            }).then(response=>{

                if (response.data==1){

                    $(".interest i").addClass('like');
                    $(".interest i").removeClass('dislike');
                } else{
                    $(".interest i").addClass('dislike');
                    $(".interest i").removeClass('like');
                }


            },response=>{
                this.error=1;
                console.log("error");
            });

        },






        /********************************************************************/

        step2:function(id){
            axios.post('/addtime',{

                date :this.date,
                id :id

            }).then(response=>{
                swal("با موفقیت ذخیره شد ");
            },response=>{
                this.error=1;
                console.log("error");
            });
        },
        /************AddCart*************/

        AddCart:function(id){
            axios.post('/addcart',{
                id:id
            }).then(response=>{
                location.href='/cart';
            },response=>{
                this.error=1;
                console.log("error");
            });

        },

        /********************/

        status:function(data){
            var checkBox=document.getElementById("check_status") ;
            if (checkBox.checked ==true){
                if (data.count == 0){
                    return false;
                } else{
                    return true;
                }

            } else{
                return true;
            }
        },

        filterattribute:function(data){
            console.log(this.checkattribute.includes(data.name1));

            if (this.checkattribute.length == 0) return true;

            console.log(this.checkattribute.includes(data.name1))  ;
        },

        /**********filter brands**************/

        filterbrands:function filterbrands(data){

            console.log(this.checkbrands.includes(data.name));

            if (this.checkbrands.length == 0) return true;

            return  this.checkbrands.includes(data.name);



        },
        orderBy: function(sorKey) {
            this.sortKey = sorKey
            this.sortSettings[sorKey] = !this.sortSettings[sorKey]
            this.desc = this.sortSettings[sorKey]

        },
        sortByLowPrice:function(){
            return this.product.sort(function (a,b) {
                return a.price - b.price;
            })


        },

        sortByHigherPrice:function(){

            return this.product.sort(function (a) {
                return b.price -  a.price;
            })


        },



        /********************************/



        ShowProduct:function(){

            axios.get('/ShowProduct?page=' + this.pagination.current_page).then(response=>{
                this.product=response.data.data.data;
                this.pagination=response.data.data;
                console.log(this.product);
            });


        },

        showattributeitems:function(){
            axios.get('/attributeitems').then(response=>{

                this.attributeitems=response.data

                //   console.log(this.attributeitems);

            });

        },
        showattribute:function(){

            axios.get('/attribute').then(response=>{

                this.attribute=response.data

                //
                //
                // console.log(this.attribute);

            });


        },

        /*********showbrand ******************/
        ShowBrand:function(){

            axios.get('/admin/showbrand').then(response=>{
                this.brand=response.data;
            });

        },



        AddBrand:function(){

            var image=$("#brandimage").val();
            axios.post('/admin/addbrand',{

                name :this.BrandName,
                country:this.Country,
                Ename:this.Ename,
                product_id:this.BrandProduct,
                image:image


            }).then(response=>{
                swal("با موفقیت ذخیره شد ");
            },response=>{
                this.error=1;
                console.log("error");
            });

        },

        /************************discount*******************/
        addDiscount:function(){

            var begindate=$("#begindate").val();
            var enddate=$("#enddate").val();

            axios.post('/admin/addDiscount',{

                name :this.text,
                value:this.value,
                code:this.code,
                product_id:this.product_id,
                enddate:enddate,
                begindate:begindate





            }).then(response=>{



                swal("با موفقیت ذخیره شد ");



            },response=>{
                this.error=1;
                console.log("error");
            });

        },
        /*******************attributeitem************************/


        AddAttributeItem:function(){

            var productid=$("#productid1").val();


            axios.post('/admin/attributeitem',{

                attributeitem :this.AttributeItem,

                itemid:this.itemid,
                productid:productid



            }).then(response=>{



                swal("با موفقیت ذخیره شد ");



            },response=>{
                this.error=1;
                console.log("error");
            });


        } ,
        /*****************attributs********************/

        AddGroup:function(){

            axios.post('/admin/atrrgroup',{

                name:this.NameGroup,

                id:this.attributegroup_id,




            }).then(response=>{



                swal("با موفقیت ذخیره شد ");



            },response=>{
                this.error=1;
                console.log("error");
            });




        },


        AddAttribute:function(){


            var productid=$("#productid1").val();

            axios.post('/admin/attribute',{

                name:this.Name_Attr,

                id:this.AtributeGroup,

                productid:this.productid



            }).then(response=>{



                swal("با موفقیت ذخیره شد ");



            },response=>{
                this.error=1;
                console.log("error");
            });




        } ,

        AddReviews:function(){
            var text=$("#editor").text() ;


            axios.post('/admin/addreview',{
                text:text,
                state1:this.state1,
                state2:this.state2,
                state3:this.state3,
                state4:this.state4,
                product_id:this.product_id,
            }).then(response=>{

                this.getvalueuser();




                swal("نقد شما با موفقیت ذخیره شد ");



            },response=>{
                this.error=1;
                console.log("error");
            });



        },





        /*******************AddProduct**********************/
        AddProduct:function(){

            var text=$("#editor").text() ;


            var img=$("#image").val();


            axios.post('/admin/addproduct',{

                name:this.ProductName,
                text:text,
                price:this.ProductPrice,
                count:this.ProductCount,
                image:img,
                category:this.ProductCategory



            }).then(response=>{

                this.getvalueuser();



                $("#productid").val(response.data.PID);
                $("#productid1").val(response.data.PID);
                swal("با موفقیت ذخیره شد ");
                console.log(response.data.PID);


            },response=>{
                this.error=1;
                console.log("error");
            });


        },

        /********************updatestatus**********************/

        updatestatus:function(id)
        {

            axios.post('/admin/updatestatus',{

                id:id,

            }).then(response=>{

                this.getvalueuser();

            },response=>{
                this.error=1;
                console.log("error");
            });

        } ,
        /******************like******************************/

        getCountLike:function(){
            axios.get('getuser').then(response=>{



                this.users=response.data.data;


            });
        },



        btn_like:function(CommentId,ProductID){
            axios.post('/LikeComment',{
                CommentId:CommentId,
                ProductID:ProductID,
               }).then(response=>{

                $(".like"+CommentId).html(response.data);

            },response=>{
                this.error=1;
                console.log("error");
            });

        },

        btn_dislike:function(CommentId,ProductID){
            axios.post('/DisLikeComment',{
                CommentId:CommentId,
                ProductID:ProductID,
            }).then(response=>{
                $(".dislike"+CommentId).html(response.data);
            },response=>{
                this.error=1;
                console.log("error");
            });

        },


        /*****************deleteuser******************/

        deleteuser:function(id){


            axios.post('deleteuser',{


                id:id



            }).then(response=>{

                this.getvalueuser();

                swal("با موفقیت حذف شد ");




            },response=>{
                this.error=1;
                console.log("error");
            });

        },
        /****************adduser****************/

        adduser:function(){


            axios.post('adduser',{

                fname:this.fname,
                lname:this.lname,
                email:this.email,
                role:this.role,
                password:this.password



            }).then(response=>{

                this.getvalueuser();

                swal("با موفقیت ذخیره شد ");




            },response=>{
                this.error=1;
                console.log("error");
            });




        },
        /********************getvalue user**************************/
        getvalueuser:function(){

            axios.get('getuser').then(response=>{



                this.users=response.data.data;


            });


        },


        /********updatecategory***************/



        updatecategory:function(id){

            axios.post('updatecategory',{

                name:this.updatecat,
                parent_id:this.updatecat1,
                id:id



            }).then(response=>{

                this.getvaluecayegory();

                swal("با موفقیت ویرایش شد ");




            },response=>{
                this.error=1;
                console.log("error");
            });



        },

        /********************deletecategory*************************************/

        deletecategory1:function(id){



            axios.post('deletecat1',{

                id:id



            }).then(response=>{

                this.getvaluecayegory();

                swal("با موفقیت حذف شد ");




            },response=>{
                this.error=1;
                console.log("error");
            });




        },

        /********************getvalue**************************/
        getvaluecayegory:function(){

            axios.get('getcategory').then(response=>{



                this.categorys=response.data;

                this.catid=response.data.id;
            });


        },
        /***************deletecategory********************/

        deletecat:function(){

            axios.post('deletecategory',{

                cat:this.DeleteCategory



            }).then(response=>{

                this.getvaluecayegory();

                swal("با موفقیت حذف شد ");




            },response=>{
                this.error=1;
                console.log("error");
            });


        },



        /**************addcategory**************/
        AddCategory:function(){

            var image=$("#image1").val();


            axios.post('addcategory',{

                name:this.NameCat,
                parent_id:this.parent_id,
                image:image


            }).then(response=>{
                // this.categorys.push({'id':response.data.id,'name':response.data.name});
                this.getvaluecayegory();


                swal("با موفقیت ذخیره شد ");





            },response=>{
                this.error=1;
                console.log("error");
            });

        }

    }
});
