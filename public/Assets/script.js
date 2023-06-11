// tampil bubble map
$('#show1').click(function(){
    $(this).addClass('btn-success');
    $(this).removeClass('btn-outline-prisuccessmary');
    $('#show2').removeClass('btn-success');
    $('#show2').addClass('btn-outline-success');
    $('#map2').addClass('d-none');
    $('#map1').removeClass('d-none');
});

// tampil heat map
$('#show2').click(function(){
    $(this).addClass('btn-success');
    $(this).removeClass('btn-outline-success');
    $('#show1').removeClass('btn-success');
    $('#show1').addClass('btn-outline-success');
    $('#map1').addClass('d-none');
    $('#map2').removeClass('d-none');
});