function randomVideo() {

    var video_1 = document.getElementById("video_1").value;
    var video_2 = document.getElementById("video_2").value;
    var video_3 = document.getElementById("video_3").value;

    var o = new Array;

    o [1] = video_1,
    o [2] = video_2,
    o [3] = video_3;

    var r = Math.floor(Math.random() * o.length);

    0 == r && (r = 1), document.write('<source src="' + o[r] + '" type="video/mp4">');
}
