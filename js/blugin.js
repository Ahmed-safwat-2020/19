$(document).ready(function(){
    $(".log .content5 ").on({
        click:function(){
            $value = $(this).data("value")
            $("input.img").val($value)
            $(".log1").animate({
                left:"100vw"
            },1000,function(){
                $(".log1").addClass("d-none")
                $(".log2").removeClass("d-none")
                $(".log2").animate({
                    right:"0"
                },1000)
            })
        }
    })
});