<?php

class Config {
    
    /*** INFORMAÇÕES DE BANCO DE DADOS*/
    protected $BANCO_HOST = "localhost";
    protected $BANCO_USER = "root";
    protected $BANCO_SENHA = "";
    protected $BANCO_BD = "sistemaloja17";


    /*** INFORMAÇÕES DO SITE*/
    /*** url do site */
    const SITE_URL = "http://localhost";
    /*** pasta padrão do site */
    const SITE_PASTA = "loja";
    /*** Nome do site*/
    const SITE_NOME = "Mini loja em PHP 2017";
    /*** E-mail do ADM do site*/
    const SITE_EMAIL_ADM = "alissonvinicios04@gmail.com";
    
    /*** DADOS DO SERVIDOR DE E-MAIL*/
    const EMAIL_HOST = "";
    const EMAIL_USER = "";
    const EMAIL_NOME = "";
    const EMAIL_PORTA = "";
    const EMAIL_SENHA = "";
    const EMAIL_SMTPAUTH = "";
    const EMAIL_SMTPSECURE = "";
}
