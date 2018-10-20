<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Kernel;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    private $projectDir;

    /**
     * @Route("/", name="app_index")
     */
    public function indexAction(): Response
    {
        $baseDir = \realpath($this->projectDir).\DIRECTORY_SEPARATOR;
        $docVersion = substr(Kernel::VERSION, 0, 3);

        return $this->render(
           'welcome.html.php',
           [
               'version' => Kernel::VERSION,
               'baseDir' => $baseDir,
               'docVersion' => $docVersion,
           ]);
    }
}
