/**
 *    Ken Fyrstenberg Nilsen
 *    Abidas Software
 */
var canvas = document.getElementById('#screeshot'),
    ctx = canvas.getContext('2d');

/**
 * Functions for demo
 */
function doCanvas() {

    //some background
    var s = canvas.width / 5;
    var i = 0;
    var r = Math.random;

    for (; i < 100; i++) {
        ctx.fillStyle = 'rgb(' + ((255 * r()) | 0) + ',' + ((255 * r()) | 0) + ',' + ((255 * r()) | 0) + ')';
        ctx.fillRect(s * i, 0, s, canvas.height);
    }

    var txt = 'Normal text';
    var itxt = 'Inversed text';

    ctx.fillStyle = '#fff';
    
    ctx.textBaseline = 'top';
    ctx.font = '80px impact'
    ctx.fillText(txt, 30, 20);

    ctx.fillInversedText(itxt, 30, 100);
    
    requestAnimationFrame(doCanvas);
}

/**
 * Canvas extension: fillInversedText
 * By Ken Fyrstenberg Nilsen 2013. Beta 1.
*/
CanvasRenderingContext2D.prototype.fillInversedText = function (txt, x, y) {

    //measure
    var tw = this.measureText(txt).width;
    var th = parseInt(ctx.font, '10');
    th = (th === 0) ? 16 : th;

    //setupp off-screen canvas
    var co = document.createElement('canvas');
    co.width = tw;
    co.height = th;

    //fill text
    var octx = co.getContext('2d');
    octx.font = this.font;
    octx.textBaseline = 'top';
    octx.fillText(txt, 0, 0);

    //get pixel buffers
    var ddata = this.getImageData(x, y, tw, th);
    var sdata = octx.getImageData(0, 0, tw, th);

    var dd = ddata.data;
    var ds = sdata.data;
    var len = ds.length;
    
    //invert
    for (var i = 0; i < len; i += 4) {
        if (ds[i + 3] > 0) {
            dd[i] = (255 - dd[i]);
            dd[i + 1] = (255 - dd[i + 1]);
            dd[i + 2] = (255 - dd[i + 2]);
        }
    }

    //result at x/y
    this.putImageData(ddata, x, y);
}

/**
 * Init generals
 */
ctx.fillStyle = '#000';
ctx.fillRect(0, 0, canvas.width, canvas.height);

function download() {
    var dt = canvas.toDataURL();
    this.href = dt; //this may not work in the future..
}
document.getElementById('download').addEventListener('click', download, false);

/**
 * Monkey patches
 */
window.requestAnimationFrame = (function () {
    return window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || function (callback) {
        window.setTimeout(callback, 1000 / 60);
    };
})();

window.cancelAnimationFrame = (function () {
    return window.cancelAnimationFrame || window.webkitCancelAnimationFrame || window.mozCancelAnimationFrame || function (timPtr) {
        window.clearTimeout(timPtr);
    };
})();

/**
 * START
 */
doCanvas();