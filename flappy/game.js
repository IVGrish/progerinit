var canvas = document.getElementById("flappy");
var ctx = canvas.getContext("2d");

var bird = new Image();
bird.src = "../img/flappy_bird_bird.png";

var bg = new Image();
bg.src = "../img/flappy_bird_bg.png";

var fg = new Image();
fg.src = "../img/flappy_bird_fg.png";

var pipeUp = new Image();
pipeUp.src = "../img/flappy_bird_pipeUp.png";

var pipeDown = new Image();
pipeDown.src = "../img/flappy_bird_pipeBottom.png";

var fly = new Audio();
var score_audio = new Audio();

fly.src = "../audio/fly.mp3";
score_audio.src = "../audio/score.mp3";

var gap = 90;

document.addEventListener("keydown", moveUp);

function moveUp() {
    yPos -= 25;
    fly.play();
}

var pipe = [];

pipe[0] = {
    x: canvas.width,
    y: 0
}

var xPos = 10;
var yPos = 150;
var grav = 1.5;
var score = 0;

function draw() {
    ctx.drawImage(bg, 0, 0);

    for (let i = 0; i < pipe.length; i++) {
        ctx.drawImage(pipeUp, pipe[i].x, pipe[i].y);
        ctx.drawImage(pipeDown, pipe[i].x, pipe[i].y + pipeUp.height + gap);

        pipe[i].x--;
        
        if (pipe[i].x == 125) {
            pipe.push({
                x: canvas.width,
                y: Math.floor(Math.random() * pipeUp.height) - pipeUp.height
            });
        }

        if(xPos + bird.width >= pipe[i].x
            && xPos <= pipe[i].x + pipeUp.width
            && (yPos <= pipe[i].y + pipeUp.height
            || yPos + bird.height >= pipe[i].y + pipeUp.height + gap) || yPos + bird.height >= canvas.height - fg.height) {
                    location.reload();
        }

        if(pipe[i].x == 5) {
            score++;
            score_audio.play();
        }
        
    }

    ctx.drawImage(fg, 0, canvas.height - fg.height);
    ctx.drawImage(bird, xPos, yPos);

    yPos += grav;

    ctx.fillStyle = "#000";
    ctx.font = "24px Verdana";
    ctx.fillText("Счет: " + score, 10, canvas.height - 20);

    requestAnimationFrame(draw);
}

pipeDown.onload = draw;