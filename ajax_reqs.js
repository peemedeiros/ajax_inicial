function insert(){

    // Recupera valores dos inputs
    let inputNome = $("#nome").val();
    let inputIdade = $("#idade").val();

    // Cria requisição AJAX
    $.ajax({
        url:"insert.php",
        type:"POST",
        data:{
            nome:inputNome,
            idade:inputIdade
        },
        // Bloco será executado 
        beforeSend: function(){
            console.log('carregando')
        },
        success: function(data){
            if(data == "ERRO")
                alert("deu ruim!")
            else
                list()
        },
        error: function(){
            alert('erro')
        }
    })
}

function excluir(id){
    $.ajax({
        url:'delete.php',
        type:'POST',
        data:{
            id:id
        },
        success:function(data){
            list()
        }
    })
}

function edit(id){
    $.ajax({
        url:'edit.php',
        type:'POST',
        data:{
            id:id
        },
        success:function(data){
            var json = JSON.parse(data)

            $("#nome").val(json.nome)
            $("#idade").val(json.idade)

            $("#botao_enviar").attr('onclick', `editarRegistro(${json.id})`)
        }
    })
}

function editarRegistro(id){

    let inputNome = $("#nome").val();
    let inputIdade = $("#idade").val();

    $.ajax({
        url:'editarRegistro.php',
        type:'POST',
        data:{
            id:id,
            nome:inputNome,
            idade:inputIdade
        },
        success:function(data){
            list()
        }
    })
}


function list(){
    $.ajax({
        url:'list.php',
        type:'POST',
        success:function(data){
            $("#tbody").html(data)
        }
    })
}