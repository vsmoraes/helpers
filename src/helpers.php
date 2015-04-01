<?php

use Carbon\Carbon;

if (! function_exists('str_mask')) {

    /**
     * Return the given string formated with the mask
     *
     * @param $string
     * @param $mask
     * @return string
     */
    function str_mask($string, $mask)
    {
        if ( trim($string) == '' ) {
            return '';
        }

        for ($i = 0; $i < strlen($string); $i++) {
            $mask[strpos($mask, '#')] = $string[$i];
        }

        return str_replace('#', '', $mask);
    }
}

if (! function_exists('format_cpf')) {

    /**
     * Format the given string as CPF (Brazil)
     *
     * @param $cpf
     * @return string
     */
    function format_cpf($cpf)
    {
        return str_mask($cpf, '###.###.###-##');
    }
}


if (! function_exists('format_cnpj')) {

    /**
     * Format the given string as CNPJ (Brazil)
     *
     * @param $cnpj
     * @return string
     */
    function format_cnpj($cnpj)
    {
        return str_mask($cnpj, '##.###.###/####-##');
    }
}

if (! function_exists('format_cep')) {

    /**
     * Format the given string as mail code (Brazil)
     *
     * @param $cep
     * @return string
     */
    function format_cep($cep)
    {
        return str_mask($cep, '#####-###');
    }
}

if (! function_exists('format_telefone')) {

    /**
     * Format the given string as phone number (Brazil)
     *
     * @param $telefone
     * @return string
     */
    function format_telefone($telefone)
    {
        return str_mask($telefone, '(##) #####-####');
    }
}

if (! function_exists('format_data')) {

    /**
     * Format the given date
     *
     * @param $date
     * @param $from_format
     * @param $to_format
     * @return string
     */
    function format_data($date, $from_format = 'Y-m-d', $to_format = 'd/m/Y')
    {
        return Carbon::createFromFormat($from_format, $date)->format($to_format);
    }
}
