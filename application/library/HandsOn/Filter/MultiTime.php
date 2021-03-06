<?php
/**
 * Singular - Academic Resource Planning
 *
 * LICENÇA
 *
 * Este arquivo-fonte é propriedade da Númera Soluções e Sistemas Ltda.,
 * empresa brasileira inscrita no CNPJ/MF sob nº 08.179.010/0001-48.
 * A reprodução parcial ou total do conteúdo é expressamente vedada, conforme
 * descrição detalhada da licença, disponível no documento "docs/license.txt".
 * Se o arquivo estiver ausente, por favor entre em contato pelo email
 * license@numera.com.br para que possamos enviar uma cópia imediatamente. 
 *
 * @copyright  Copyright (c) 2008 Númera Soluções e Sistemas Ltda. (http://www.numera.com.br)
 * @license    http://www.numera.com.br/license/singular     Singular 1.0 License
 * @version    $Id$
 */


class HandsOn_Filter_MultiTime implements Zend_Filter_Interface
{
    public function filter($value)
    {
        $time = explode(':', $value);
        if (isset($time[1]) && is_numeric($time[0]) && $time[0] <= 31 &&
                  is_numeric($time[1]) && $time[1] <= 12)
        {
        	return mktime(0, 0, $time[1], $time[0]);
        }
        return $value;
    }
}