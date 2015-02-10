# MuralDeRecados
Projeto exemplo feito em PHP de um sistema de mural de recados

# Config

Adicione um virtual host ao arquivo httpd.conf do apache

```XML
<VirtualHost 127.0.0.1:80>
ServerName muralderecados.com
DocumentRoot "<diretorio da aplicacao>"
DirectoryIndex index.php
</VirtualHost>

<Directory "<diretorio da aplicacao>">
Options FollowSymLinks Indexes
AllowOverride All
Order deny,allow
Allow from All
deny from all
</Directory>
```

Adicione uma entrada para localhost no arquivo hosts do windos

```XML
127.0.0.1 muralderecados.com
```

Lembrando que ao adiconar esse domínio fictício ao arquivo de hosts o mesmo não poderá ser acessado na internet caso exista.
