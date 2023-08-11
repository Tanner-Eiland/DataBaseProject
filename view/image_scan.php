<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camera</title>
    <script src="https://docs.opencv.org/4.7.0/opencv.js" async></script>
<!-- warning: loading OpenCV can take some time. Load asynchronously -->
<script src="https://cdn.jsdelivr.net/gh/ColonelParrot/jscanify@master/src/jscanify.min.js"></script>
    
</head>
<body>
    <video hidden id="video" width = 600 height = 600></video>
    <canvas hidden id="canvas" width = 600 height = 600></canvas>  <!-- original video -->
    <canvas id="result" width = 600 height = 600></canvas>  <!-- highlighted video -->

<script>
    const scanner = new jscanify();
    const canvasCtx = canvas.getContext("2d");
    const resultCtx = result.getContext("2d");
    navigator.mediaDevices.getUserMedia({ video: true }).then((stream) => {
    video.srcObject = stream;
    video.onloadedmetadata = () => {
    video.play();

    setInterval(() => {
      canvasCtx.drawImage(video,0,0);
      const resultCanvas = scanner.highlightPaper(canvas);
      resultCtx.drawImage(resultCanvas,0,0);
    }, 10);
  };
});


</script>
<p><a href=".?action=home_page">Home Page</a></p>
</body>
</html>