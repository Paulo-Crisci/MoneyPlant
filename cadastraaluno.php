<?php
require_once "conexao.php";
		$nome=@$_POST['nome'];
		$cep=@$_POST['cep'];
		
		if ($nome == ''){
			$logradouro = "";
			$bairro		= "";
			$localidade = "";
			$uf			= "";
		}
		if ($cep!=''){
			$arq = file_get_contents('https://viacep.com.br/ws/'.$cep.'/json/');
			$json = json_decode($arq);
			$logradouro = $json->logradouro;
			$bairro		= $json->bairro;
			$localidade = $json->localidade;
			$uf			= $json->uf;
        }
        if (isset($_POST["submit"])){
           
            $NOME = $_POST['nome'];
            $IDADE = $_POST['nome'];
            $CPF = $_POST['nome'];
            $RG = $_POST['nome'];
            $DNASCIMENTO = $_POST['nome'];
            $SIGNO = $_POST['nome'];
            $MAE = $_POST['nome'];
            $PAI = $_POST['nome'];
            $EMAIL = $_POST['email'];
            $SENHA = $_POST['email'];
            $CEP = $_POST['cep'];
            $RUA = $_POST['rua'];
            $BAIRRO = $_POST['bairro'];
            $CIDADE = $_POST['cidade'];
            $ESTADO = $_POST['estado'];
            $NUMERO = $_POST['numero'];
            
            $TELEFONE = $_POST['telefone'];
            $DISCIPLINA = $_POST['disciplina'];
            
            $sql = "INSERT INTO tbalunos (nome, cep, rua, bairro, cidade, estado, numero, email, telefone, disciplina)  VALUES ('$NOME', '$CEP', '$RUA', '$BAIRRO', '$CIDADE', '$ESTADO', '$NUMERO', '$EMAIL', '$TELEFONE', '$DISCIPLINA')";
            
        if (mysqli_query($conn, $sql)){
            echo "disciplina cadastrada com sucesso";
            header("location:cadastraaluno.php");
       }else{
            echo "erro: " . $sql . "<br>" . mysqli_error($conn);
        }
            mysqli_close($conn);
        }
		?>
 
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Insere dados</title>
    <link rel="stylesheet" href="style3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>


    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Cadastrar Aluno</h2>
                    </div>
                    <p>Preencha os campos abaixo para fazer o cadastro do aluno</p>
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Nome do Aluno</label>
                            <input type="text" name="nome" class="form-control" value="<?php echo $nome; ?>">
                            
                        </div>
                        <div class="form-group">
                            <label>IDADE</label>
                            <input type="text" name="idade" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>CPF</label>
                            <input type="text" name="cpf" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>RG</label>
                            <input type="text" name="rg" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>DATA DE NASCIMENTO</label>
                            <input type="text" name="dtnascimento" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>SIGNO</label>
                            <input type="text" name="signo" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>MÃE</label>
                            <input type="text" name="nmae" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>PAI</label>
                            <input type="text" name="npai" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>SENHA</label>
                            <input type="text" name="senha" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>Digite o CEP</label>
                           
                            <input type="text" name="cep" class="form-control" value="<?php echo $cep; ?>">
                        </div>
                        
                        <button type="submit">Verificar CEP</button>
                    
                        
                       
                        <div class="form-group">
                            <label>Rua</label>
                            <input type="text" name="rua" id="rua" class="form-control" value="<?php echo $logradouro;?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Bairro</label>
                            <input type="text" name="bairro" class="form-control" value="<?php echo $bairro;?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Cidade</label>
                            <input type="text" name="cidade" class="form-control" value="<?php echo $localidade;?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" name="estado" class="form-control" size="30" value="<?php echo $uf;?>">
                            
                        </div>
                        <div class="form-group">
                            <label>Numero</label>
                            <input type="text" name="numero" class="form-control" size="30">
                            
                        </div>
                       
                        <div class="form-group">
                            <label>Telefone FIXO</label>
                            <input type="text" name="telefone" class="form-control">
                            
                        </div>
                        <div class="form-group">
                            <label>CELULAR</label>
                            <input type="text" name="ncelular" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>ALTURA</label>
                            <input type="text" name="altura" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>PESO</label>
                            <input type="text" name="peso" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>TIPO SANGUINEO</label>
                            <input type="text" name="tsang" class="form-control" >
                           
                        </div>
                        <div class="form-group">
                            <label>COR</label>
                            <input type="text" name="cor" class="form-control" >
                           
                        </div>
                       
                        
                        <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
                        <a href="index.php" class="btn btn-default">Voltar</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>