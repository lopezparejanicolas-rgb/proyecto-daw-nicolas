<?php
/**
 * Clase ConexionLDAP
 * Gestiona la conexión y autenticación contra OpenLDAP
 * 
 * @author TuNombre
 * @version 1.0
 */
class ConexionLDAP {

    private $ldapconn;

    /**
     * Establece conexión con el servidor LDAP
     */
    public function conectar() {
        $this->ldapconn = ldap_connect("ldap://localhost");
        ldap_set_option($this->ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3);
        return $this->ldapconn;
    }

    /**
     * Autentica un usuario del directorio
     */
    public function autenticar($dn, $password) {
        return ldap_bind($this->ldapconn, $dn, $password);
    }
}
?>
