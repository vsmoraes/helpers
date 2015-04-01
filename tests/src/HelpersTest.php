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

}
