$(function () {
    $('form').on('submit', function (e) {
    	if($(this).attr('method') == 'DELETE'){
    		if(confirm("Está certo disso?")){
    			return true;
    		}else{
    			return false;
    		}
    	}
    });

    $('.tel').inputmask("(99) 99999-9999");

});
