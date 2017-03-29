<?php

/*
 * This file is part of the FOSUserBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PTRO\RencontresBundle\Controller;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use FOS\UserBundle\Controller\ProfileController as BaseController;
use PTRO\RencontresBundle\Entity\Photo;
use PTRO\RencontresBundle\Form\PhotoType;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

/**
 * Controller managing the user profile.
 *
 * @author Christophe Coevoet <stof@notk.org>
 */
class ProfileController extends BaseController
{
    public function supprPhotoAction(Request $request, $ordre){
        $em = $this->getDoctrine()->getManager();
        $user = $this->getUser();
        $repositoryPhoto = $em->getRepository('PTRORencontresBundle:Photo');
        $photo = $repositoryPhoto->getPhotoByOrdreAndUser($user, $ordre);
        if($photo != null){
            $em->remove($photo);
            $em->flush();
            //On décale d'un cran les photos qu'il reste
            $nbPhotos = $repositoryPhoto->getOrdreMax($user);
            if($nbPhotos > $ordre){
                $photo_dir = $this->get('kernel')->getRootDir() . '/../web/uploads/img/'.$user->getId().'/';
                for($i = $ordre+1;$i<=$nbPhotos;$i++){
                    foreach (glob($photo_dir.$i."_*") as $photoName) {
                        if(strpos($photoName, $i."_main", 0) != false){
                            $photoARenommer = $repositoryPhoto->getPhotoByOrdreAndUser($user, $i);
                            $photoARenommer->setOrdre($i - 1);
                            $photoARenommer->setNom(($i - 1)."_main");
                            $em->flush();
                            $nouveauNomPhoto = str_replace($i."_main", ($i-1)."_main", $photoName);
                            rename($photoName, $nouveauNomPhoto);
                            //echo $nouveauNomPhoto."<br>";
                        }
                        if(strpos($photoName, $i."_medium", 0) != false){
                            $nouveauNomPhoto = str_replace($i."_medium", ($i-1)."_medium", $photoName);
                            rename($photoName, $nouveauNomPhoto);
                            //echo $nouveauNomPhoto."<br><br>";
                        }
                    }
                }
            }
            $request->getSession()->getFlashBag()->add('success', 'Votre photo a bien été supprimée.');
        }
        return $this->redirectToRoute('fos_user_profile_show');
    }

    public function photoAction(Request $request){
        $photo = new Photo();
        $formPhoto   = $this->get('form.factory')->create(PhotoType::class, $photo);
        return $this->render('PTRORencontresBundle:Rencontres:layout_photoForm.html.twig', array(
            'formPhoto' => $formPhoto->createView(),
        ));
    }

    public function photoSubmitAction(Request $request){
        $photo = new Photo();
        $formPhoto   = $this->get('form.factory')->create(PhotoType::class, $photo);

        if ($request->isMethod('POST') && $formPhoto->handleRequest($request)->isValid()) {

            //On vérifie qu'il s'agit d'une image sinon on sort
            $type = exif_imagetype($photo->getFile());
            if ($type != IMAGETYPE_GIF && $type != IMAGETYPE_JPEG && $type != IMAGETYPE_PNG) {
                $request->getSession()->getFlashBag()->add('erreur', 'Votre photo doit être dans les formats suivants: JPEG, GIF, PNG.');
                return $this->redirectToRoute('fos_user_profile_show');
            }

            $repositoryPhoto = $this->getDoctrine()->getManager()->getRepository('PTRORencontresBundle:Photo');

            //On autorise que 5 photos maximum sinon on sort
            if($repositoryPhoto->getNbPhoto($this->getUser()) == 5){
                $request->getSession()->getFlashBag()->add('erreur', 'Vous ne pouvez mettre que 5 photos maximum dans votre profil.');
                return $this->redirectToRoute('fos_user_profile_show');
            }

            //On définit l'ordre de la photo
            $ordre = $repositoryPhoto->getOrdreMax($this->getUser());
            if($ordre != null){
                $ordre++;
            }else{
                $ordre = 1;
            }
            $photo->setOrdre($ordre);

            //On définit le user de la photo
            $photo->setUtilisateur($this->getUser());

            //On sauvegarde la photo
            $em = $this->getDoctrine()->getManager();
            $em->persist($photo);
            $em->flush();
            $request->getSession()->getFlashBag()->add('success', 'Votre photo a bien été enregistrée.');
        }
        return $this->redirectToRoute('fos_user_profile_show');
    }

    /**
     * Show the user.
     */
    public function showAction()
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        //On  affiche dans la vue un warning
        //Pour inciter l'utilisateur à remplir son profil au maximum
        $properties_diff = array("id" => '', "username" => '', "usernameCanonical" => '', "email" => '', "emailCanonical" => '',
            "enabled" => '', "salt" => '', "password" => '', "plainPassword" => '', "lastLogin" => '', "confirmationToken" => '',
            "passwordRequestedAt" => '', "groups" => '', "roles" => '', 'dateCreation' => '', 'dateModification' => '', 'vues' => '',
            "desactive" => '');
        $properties = $user->getProprietes();
        $properties = array_diff_key($properties, $properties_diff);

        $i=0;
        $j=0;
        foreach ($properties as $value){
            if(empty($value)){
                $i++;
            }
            $j++;
        }
        if ($i != 0){
            $percent = round($i/$j, 2) * 100;
        }
        else{
            $percent = 100;
        }

        $repositoryPhoto = $this->getDoctrine()->getManager()->getRepository('PTRORencontresBundle:Photo');
        $photos = $repositoryPhoto->getPhotosProfile($user) ;
        return $this->render('@FOSUser/Profile/show.html.twig', array(
            'profil' => $user,
            'photos' => $photos,
            'percent' => $percent,
        ));
    }

    /**
     * Edit the user.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function editAction(Request $request)
    {
        $user = $this->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        /** @var $dispatcher EventDispatcherInterface */
        $dispatcher = $this->get('event_dispatcher');

        $event = new GetResponseUserEvent($user, $request);
        $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_INITIALIZE, $event);

        if (null !== $event->getResponse()) {
            return $event->getResponse();
        }

        /** @var $formFactory FactoryInterface */
        //$formFactory = $this->get('fos_user.profile.form.factory');

        //$form = $formFactory->createForm();
        //$form->setData($user);

        //$form->handleRequest($request);

        $flow = $this->get('PTRO.form.flow.editUtilisateur'); // must match the flow's service id
        $flow->bind($user);

        $form = $flow->createForm();

        //$form->handleRequest($request);

        //if ($form->isSubmitted() && $form->isValid()) {
        if($request->isMethod("post") && $flow->isValid($form)){
            $flow->saveCurrentStepData($form);
            if ($flow->nextStep()) {
                // form for the next step
                $form = $flow->createForm();
            } else {
                /** @var $userManager UserManagerInterface */
                $userManager = $this->get('fos_user.user_manager');

                $event = new FormEvent($form, $request);
                $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_SUCCESS, $event);
				
				$user->setDateModification(new \Datetime());
				
                $userManager->updateUser($user);

                if (null === $response = $event->getResponse()) {
                    $url = $this->generateUrl('fos_user_profile_show');
                    $response = new RedirectResponse($url);
                }

                $dispatcher->dispatch(FOSUserEvents::PROFILE_EDIT_COMPLETED, new FilterUserResponseEvent($user, $request, $response));

                return $response;
            }
        }

        return $this->render('@FOSUser/Profile/edit.html.twig', array(
            'form' => $form->createView(),
            'flow' => $flow,
        ));
    }
}
