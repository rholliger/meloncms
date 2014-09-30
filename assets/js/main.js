// NOTIFICATIONS 

function showSuccess() {
	jSuccess(
		'Here the message !!<br />You can write HTML code <strong>bold</strong>, <i>italic</i>, <u>underline</u>',
		{
		  autoHide : true, // added in v2.0
		  clickOverlay : false, // added in v2.0
		  MinWidth : 250,
		  TimeShown : 3000,
		  ShowTimeEffect : 200,
		  HideTimeEffect : 200,
		  LongTrip :20,
		  HorizontalPosition : 'center',
		  VerticalPosition : 'center',
		  ShowOverlay : true,
			  ColorOverlay : '#000',
		  OpacityOverlay : 0.3,
		  onClosed : function(){ // added in v2.0
		   
		  },
		  onCompleted : function(){ // added in v2.0
		   
		  }
	});
};	

//

// AJAX REQUEST

function makeRequest(data){
	return $.ajax({
		type: 'POST',
		url: '../classes/controller/ajax.php',
		data: data,
		dataType: 'json'
	});
}

//

function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
}
