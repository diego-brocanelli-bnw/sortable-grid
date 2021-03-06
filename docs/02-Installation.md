# 2. Instalação 

## Requisitos do servidor

O pacote Sortable Grid possui os seguintes requisitos básicos:

* PHP >= 7.0.0
* Laravel >= 5.5

## Baixando o pacote e as dependências

Para baixar o pacote, será necessário usar o [Composer](http://getcomposer.org/).
Com o composer devidamente instalado no sistema operacional, execute o seguinte comando:

```bash
$ cd /diretorio/meu/projeto/laravel/
$ composer require plexi/sortable-grid
```

O comando acima vai adicionar automaticamente a chamada para a última versão do Sortable Grid no
arquivo composer.json do Laravel e em seguida efetuar o processo de instalação.

Para instalar uma versão específica, basta substituir pelo comando:

```bash
$ composer require plexi/sortable-grid:1.1.6
```

## Visualizando as funcionalidades

O Sortable Grid possui um grid de teste para a verificação das funcionalidades em execução. Este grid está disponível apenas quando o arquivo .env está configurado com os parâmetros APP_DEBUG = true e APP_ENV = 'local'.

Para acessar o grid de exemplo, basta seguir a url:

```text
http://www.meuprojeto.com.br/sortable-grid
```

Nota: troque o domínio do exemplo ('meuprojeto.com.br') para o domínio onde o seu projeto Laravel está instalado.

## Sumário

  1. [Sobre](01-About.md)
  2. [Instalação](02-Installation.md)
  3. [Como Usar](03-Usage.md)
  4. [Extras](04-Extras.md)