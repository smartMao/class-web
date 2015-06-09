
;!function(){
layer.use('extend/layer.ext.js', function(){
    //初始加载即调用，所以需放在ext回调里
 	var photoInfo = $('#image-show').attr('alt');
    layer.ext = function(){
    
        layer.photosPage({
            html: '' ,
            id: 100, //相册id，可选
            parent:'#photoBox',       
        }); 
           
    };

    

});
}();