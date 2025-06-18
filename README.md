# 🐘 API Street Style & Co
Esta é a API que drá vida a plataforma de e-commerce [Street Style & Co](https://github.com/gPagio/multivix-7s-1b-pw).

## 🌟 1. Nome do Projeto e Tema Escolhido
- **Nome do Projeto**: API Street Style & Co
- **Tema Escolhido**: Loja de produtos de e-commerce

## 👥 2. Integrantes do Grupo
- Diogo Lima (6-2212861)
- Guilherme Pagio (6-2212925)
- Luana Dan (6-2212572)

## ⚙️ 4. Como Configurar a API

### Pré-requisitos
- Certifique-se de ter o [XAMPP](https://www.apachefriends.org/) instalado e configurado.

### Configuração do Banco de Dados
- O banco é automaticamente criado na primeira requisição enviada a API.
- Caso queira recria o banco do zero apague o arquivo `.setup_done` na pasta raiz da API.

### Configuração do Ambiente
   - Crie um arquivo `.env` na pasta raiz da api com as configurações do seu ambiente:
     ```env
     DB_HOST=host_banco
     DB_PORT=porta_porta
     DB_DATABASE=nome_banco
     DB_USERNAME=seu_usuario
     DB_PASSWORD=sua_senha
     ```
> [!WARNING]
> Não use aspas simples nos valores das variáveis de ambiente

### Iniciar o Servidor
   - Abra o XAMPP e inicie os serviços `Apache` e `MySQL`.
   - Coloque o projeto na pasta `htdocs` do XAMPP.

### End Points
Na pasta raiz do projeto existe uma pasta chamada endpoints, onde a mesma possui todos os endpoints usados para testar a API.

Para fazer o uso desses arquivos intale o [`Bruno`](https://www.usebruno.com/) e importe a coleção de endpoints (pasta mencionada anteriormente) pelo botão `Open Collection`, o qual pode ser encontrado clicando em três pontinhos do lado esquerdo da tela. 