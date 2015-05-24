;!function(){
layer.use('extend/layer.ext.js', function(){
    //初始加载即调用，所以需放在ext回调里
 	var photoInfo = $('#image-show').attr('layer-src');

 	
 	//alert(photoInfo);
    layer.ext = function(){
        layer.photosPage({
            html: 'ss' ,
            id: 100, //相册id，可选
            parent:'#photoBox',       
        }); 
           
    };

    




});
}();