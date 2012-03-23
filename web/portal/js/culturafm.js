function querystring(key) {
   var re=new RegExp('(?:\\?|&)'+key+'=(.*?)(?=&|$)','gi');
   var r=[], m;
   while ((m=re.exec(document.location.search)) != null) r.push(m[1]);
   return r;
}

function isDevice(OSName) {
  //var system = navigator.userAgent.toLowerCase(); // get local system values
  var system = navigator.appVersion.toLowerCase(); // get local system values
  var OSName = OSName.toLowerCase(); // put parameter value to lowecase
  // put some parameters value in standard names
  if (OSName == "macos") OSName = "mac";
  if (OSName == "windows") OSName = "win";
  if (OSName == "unix") OSName = "x11";
  if (OSName == "blackberry") OSName = "BlackBerry";
  if (system.indexOf(OSName) != -1)
    return true;
  else
    return false;
}

$(document).ready(function() {
  if(querystring('w')!="1"){
    if(isDevice('ipad') || isDevice('iphone') || isDevice('ipod') || isDevice('BlackBerry')){
      self.location.href='http://culturafm.cmais.com.br/controle-remoto'
    }
    else if(isDevice('Android')){
      self.location.href='http://www.culturabrasil.com.br/controle-remoto?start=fm'
    }
  }
});
