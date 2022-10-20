<?php

declare(strict_types=1);

namespace App\Controller;

use App\Service\AdsPageService;
use App\Service\MenuBuilder;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AdsPageController extends AbstractController
{
    private MenuBuilder $menuBuilder;
    private AdsPageService $adsPageService;

    /**
     * AdsPageController constructor.
     */
    public function __construct(
        MenuBuilder $menuBuilder,
        AdsPageService $adsPageService
    ) {
        $this->menuBuilder    = $menuBuilder;
        $this->adsPageService = $adsPageService;
    }

    /**
     * @Route("/", methods={"GET"}, name="ads_page")
     */
    public function renderAdAction(): Response
    {
        $jsonData = $this->adsPageService->getAdsPageData();

        return $this->render('ad-page.html.twig', [
            'menu' => $this->menuBuilder->getMenuData(),
            'ad'   => $jsonData['data']
        ]);
    }
}


