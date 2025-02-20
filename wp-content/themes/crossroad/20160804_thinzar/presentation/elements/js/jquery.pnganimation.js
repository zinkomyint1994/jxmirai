(function($) {
 
    $.fn.pngAnimation = function(options){
       
        var defaults = {
            filepath : 'img/',
            prefix : 'prefix_',
            preload : true,
            filetype : 'png',
            fps  : '24',
            totalFrames : 100,
            loop : true,
        };

        var setting = $.extend(defaults, options);

        var obj=$(this);
        
        return this.each(function(){

            var countFrame;
            var nowFrames = 0;
            var fps = 1000/setting.fps;



      

            //------------------------------------------ã‚¿ã‚¤ãƒžãƒ¼  
            function Timer(){
                     nowFrames+=1;
                     var Frames = convertNum(nowFrames, 4);


                   //  obj.attr('src',  setting.filepath + setting.prefix + Frames + '.' + setting.filetype);

                   var urls = "url('" + setting.filepath + setting.prefix + Frames + '.' + setting.filetype + "')";
                   obj.css({
                    "background-image" : urls
                   });
                     
                     if(setting.loop == true){
                        if(setting.totalFrames < nowFrames){
                            nowFrames = 0;
                        }

                     }else{
                        if(setting.totalFrames < nowFrames){
                            clearInterval(countFrame);
                        }
                    }
            }
            
            function startTimer(){
                countFrame = setInterval(function(){
                   Timer();
                },Math.floor(fps));
            }
            
            //------------------------------------------æ¡æ•°ã‚’4ã«æ•´åˆ—              
            function convertNum(num, figures) {
                var str = String(num);
                while (str.length < figures) {
                    str = "0"+str;
                }
                return str;
            } 


            //------------------------------------------ãƒ—ãƒªãƒ­ãƒ¼ãƒ‰
            function preload(){
                var ids = 'pngPreload' + setting.prefix;
                var i;
                if(setting.preload == true){
                        if(!($('#'+ids).length)){
                            $('body').append('<div id="'+ids+'" style="display:none;"></div>');
                            for(i = 0; i < setting.totalFrames;){
                                i++;
                                var conN = convertNum(i, 4);
                                var fileN = setting.filepath + setting.prefix + conN + '.' + setting.filetype;
                                $('#' + ids).append('<img src="' + fileN + '">');
                            }
                        }
                }
            }

            startTimer();
            preload();

        });
 
    };
})(jQuery);