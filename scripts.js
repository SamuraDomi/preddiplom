function digitalWatch()
{
	var date = new Date();
	var hours = date.getHours();
	var minutes = date.getMinutes();
	var seconds = date.getSeconds();
	if (hours < 10) hours = "0" + hours;
	if (minutes < 10) minutes = "0" + minutes;
	if (seconds < 10) seconds = "0" + seconds;
	document.getElementById("digital_watch").innerHTML = hours + ":" + minutes + ":" + seconds;
	setTimeout("digitalWatch()", 1000);
}

$(document).ready(function() {
    var delayInSeconds = 10;
    function openDialog() {
      $("#advertisement").dialog({
        modal: true,
        buttons: {
            "Оставить отзыв": function() {
              $(this).dialog("open");
              window.location.href = "https://google.com";
            },
            "Закрыть": function() {
                $(this).dialog("close");
          }
        }
      });
    }
    setTimeout(openDialog, delayInSeconds * 1000);
  });
