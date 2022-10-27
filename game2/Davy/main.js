"use strict";

var cvs = document.getElementById("canvas");
var ctx = cvs.getContext("2d");

// load images
var bird = new Image();
var bg = new Image();
var pipeNorth = new Image();
var pipeSouth = new Image();

bird.src = "images/bird2.jpg";
bg.src = "images/bg2.jpg";
pipeNorth.src = "images/pipenoorden.png";
pipeSouth.src = "images/pipezuiden.png";

// some variables
var gap = 200;
var constant;
var bX = 20;
var bY = cvs.height / 2;
var gravity = 1.5;
var score = 0;
var speed = 2;
var lengthToPipe = 125 * speed

// audio files
var fly = new Audio();
var scor = new Audio();

fly.src = "sounds/fly.mp3";
scor.src = "sounds/score.mp3";

// on key down
document.addEventListener("keydown", moveUp);

function moveUp() {
  bY -= 50;
}

// pipe coordinates
var pipe = [];

pipe[0] = {
  x: cvs.width,

  y: 0,
};

// draw images
function draw() {
  bg.width = 500;
  bg.height = 512;
  ctx.drawImage(bg, 0, 0);

  for (var i = 0; i < pipe.length; i++) {
    constant = pipeNorth.height + gap;

    ctx.drawImage(pipeNorth, pipe[i].x, pipe[i].y);
    ctx.drawImage(pipeSouth, pipe[i].x, pipe[i].y + constant);

    pipe[i].x-= 2;

    if (pipe[i].x == lengthToPipe) {
      pipe.push({
        x: cvs.width,
        y: Math.floor(Math.random() * pipeNorth.height) - pipeNorth.height,
      });
    }

    // detect collision
    if (
      (bX + bird.width >= pipe[i].x &&
        bX <= pipe[i].x + pipeNorth.width &&
        (bY <= pipe[i].y + pipeNorth.height ||
          bY + bird.height >= pipe[i].y + constant)) ||
      bY + bird.height >= cvs.height
    ) {
      location.reload(); // reload the page
    }

    if (pipe[i].x == 4) {
      score++;
      scor.play();
    }
  }

  ctx.drawImage(bird, bX, bY);

  bY += gravity;
  ctx.fillStyle = "#fff";
  ctx.font = "20px Verdana";
  ctx.fillText("Score : " + score, 10, cvs.height - 20);
  requestAnimationFrame(draw);
}

draw();