<?php
namespace PTRO\RencontresBundle\EventListener;

use Doctrine\ORM\Event\LifecycleEventArgs;
use PTRO\RencontresBundle\Entity\Message;
use PTRO\RencontresBundle\Entity\Favori;
use PTRO\RencontresBundle\Entity\Poke;
use PTRO\RencontresBundle\Entity\Blocage;
use PTRO\RencontresBundle\Entity\Signalement;
use PTRO\RencontresBundle\Entity\Evenement;

class CreationEvenement
{
    public function prePersist(LifecycleEventArgs $args)
    {
        $entity = $args->getEntity();

        if (!($entity instanceof Message || $entity instanceof Favori || $entity instanceof Poke || $entity instanceof Blocage || $entity instanceof Signalement)) {
            return;
        }

        $entityManager = $args->getEntityManager();

        $evenement = new Evenement();

        if ($entity instanceof Message){
            $evenement->setType("message");
            $evenement->setCreateur($entity->getAuteur());
            if($entity->getAuteur() == $entity->getConversation()->getCreateur()){
                $evenement->setReceveur($entity->getConversation()->getReceveur());
            }
            else{
                $evenement->setReceveur($entity->getConversation()->getCreateur());
            }
            $entityManager->persist($evenement);
            return;
        }elseif ($entity instanceof Favori) {
            $type = "favori";
        }elseif ($entity instanceof Poke) {
            $type = "poke";
        }elseif ($entity instanceof Signalement) {
            $type = "signalement";
        }elseif ($entity instanceof Blocage) {
            $type = "blocage";
        }

        $evenement->setType($type);
        $evenement->setCreateur($entity->getCreateur());
        $evenement->setReceveur($entity->getReceveur());


        $entityManager->persist($evenement);
    }
}