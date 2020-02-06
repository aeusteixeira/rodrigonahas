document.getElementById('name').addEventListener('blur', function(){
    document.getElementById('meuNome').innerHTML='';
    var nome = 'Me chamo ' + document.getElementById('name').value;
    var txt1 = document.getElementById("meuNome");
    var speed = 50;
    var cont = 0;

    function typeWriter() {
        if (cont < nome.length) {
            txt1.innerHTML += nome.charAt(cont);
            cont++;
            setTimeout(typeWriter, speed);
        } else {
            cont = 0;
        }
    }

   typeWriter();
});

document.getElementById('assunto').addEventListener('blur', function(){
    document.getElementById('precisoDe').innerHTML='';
    var assunto = ' e eu ' + document.getElementById('assunto').value;
    var txt1 = document.getElementById("precisoDe");
    var speed = 50;
    var cont = 0;

    function typeWriter() {
        if (cont < assunto.length) {
            txt1.innerHTML += assunto.charAt(cont);
            cont++;
            setTimeout(typeWriter, speed);
        } else {
            cont = 0;
        }
    }

   typeWriter();
});

document.getElementById('mensagem').addEventListener('blur', function(){
    document.getElementById('Necessidade').innerHTML='';
    var mensagem = document.getElementById('mensagem').value;
    var txt1 = document.getElementById("Necessidade");
    var speed = 50;
    var cont = 0;

    function typeWriter() {
        if (cont < mensagem.length) {
            txt1.innerHTML += mensagem.charAt(cont);
            cont++;
            setTimeout(typeWriter, speed);
        } else {
            cont = 0;
        }
    }

   typeWriter();
});