// Esta função mostra uma mensagem em algum lugar da página por um curto tempo.
function showAlert(mensagem, targetElementId, timeout = 2000) {
    // Encontra o lugar onde queremos mostrar a mensagem.
    var messageDiv = document.getElementById(targetElementId);

    // Coloca a mensagem nesse lugar.
    messageDiv.innerHTML = mensagem;

    // Remove uma coisa chamada 'msgContato' do lugar (isso pode esconder ou decorar a mensagem).
    messageDiv.classList.remove('msgContato');

    // Espera por um tempo e depois faz algo.
    setTimeout(function () {
        // Adiciona de volta a 'msgContato' no lugar, possivelmente desfazendo mudanças feitas antes.
        messageDiv.classList.add('msgContato');
    }, timeout);
}

function displayError(erros) {

    let todosOsErros ="";

    for (const [key, value] of Object.entries(erros)) {
        todosOsErros +=`<div class="alert alert-danger">${value.join(", ")}</div>`;
    }

    if (todosOsErros) {
        showAlert(todosOsErros, "contatoMensagem");
    }

}

// Aqui estamos dizendo ao computador para prestar atenção quando alguém pressionar o botão de enviar no formulário.
function formContato(e) {
    // Não queremos que o formulário faça o que normalmente faria ao ser enviado, para evitar confusão.
    e.preventDefault();

    // Vamos pegar tudo o que alguém digitou no formulário - coisas como nome, e-mail, telefone, etc.
    var data = {
        nomeContato: document.getElementById("nomeContato").value,
        emailContato: document.getElementById("emailContato").value,
        foneContato: document.getElementById("foneContato").value,
        assuntoContato: document.getElementById("assuntoContato").value,
        mensContato: document.getElementById("mensContato").value
    };

    // Agora, vamos enviar essas informações para um lugar especial no computador que cuida dos e-mails.
    fetch('/contato/enviar', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify(data)
        })
        .then(response => {
            // Aqui, estamos verificando se o envio do e-mail foi bem-sucedido. Se não foi, dizemos que algo deu errado.
            if (!response.ok) {
                return response.json().then(errorData => {
                    throw errorData;
                })
            }
            return response.json();
        })
        .then(data => {
            if (data.success) {
                // Se tudo correu bem, mostramos uma mensagem de sucesso por um tempo curto.
                showAlert(`<br> <div class="alert alert-success">${data.success}</div>`, "contatoMensagem");
                // Também apagamos as informações do formulário para que alguém possa escrever algo novo.
                document.getElementById("formContato").reset();
            } else {
                showAlert(`<br> <div class="alert alert-danger">Erro ao enviar o email!</div>`, "contatoMensagem");
            }
        })
        .catch(error => {
            if(error.errors){
                displayError(error.errors);
            } else {
                console.log("Erro Desconhecido", error);
            }

        });

}

//---------------------------------------------------------------
//----------------------SALVAR EMAIL-----------------------------
//---------------------------------------------------------------



function formSalvarEmail(e)  {
    e.preventDefault(); // Evita a ação padrão de envio do formulário

    var data = {
        salvarEmail: document.getElementById("salvarEmail").value
    };

    fetch('contato/email', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
        },
        body: JSON.stringify(data)
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            showAlert(`<br> <div class="alert alert-success">${data.success}</div>`, "salvarMensagem");
            document.getElementById("formSalvarEmail").reset();
        } else {
            showAlert(`<br> <div class="alert alert-danger">Este e-mail já foi registrado.</div>`, "salvarMensagem");
        }
    })
    .catch(error => {
        if(error.errors){
            displayError(error.errors);
        } else {
            console.log("Erro Desconhecido", error);
        }
    });
}
