<?php
/**
 * Created by PhpStorm.
 * User: aurelwcs
 * Date: 09/10/18
 * Time: 11:17
 */

namespace Unit;

require_once 'WorkInterface.php';

class Worker extends AbstractUnit implements WorkInterface
{
    public function __construct()
    {
        echo "Oui monseigneur !" . '<br>';
    }
    public function work(): void
    {
        echo "Je travaille !" . '<br>';
    }
}
