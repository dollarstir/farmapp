$(function(){

    $("#loadee").hide();
    

    // $("#loadee").hide(); 

  function resp(response){

        $(".repo").html(response);
        $("#mess").fadeOut(40000);
  }


  
 $("#logfrm").submit(function(e){
     e.preventDefault();

     var loopt = {
         url: 'dollarstir.php?dollar=login',
         type: 'post',
         data: new FormData(this),
         cache: false,
         contentType: false,
         processData: false,
         beforeSend: function () {

          $("#loadee").show();

             
         },

         success: resp

    }

    $.ajax(loopt);
 });


 $("#recoveryfrm").submit(function (e) {

    e.preventDefault();
    var recoveropt = {
        url : "dollarstir.php?dollar=recoverpassword",
        type: "post",
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function () {

            $("#loadee").show();
  
               
           },
  
           success: resp
    };
    $.ajax(recoveropt);

     
 })



 $("#addfm").submit(function (e) {

    e.preventDefault();
    var addfa = {
        url : "dollarstir.php?dollar=addfarmer",
        type: "post",
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function () {

            $("#loadee").show();
  
               
           },
  
           success: resp
    };
    $.ajax(addfa);

     
})


$("#addcom").submit(function (e) {

    e.preventDefault();
    var addca = {
        url : "dollarstir.php?dollar=addcommunity",
        type: "post",
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function () {

            $("#loadee").show();
  
               
           },
  
           success: resp
    };
    $.ajax(addca);

     
})





$("#addcrp").submit(function (e) {

    e.preventDefault();
    var addcop = {
        url : "dollarstir.php?dollar=addcrop",
        type: "post",
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function () {

            $("#loadee").show();
  
               
           },
  
           success: resp
    };
    $.ajax(addcop);

     
})


$("#addsale").submit(function (e) {

    e.preventDefault();
    var addsal = {
        url : "dollarstir.php?dollar=addsale",
        type: "post",
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function () {

            $("#loadee").show();
  
               
           },
  
           success: resp
    };
    $.ajax(addsal);

     
})


$("#addcor").submit(function (e) {

    e.preventDefault();
    var addcore = {
        url : "dollarstir.php?dollar=addcor",
        type: "post",
        data: new FormData(this),
        cache: false,
        contentType: false,
        processData: false,
        beforeSend: function () {

            $("#loadee").show();
  
               
           },
  
           success: resp
    };
    $.ajax(addcore);

     
})

// $("#frmrisk").submit(function (e) {

//     e.preventDefault();
//     var addcore = {
//         url : "dollarstir.php?dollar=addcor",
//         type: "post",
//         data: new FormData(this),
//         cache: false,
//         contentType: false,
//         processData: false,
//         beforeSend: function () {

//             $("#loadee").show();
  
               
//            },
  
//            success: resp
//     };
//     $.ajax(addcore);
  

     
// })



$(".number-tab-steps").steps({headerTag:"h6",bodyTag:"fieldset",transitionEffect:"fade",titleTemplate:'<span class="step">#index#</span> #title#',labels:{finish:"Submit"},onFinished:function(e,t){alert("Form submitted.")}}),$(".icons-tab-steps").steps({headerTag:"h6",bodyTag:"fieldset",transitionEffect:"fade",titleTemplate:'<span class="step">#index#</span> #title#',labels:{finish:"Submit"},onFinished:function(e,t){alert("Form submitted.")}}),$(".vertical-tab-steps").steps(
	{
		headerTag:"h6",
		bodyTag:"fieldset",
		transitionEffect:"fade",
		stepsOrientation:"vertical",
		titleTemplate:'<span class="step">#index#</span> #title#',
		labels:{finish:"Submit"},
		onFinished:function(e){
            e.preventDefault();
            var addicr= {
                url : "dollarstir.php?dollar=addicr",
                type: "post",
                data: new FormData(this),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
        
                    $("#loadee").show();
          
                       
                   },
          
                   success: resp
            };
            $.ajax(addicr);
        
        }
    }
);








 
})