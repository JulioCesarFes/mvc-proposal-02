# Propostas de MVC 02

Usei como base a proposta 01. Puxei de lá os arquivos `Route.php`, `Model.php` e `index.php`.

## index
O arquivo `index.php` ficou muito menor, uma vez que agora só dá `require` em arquivos da pasta `config`:
```php
<?php

require 'config/constants.php';
require 'config/autoloader.php';
require 'config/scripts.php';
require 'config/routes.php';
```

## constants
Criei um arquivo para guardar os valores constantes e globais, que funcionam como configurações do site. Por exemplo, os dados de acesso do banco de dados.

## autoloader
<sup>Require automático dos arquivos de Classes.</sup>

O autoloader agora faz diferenciação entre Classes de Controller, Model e do próprio Sistema. Isso foi necessário para dividir em pastas.

## routes
Criei um arquivo separado para manter os registros de rota.

## verificações no router
Agora o Router só permite que você vincule Controllers e não outras Classes.

## scripts
Agora o MVC conta com as pastas `assets/scripts`, dentro delas você pode criar arquivos javascript que funcionam de forma geral (no sistema todo) e de forma localizada (somente naquela tela).
Dentro da pasta `config` existe um arquivo chamado `scripts.php` onde você declara os arquivos que serão importados no sistema todo.

## templates
Agora o MVC conta também com um sistema de templates que englobam o html a ser exibido, muito útil para fazer o menu do sistema, por exemplo. Para isso temos a pasta `templates` que já conta com o `application.php` (o template padrão do sistema, que pode ser alterado a qualquer momento.

Para criar outro template, basta criar um novo arquivo, posicionar o conteúdo lá dentro;
<sub>other_template.php</sub>
```html
<h1>Other template</h1>
<main><?php $content(); ?></main>
```
E declarar no inicio do seu Controller.
```php
<?php class MyController extends Controller {
  static protected $template = 'other_template';
}
```

# Próximas alterações
 - remover o autoloader do config
 - mover /templates para /views
 - criar uma pasta /app para /controller, /model e /view
