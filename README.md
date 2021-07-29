Para rodar o sistema, primeiramente vá para a pasta raiz e use o comando "composer install",
depois use o comando "php artisan key:generate" e cole a chave em APP_KEY no arquivo .env, 
logo depois configure o .env para o banco de dados que você está usando e então rode o comando
"php artisan migrate" para criar e configurar as tabelas da forma correta no seu banco, então 
já pode subir a aplicação usando o comando "php artisan serve" e no seu navegador pesquise
pela url "http://127.0.0.1:8000/clientes", se você fez tudo corretamente será exibido a view index.