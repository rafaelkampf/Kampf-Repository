Essas instruções permitirão que você obtenha uma cópia do projeto em operação na sua máquina local para fins de desenvolvimento e teste.

FUNCIONALIDADES:

Registro e cadastro de usuário no banco de dados;
Login e autenticação do usuário no painel principal;
Logout do usuário;

PRÉ-REQUISITOS:

Servidor web (apache) e banco de dados baseado em MySQL (Neste caso, o XAMPP);
PHP;

INSTALAÇÂO:

Importe o arquivo login.sql para o diretório do servidor web;
Copie todo o resto do repositório em seu servidor web;
No caso do XAMPP, extraia os arquivos da pasta zipada e passe o repositório para a pasta do seu disco local -> "C:\xampp\htdocs\"coloque aqui";
Se necessário, configure as variáveis $servidor, $usuario, $senha, $base com as credenciais do seu sistema;
Abra a página no seu navegador e teste.

CONSTRUÍDO COM:
HTML, CSS, PHP, MYSQL E JAVASCRIPT.

ESTRUTURA DO PROJETO:

Index.php - Página principal de login e autenticação;
Cadastro.php - Página para cadastro de usuário;
conexaodb.php - Página para a conexão com o banco de dados;
portal.php - Página de acesso após a autenticação do usuário;
integradorastyle.css e cadastro.css - Página de estilo CSS para as páginas index.php e cadastro.php respectivamente;
protecao.php - Script contendo a verificação se existe um usuário conectado;
logout.php - Script para desconectar o usuário do portal;
horizonte.jpeg - imagem para o background das páginas de login e cadastro.

DESENVOLVIDO POR:
Rafael de Andrade Kampf
