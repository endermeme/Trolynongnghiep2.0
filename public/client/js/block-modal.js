$('#closeDemoModalBtn').on('click', function(){
    $("#blockDemoModal").modal('hide');
});
$('.page-account-contacts-new form, .page-clientareadetails form, .page-user-profile form, .page-user-password form').on('submit', function(e){
    e.preventDefault();
    $("#blockDemoModal").modal('show');
});