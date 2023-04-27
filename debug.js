//Recomment to use this code in line html, after <head> open

window.onerror = function (message, file, line, col, error) {
             url = '/index.php?route=cactus/ajax/logJSE';
             data = 'jsError='+error+
                 "&jsE_message="+message+
                 "&jsE_file="+file+
                 "&jsE_line="+line+
                 "&jsE_col="+col+
                 "&jsE_page="+window.location.href ;

             var req = new XMLHttpRequest();
             req.open('POST', url, false);
             req.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
             req.send(data);
  
             //console.log(req.response);
  
             return false;
         };
