function sort_array(multilist) {
    // copy array sehingga tidak merubah yang asli
    var transformlist = multilist.slice(0);
  
    // urutkan panjang
    transformlist.sort(function(a, b) {
       if (a.length > b.length) return 1;
       else if (a.length < b.length) return -1;
       return 0;
    });
    
    // urutkan character di array
    for(var i = 0; i < multilist.length; i++) {
     var item = multilist[i];
     item.sort(function(a, b) {
         if(a.charCodeAt(0)> b.charCodeAt(0)) return 1;
      else if(a.charCodeAt(0)< b.charCodeAt(0))return -1;
      return 0;
     });
    }
    return transformlist;
  }