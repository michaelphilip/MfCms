<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Cms\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Faker\Factory;

class TestController extends AbstractActionController
{
    public function indexAction()
    {
        //echo 'Test Controller: index action';
        $faker = Factory::create();

        return new ViewModel(array(
            'name' => $faker->name,
            'address' => $faker->address,
            'text' => $faker->text,
        ));
    }
    
    public function listAction()
    {
        echo 'list Action test controller';
    }
}
