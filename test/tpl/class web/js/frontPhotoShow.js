;!function(){

//加载扩展模块
layer.config({
    extend: 'extend/layer.ext.js'
});

//页面一打开就执行，放入ready是为了layer所需配件（css、扩展模块）加载完毕
layer.ready(function(){ 
   
    //使用相册
    layer.photos({
        photos: '#photoBox'
    });
});



}();