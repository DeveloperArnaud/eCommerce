$('#account-btn').hover(function() {
    $('#modal-box').show();
});

$('body').click(function() {
    $('#modal-box').hide();
});

$('#close-modal').click(function() {
    $('#modal-box').hide();
})

