<?php

namespace TomekWlod\Geocoder\Command;

use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Phaseii\CoreBundle\Entity\Deployment;
use Doctrine\ORM\Tools\Pagination\Paginator;

class GeocodeCommand extends \Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand
{
    protected function configure()
    {
        parent::configure();
        
        $this
            ->setName('tomekwlod:geocoder:geocode')
            ->setDescription('Geocoding the locations with no coords')
        ;
    }
    
    protected function execute(InputInterface $input, OutputInterface $output) 
    {     
        $collection = $this->getMongoDbCollection("TomekWlod\Geocoder\Document\Location");
        
        $statements = [
//            'deployment' => $deploymentId, 
//            'translational' => true
        ];
        
        $output->writeln("Found {$collection->count($statements, ['timeout' => 36000])} rows");
        
        foreach ($collection->find($statements)->sort(['geocoderErrors' => "ASC", 'createdAt' => "DESC"]) as $document) {
            var_dump($document);
        }
    }
    
    protected function getMongoDbCollection($className)
    {
        return $this->getContainer()->get('doctrine_mongodb')->getManager()->getDocumentCollection($className);
    }
}