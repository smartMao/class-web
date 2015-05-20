;!function(){
layer.use('extend/layer.ext.js', function(){
    //初始加载即调用，所以需放在ext回调里
    layer.ext = function(){
        layer.photosPage({
            html:'1',
            id: 100, //相册id，可选
            parent:'#photoBox'
        });
    };
});
}();