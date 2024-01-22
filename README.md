Site PHP com MySQL
Este repositório contém um site em PHP com funcionalidades de registro e manipulação de usuários utilizando um banco de dados MySQL.

Introdução
Bem-vindo a este site experimental, desenvolvido com o propósito de ser utilizado como portfólio. O objetivo principal é reproduzir uma página web comum, destacando a construção do design utilizando CSS e o framework front-end "Bootstrap". A conexão com o banco de dados e as operações CRUD (Create, Read, Update e Delete) com o MySQL foram implementadas utilizando o PDO (PHP Data Object), e o código back-end foi desenvolvido em PHP.

Passo a passo para execução
Download e Descompactação:

Baixe o arquivo compactado e descompacte os arquivos internos.
Instalação do XAMPP:

Instale o servidor XAMPP e mova os arquivos para a pasta "htdocs", exceto o arquivo 'usuario.sql'.
Configuração do Banco de Dados:

Abra o XAMPP, inicie os serviços Apache e MySQL, e importe o arquivo 'usuario.sql' para dentro do banco de dados MySQL utilizando o phpMyAdmin. Consulte este tutorial em vídeo para a importação 'https://youtu.be/mFI88qPAdJI?si=DOU3yQ91kOwv4vlx'.
Acesso à Aplicação:

Acesse a URL "http://localhost/portfolio/index.php". Em alguns casos, pode ser necessário utilizar "http://localhost:8080/portfolio/index.php" ou "http://localhost:443/portfolio/index.php".
Execução
Ao acessar a aplicação, você será direcionado para uma tela de cadastro de usuário com um link destacado, indicando o cadastro dentro do formulário. Após preencher o formulário e clicar em 'Cadastrar', você será redirecionado para uma tela de login. Nesta tela, preencha os campos 'email' e 'senha' com os mesmos dados do cadastro.

Após preencher corretamente a tela de login, a autenticação será realizada, e você será redirecionado para a página inicial do website. Nesta página, você encontrará funcionalidades como 'edição', 'exclusão' e 'desligamento de sessão'. Nestes campos, você pode editar os dados cadastrados, excluir a conta logada e encerrar a sessão, retornando à tela inicial.

Este projeto é uma demonstração de como criar um site utilizando PHP, Bootstrap e MySQL. Se tiver alguma dúvida ou sugestão, entre em contato pelo e-mail: andersondev65@gmail.com.
