<?php

namespace OmekaTheme\Helper;

use Zend\View\Helper\AbstractHelper;

class ValuesForProperties extends AbstractHelper
{
    public function __invoke()
    {
        $services = $this->getView()->getHelperPluginManager()->getServiceLocator();
        $connection = $services->get('Omeka\Connection');
        $queryCreator = 'SELECT DISTINCT `value` from `value` where `property_id` = 5';
        $creators = $connection->query($queryCreator)->fetchAll(\PDO::FETCH_COLUMN);

        return json_encode($creators);
    }
}
