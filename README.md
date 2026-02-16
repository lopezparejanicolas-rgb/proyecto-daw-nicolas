# Proyecto DAW - DevWebPro

## Descripción
Sistema de gestión web integrado con OpenLDAP.

## Tecnologías utilizadas
- HTML5
- CSS3
- JavaScript
- PHP
- OpenLDAP
- Git y GitHub

## Integración LDAP
Los usuarios almacenados en OpenLDAP pueden autenticarse mediante la clase ConexionLDAP, utilizando ldap_bind contra el DN correspondiente.

Ejemplo de DN:
uid=juan,ou=developers,dc=devwebpro,dc=local

