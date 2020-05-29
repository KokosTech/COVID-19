var pp = 0

function q1(){
    var sec = document.getElementById('q1');
    var nsec = document.getElementById('q2');
    sec.remove();
    nsec.style.visibility = 'visible';
}

function q2(hmm){
    var sec = document.getElementById('q2');
    var nsec = document.getElementById('q3');
    if(hmm === 'bad'){
        this.pp += 1;
    }
    sec.remove();
    nsec.style.visibility = 'visible';
}

function q3(hmm){
    var sec = document.getElementById('q3');
    var nsec = document.getElementById('q4');
    if(hmm === 'bad'){
        this.pp += 5;
    }
    sec.remove();
    nsec.style.visibility = 'visible';
}

function q4(hmm){
    var sec = document.getElementById('q4');
    var nsec = document.getElementById('q5');
    if(hmm === 'bad'){
        this.pp += 2;
    }
    sec.remove();
    nsec.style.visibility = 'visible';
}

function q5(hmm){
    var sec = document.getElementById('q5');
    var nsec = document.getElementById('q6');
    if(hmm === 'bad'){
        this.pp += 3;
    }
    sec.remove();
    nsec.style.visibility = 'visible';
}

function q6(hmm){
    var sec = document.getElementById('q6');
    var nsec = document.getElementById('q7');
    if(hmm === 'bad'){
        this.pp += 3;
    }
    sec.remove();
    nsec.style.visibility = 'visible';
}

function q7(hmm){
    var sec = document.getElementById('q7');
    var nsec = document.getElementById('q8');
    if(hmm === 'bad'){
        this.pp += 5;
    }
    sec.remove();
    nsec.style.visibility = 'visible';
}

function q8(hmm){
    var sec = document.getElementById('q8');
    var nsec = document.getElementById('res');
    if(hmm === 'bad'){
        this.pp += 3;
    }
    sec.remove();
    nsec.style.visibility = 'visible';
    if(this.pp < 11){
        document.getElementById('hey').innerHTML = 'Упражнявайте социално дистанциране'
    } else {
        document.getElementById('hey').innerHTML = 'Бихме Ви препоръчали да се тествате'
    }
    
}




