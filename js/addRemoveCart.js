$(".addToCartBtn").click(function(){
    
    
    var pid = $(this).data("id");
    var uid = $(this).data("uid");
    if(uid==0){
        $(".loginSignup").click();
    }
    else{
        $.ajax({
            type: "POST",
            url: "./ajaxphp/addToCart.php", 
            data: {
                uid: uid,
                pid: pid
            },
            success: function(data){
                var status = parseInt(data);
                if(status==1){
                    toastr.options = {
                        "closeButton": true,
                        "debug": false,
                        "newestOnTop": true,
                        "progressBar": true,
                        "positionClass": "toast-top-right",
                        "preventDuplicates": false,
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                      }
                    toastr.success('Added to Cart');
                }
                else{

                }
            },
            error: function(){
                
            }
        });
    }
    
});
