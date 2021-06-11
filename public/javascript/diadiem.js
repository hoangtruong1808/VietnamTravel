$(document).ready(function() {
    $('#btn-next').click(function(event)
    {
        var slide_sau = $('.active').next();
        $('.active').addclass('bien-mat-ben-trai');
        slide_sau.addclass('active').addClass('di-vao-ben-phai');
    });
});