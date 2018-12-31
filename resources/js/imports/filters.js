Vue.filter('capitalize', function (value) {
    if (!value) return ''
    value = value.toString()
    return value.charAt(0).toUpperCase() + value.slice(1)
  })

Vue.filter('shortTitle',function(value){
    let newValue = '';
    if(value.length > 27){
      newValue = value.slice(0,27);
      return newValue;
    }else{
      return value;
    }
    
})

