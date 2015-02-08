<?php
/**
 * Created by PhpStorm.
 * User: geoffreycandeias
 * Date: 08/02/15
 * Time: 16:23
 */

namespace TickerPicker\PlatformBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController extends Controller {

    public function indexAction() {
        $url = $this->get('Router')->generate('tp_platform_view', array('id' => 5), true);
        return new Response("URL de l'annonce  5 : ". $url);
    }

    public function viewAction($id) {
        return new Response("Affichage de l'annonce ID : ".$id);
    }
}