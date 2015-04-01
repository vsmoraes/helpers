<?php

class HelpersTest extends PHPUnit_Framework_TestCase
{

    public function testStrMask()
    {
        $string = '123123123123';
        $masked_string = '123.123-123/123';

        $this->assertEquals($masked_string, str_mask($string, '###.###-###/###'));
    }

    public function testFormatCpf()
    {
        $string = '86536778790'; // cpf generated with: http://www.geradorcpf.com/
        $masked_string = '865.367.787-90';

        $this->assertEquals($masked_string, format_cpf($string));
    }

    public function testFormatCnpj()
    {
        $string = '03505358000164';
        $masked_string = '03.505.358/0001-64'; // cnpj generated with: http://www.geradorcnpj.com/

        $this->assertEquals($masked_string, format_cnpj($string));
    }

    public function testFormatCep()
    {
        $string = '99999999';
        $masked_string = '99999-999';

        $this->assertEquals($masked_string, format_cep($string));
    }

    public function testFormatTelefone()
    {
        $string = '99999999999';
        $masked_string = '(99) 99999-9999';

        $this->assertEquals($masked_string, format_telefone($string));
    }

    public function testFormatData()
    {
        $this->assertEquals(date('d/m/Y'), format_data(date('Y-m-d')));
    }

    public function testFilesizeFormat()
    {
        $this->assertEquals('1KB', filesize_format(1024));
        $this->assertEquals('1MB', filesize_format(1024*1024));
        $this->assertEquals('1GB', filesize_format(1024*1024*1024));
        $this->assertEquals('1TB', filesize_format(1024*1024*1024*1024));
    }

}
