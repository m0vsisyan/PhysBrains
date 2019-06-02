let matrix = []; // Մատրիցի ստեղծում
let rows = 40; // Տողերի քանակ
let columns = 40; // Սյուների քանակ

for (let y = 0; y < rows; y++) {
matrix[y] = []; // Մատրիցի նոր տողի ստեղծում
for (let x = 0; x < columns; x++) {
let a = Math.floor(Math.random() * 100);
if (a >= 0 && a < 20) {
matrix[y][x] = 0; 
}
else if (a >= 20 && a < 80) {
matrix[y][x] = 1; 
}
else if (a >= 80 && a < 85) {
matrix[y][x] = 2; 
}
else if (a >= 85 && a < 87) {
matrix[y][x] = 3; 
}
else if (a >= 87 && a < 87.5) {
    matrix[y][x] = 4; 
}
else if (a >= 87.5 && a < 90) {
    matrix[y][x] = 5; 
}
else matrix[y][x] = 0;
}
}

// stex zangvacnery verjum Arr barov
var grassArr = [];
var grassEaterArr = [];
var predatorArr = [];
var changerArr = [];
var monsterArr = [];
var side = 20;



function setup() {
    frameRate(5);
    createCanvas(matrix[0].length * side, matrix.length * side);
    background('#acacac');

//pttvum em matrix mejov u stexcum em object

    for (var y = 0; y < matrix.length; y++) {
        for (var x = 0; x < matrix[y].length; x++) {

            if (matrix[y][x] == 1) {
                var gr = new Grass(x, y, 1);
                grassArr.push(gr)
            }
            else if (matrix[y][x] == 2) {
                var et = new GrassEater(x,y,2);
                grassEaterArr.push(et);
                
            }
            else if (matrix[y][x] == 3) {
                var etet = new Predator(x,y,3);
                predatorArr.push(etet);
                
            }  
            else if (matrix[y][x] == 4) {
                var fr = new Change(x,y,4);
                changerArr.push(fr);
                
            }
            else if (matrix[y][x] == 5) {
                var mo = new Monster(x,y,5);
                monsterArr.push(mo);
                
            }
 
        }
    }
 
}
//draw uxaki nerkuma
function draw() {

    for (var y = 0; y < matrix.length; y++) {
        for (var x = 0; x < matrix[y].length; x++) {

            if (matrix[y][x] == 1) {
                fill("green");
                rect(x * side, y * side, side, side);
            }
            else if (matrix[y][x] == 2) {
                fill("yellow");
                rect(x * side, y * side, side, side);
            }
            else if (matrix[y][x] == 0) {
                fill("#acacac");
                rect(x * side, y * side, side, side);
            }
            else if (matrix[y][x] == 3) {
                fill("red");
                rect(x * side, y * side, side, side);
            } else if (matrix[y][x] == 4) {
                fill("blue");
                rect(x * side, y * side, side, side);
            }
            else if (matrix[y][x] == 5) {
                fill("white");
                rect(x * side, y * side, side, side);
            }
            
        }
    }

    //kanchum em methodnery
    for (var i in grassArr) {
        grassArr[i].mul();
    }
    
     for (var i in grassEaterArr) {
        grassEaterArr[i].eat();
        grassEaterArr[i].mul();
        grassEaterArr[i].move();
    }
    
    for (var i in predatorArr) {
        predatorArr[i].eat();
        predatorArr[i].mul();
        predatorArr[i].move();
    }

    for (var i in changerArr) {
        changerArr[i].change();
        changerArr[i].mul();
        changerArr[i].move();
    }

    for (var i in monsterArr) {
        monsterArr[i].mul();
        monsterArr[i].eat();
        monsterArr[i].move();
    }

}