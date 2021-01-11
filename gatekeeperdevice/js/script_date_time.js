function date_time()
{
        function pad(num) {return ("0" + num).slice(-2);}
        function time1() {
  var today = new Date(),
    h = today.getHours(),
    m = today.getMinutes(),
    s = today.getSeconds();
    
  h = h % 12;
  h = h ? h : 12; // the hour '0' should be '12'
  clk.innerHTML = h + ':' + 
    pad(m) + ':' + 
    pad(s) + ' ' + 
    (h >= 12 ? 'PM' : 'AM');
   {
}