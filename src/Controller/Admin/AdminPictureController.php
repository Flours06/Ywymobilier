<?php

namespace App\Controller\Admin;

use App\Entity\Picture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminPictureController extends AbstractController {
    /**
     * @var ObjectManager
     */
    private $em;

    /**
     * @param Picture $picture
     * @param Request $request
     * @return RedirectResponse
     * @Route("/(id)", name="admin.picture.delete",methods="DELETE")
     */
    public function delete(Picture $picture, Request $request)
    {
        $propertyId = $picture->getProperty()->getId()
;        if ($this->isCsrfTokenValid('delete' . $picture->getId(), $request->get('_token'))) {
            $this->em->remove($picture);
            $this->em->flush();
            $this->addFlash('success', 'Bien supprimé avec succès');

        }
        return $this->redirectToRoute('admin.property.edit', ['id' => $propertyId]);
    }
}