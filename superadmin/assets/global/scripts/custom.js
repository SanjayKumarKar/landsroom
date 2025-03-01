

/*Active Menu*/

var activeurl = window.location.href;

$('a[href="'+activeurl+'"]').parent('li').addClass('active open start');

$('a[href="'+activeurl+'"]').parent('li').parents('li').addClass('active open start');






//Change Input Field Type Dynamically

function changeType(field,prev_type,new_type) {

  var x = document.getElementById(field);

  if (x.type === prev_type) {

    x.type = new_type;

  } else {

    x.type = prev_type;

  }

} 





//Password and Confirm Password validation

function validatePassword(){

	var password = document.getElementById("admin_password");

  var confirm_password = document.getElementById("admin_password_recovery");

  if(password.value != confirm_password.value) {

    confirm_password.setCustomValidity("Passwords Don't Match");

  } else {

    confirm_password.setCustomValidity('');

  }

}





//Remove Field Group

$(document).ready(function(){

	//remove fields group

    $("body").on("click",".remove_button",function(){ 

        $(this).parents(".remove_this").remove();

		toastr.error('One field group removed.');

    });

});







//Get URL Parameter

function getUrlParam( paramName ) {

	var reParam = new RegExp( '(?:[\?&]|&)' + paramName + '=([^&]+)', 'i' );

	var match = window.location.search.match( reParam );

	return ( match && match.length > 1 ) ? match[1] : null;

}







   function displayCurrentDateTime() {
      const monthNames = [
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
      ];

      const currentDate = new Date();
      const day = currentDate.getDate();
      const month = monthNames[currentDate.getMonth()];
      const year = currentDate.getFullYear();

      const hours = currentDate.getHours() % 12 || 12;
      const minutes = pad(currentDate.getMinutes());
      const seconds = pad(currentDate.getSeconds());
      const ampm = currentDate.getHours() >= 12 ? 'PM' : 'AM';

      const formattedDate = day + "<sup>" + ordinalSuffix(day) + "</sup> " + month + ", " + year;
      const formattedTime = hours + ":" + minutes + ":" + seconds + " " + ampm;

      const formattedDateTime = formattedDate + " - " + formattedTime;
      document.getElementById("ct6").innerHTML = formattedDateTime;
    }

    // Helper function to add ordinal suffix to the day (e.g., 1st, 2nd, 3rd)
    function ordinalSuffix(day) {
      if (day >= 11 && day <= 13) {
        return "th";
      }

      const lastDigit = day % 10;
      switch (lastDigit) {
        case 1:
          return "st";
        case 2:
          return "nd";
        case 3:
          return "rd";
        default:
          return "th";
      }
    }

    // Helper function to pad single-digit numbers with leading zeros
    function pad(number) {
      return number.toString().padStart(2, '0');
    }

    // Call the function to display the current date and time immediately
    displayCurrentDateTime();

    // Update the date and time every second
    setInterval(displayCurrentDateTime, 1000);




//Initialize CK Editor
function initiateEditor()
{
	for(var i=0;i<=100;i++)
	{
		CKEDITOR.replace('editor'+i, {
			allowedContent:true,
			//startupMode : 'source',
			filebrowserBrowseUrl:window.location.origin + '/superadmin/media/browser'
		});
	}
}
initiateEditor();

//Copy For CKEDITOR
function myCopyCKEDITOR(copyText) {
	var $temp = $("<input>");
	$("body").append($temp);
	$temp.val(copyText).select();
	document.execCommand("copy");
	toastr.success('Media path copied to clipboard...<br> Paste it where you need...');
	toastr.info(copyText);
	$temp.remove();
	var CKEditorFuncNum=getUrlParam( 'CKEditorFuncNum' );
	window.opener.CKEDITOR.tools.callFunction(CKEditorFuncNum,copyText);
	setTimeout(function(){ window.close(); }, 1000);
}