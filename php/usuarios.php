<html>

<head>

    <meta charset="UTF-8">

    <link rel="stylesheet" href="../css/layoutU.css" />
    <link rel="stylesheet" href="../css/body.css">

    <hgroup id="boot">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
        </script>
    </hgroup>


    <script>
    function cadastro() {
        alert("CADASTRO REALIZADO");

    }
    </script>


</head>

<body>

    <section id="corpo">
        <nav id="menu">
            <ol>
                <li><a href="http://localhost/Eryka.gs/PHP/USERS_CADASTROS/html/index.html">Home</li><br></a>
                <li><a href="http://localhost/Eryka.gs/PHP/USERS_CADASTROS/php/usuarios.php">Usuários</li></a><br>
                <li><a href="http://localhost/Eryka.gs/PHP/USERS_CADASTROS/html/cadastro.html">Cadastramento</li><br></a>
            </ol>



            <hgroup id="imagem">
                <IMG SRC="../imagens/asoec.jpg">
            </hgroup>
        </nav>
    </section>

    <aside id="infDireita">
        <hgroup id="informacoes">
            <h1 style="color: rgb(0, 0, 0); left: 50%; font-size: 42;">USUÁRIOS</h1>
        </hgroup>
        <br>
        </h4>
        </hgroup>
    </aside>
    </pre>
    </form>



    <?php 
include 'conecta_mysql.inc.php'; // caminho do seu arquivo de conexão ao banco de dados //
$sql = "SELECT * FROM cadastro"; 

   //resultado
   $res = $conexao->query($sql);

   //quantidade
   $qtd = $res->num_rows;

   if ($qtd > 0) {
    //Retornar todos os cadastro dentro da variavel res (resultado)


  
    print "<table class='table table-responsive ctnr table-striped table-dark  table-hover'>";
        print "<thead>";
                print "<tr>";
                    print "<th scope='col'>".'Nome'; 
                    print "<th scope='col'>".'E-mail';
                    print "<th scope='col'>".'CPF';
                    print "<th scope='col'>".'Estado';
                    print "<th scope='col'>".'Endereço';
                    print "<th scope='col'>".'Número';
                    print "<th scope='col'>".'Cidade';
                    print "<th scope='col'>".'Opções';
                    print "<th scope='col'>".'';
                print "</tr>";
            print "</thead>";
    while ($row = $res->fetch_object()) {
        
        print "<tr>";
            print "<td >".$row->nome;
            print "<td >".$row->email;
            print "<td >".$row->CPF;
            print "<td >".$row->estado;
            print "<td >".$row->endereco;
            print "<td >".$row->numero;
            print "<td >".$row->cidade;
            print "<td>
                        <button onclick=\"location.href='?page=editar&id=".$row->nome."';\" class='btn btn-success'>Editar</button>
                        <button onclick=\"location.href='?page='delete()'&id=".$row->nome."';\". class='btn btn-danger'>Excluir</button>
                  </td>";
            print "<td>
                       
                  </td>";
        print "</tr>";
    }
    print "</table>";
} else {
    print "<p class='alert alert-danger'>Não encontrou resultados!</p>";
}





?>





</body>

</html>