<?php

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
