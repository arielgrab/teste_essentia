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
});
