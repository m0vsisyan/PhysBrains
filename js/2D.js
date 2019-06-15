var myGameArea;
var myGamePiece;
var myoverlay;
var myresult;
var accel = false;

function startGame() {
    myGameArea = new gamearea("canvascontainer");
    //myresult = new component(myGameArea, "30px", "Consolas", "white", 30, 50, "text");
    //myresult.text = "Land me Safely"
    myGamePiece = new component(30, 30, "red", 50, 50);
    //myoverlay = new component(myGameArea, 640, 360, "rgba(0,255,0,0.1)", 0, 0);    
    myGameArea.start();
}

function gamearea() {
    this.canvas = document.createElement("canvas");
    this.canvas.width = 320;
    this.canvas.height = 180;    
    document.getElementById("canvascontainer").appendChild(this.canvas);
    this.context = this.canvas.getContext("2d");
    this.start = function() {
        this.interval = setInterval(updateGameArea, 20);
    }
    this.stop = function() {
        clearInterval(this.interval);
        this.pause = true;
    }    
    this.clear = function(){
        this.context.clearRect(0, 0, this.canvas.width, this.canvas.height);
    }
}

function component(width, height, color, x, y, type) {

    this.type = type;
    if (type == "image") {
        this.image = new Image();
        this.image.src = color;
    }
    this.width = width;
    this.height = height;
    this.angle = 0;
    this.moveangle = 0;
    this.color = color;
    this.rotation = 0;
    this.speed = 0;
    this.fallspeed = 0;
    this.x = x;
    this.y = y;
    this.speedX = 0;
    this.speedY = 0;
    this.update = function() {
        ctx = myGameArea.context;
        ctx.save();
        ctx.translate(this.x, this.y);        
        ctx.rotate(this.angle);
        if (this.type == "text") {
            ctx.font = this.width + " " + this.height;
            ctx.fillStyle = color;
            ctx.fillText(this.text, this.x, this.y);
        } else {        
            ctx.fillStyle = this.color;
            ctx.fillRect(-(this.width / 2), -(this.height / 2), this.width, this.height);        
        }
        ctx.restore();    
    }
    this.newGravityPos = function(degrees, thrust) {
        degrees -= 90;
        angle = degrees * Math.PI / 180;
        this.speedX += thrust * Math.cos(angle);
        this.speedY += thrust * Math.sin(angle);
        this.calcSpeedAngle();
    }
    this.calcSpeedAngle = function(){
        this.speed = Math.sqrt((this.speedX * this.speedX) + (this.speedY * this.speedY));
    }
}

function updateGameArea() {
    myGameArea.clear();
    myGamePiece.x += myGamePiece.speedX;
    myGamePiece.y += myGamePiece.speedY;    
    if (accel == true || (document.key && document.key == 38)) {
        myGamePiece.newGravityPos(0, 0.2);
    }
    myGamePiece.newGravityPos(180, 0.05);
    if (myGamePiece.speed > 2 || myGamePiece.y < -15) {
    //    myoverlay.color = "rgba(255,0,0,0.1)"
    } else {
    //    myoverlay.color = "rgba(0,255,0,0.1)"
    }    
    myGamePiece.update();
    //myoverlay.update();    
    if (myGamePiece.y > 165) {
        myGameArea.stop();
        if (myGamePiece.speed > 2) {
            //myresult.width = "26px";
            //myresult.x = 10;
            //myresult.text = "Landing was to hard!";
            //myoverlay.color = "rgba(255,0,0,0.1)"
        } else {
            //myoverlay.color = "rgba(0,255,0,0.1)"
            //myresult.text = "Nice landing!";
        }
    }
    if (myGamePiece.y < -15) {
        myGameArea.stop();
        //myresult.width = "18px";
        //myresult.x = 4;
        //myresult.text = "You lost the red square!";
    }
    //myresult.update();            
}

function accelerate(x) {
    accel = x;
}

function restartgame(x) {
    myGameArea.stop();
    document.getElementById("canvascontainer").innerHTML = "";
    startGame();
}

startGame();
