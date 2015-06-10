/* 
 * Lazy Line Painter - Path Object 
 * Generated using 'SVG to Lazy Line Converter'
 * 
 * http://lazylinepainter.info 
 * Copyright 2013, Cam O'Connell  
 *  
 */ 
 
var pathObj = {
    "topbagsvg": {
        "strokepath": [
            {
                "path": "M    5,196.5 731,196.5 731,721.5 4,721.5 4,196.5  L   5,196.5 731,196.5 731,721.5 4,721.5 4,196.5  ",
                "duration": 4000
            },
            {
                "path": "M 4 196.5 L 5 196.5",
                "duration": 800
            },
            {
                "path": "M240.6,194.5c0-94.4,56.8-171,126.9-171   s126.9,76.6,126.9,171",
                "duration": 800
            },
            {
                "path": "M226.5,194.5c0-104.9,63.1-190,141-190   s141,85.1,141,190",
                "duration": 800
            }
        ],
        "dimensions": {
            "width": 735,
            "height": 726
        }
    }
}; 
 
 
/* 
 Setup and Paint your lazyline! 
 */ 
 
 $(document).ready(function(){ 


 $('#topbagsvg').lazylinepainter( 
 {
    "svgData": pathObj,
    "strokeWidth": 6,
    "strokeColor": "#5B5B5B"
}).lazylinepainter('paint'); 


 });