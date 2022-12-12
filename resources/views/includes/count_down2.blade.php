
<div id="countdown"></div>


<script>




    // set the date we're counting down to
var target_date = new Date('April, 1, 2017').getTime();
 
 // variables for time units
 var days, hours, minutes, seconds;
  
 // get tag element
 var countdown = document.getElementById('countdown');
  
 // update the tag with id "countdown" every 1 second
 setInterval(function () {
  
     // find the amount of "seconds" between now and target
     var current_date = new Date().getTime();
     var seconds_left = (target_date - current_date) / 1000;
  
     // do some time calculations
     days = parseInt(seconds_left / 86400);
     seconds_left = seconds_left % 86400;
      
     hours = parseInt(seconds_left / 3600);
     seconds_left = seconds_left % 3600;
      
     minutes = parseInt(seconds_left / 60);
     seconds = parseInt(seconds_left % 60);
      
     // format countdown string + set tag value
     countdown.innerHTML = '<span class="days">' + days +  ' <label>Days</label></span> <span class="hours">' + hours + ' <label>Hours</label></span> <span class="minutes">'
     + minutes + ' <label>Minutes</label></span> <span class="seconds">' + seconds + ' <label>Seconds</label></span>';  
  
 }, 1000);
</script>


<style>


#countdown {
  width: 100%;
}
label {
  clear: both;
  display: block;
}
#countdown span {
  background: rgba(0,0,0,0);
  color: #000;
  font-size: 26px;
  font-weight: normal;
  text-align: center;
  width: 25%;
  dispaly: block;
  float: left;
  border-right: 1px solid #FFF;
}
#countdown span:last-child {
  border-right: 1px solid #313233;
}
</style>