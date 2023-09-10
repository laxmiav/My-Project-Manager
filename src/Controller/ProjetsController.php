<?php

namespace App\Controller;

use App\Entity\Projets;
use App\Entity\Tasks;
use App\Form\ProjetsType;
use App\Repository\ProjetsRepository;
use App\Repository\TasksRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;







#[Route('/projets')]
class ProjetsController extends AbstractController
{
    #[Route('/', name: 'app_projets_index', methods: ['GET'])]
    public function index(ProjetsRepository $projetsRepository): Response
    {
       

            /** @var User $user */
            $userId = $this->container->get('security.token_storage')->getToken()->getUser()->getId();
            //var_dump($user);

        return $this->render('projets/index.html.twig', [
            'projets' => $projetsRepository->findAllByUserId($userId ),
        ]);
    }

    #[Route('/new', name: 'app_projets_new', methods: ['GET', 'POST'])]
    public function new(Request $request, ProjetsRepository $projetsRepository): Response
    {
        $projet = new Projets();
        $form = $this->createForm(ProjetsType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $projetsRepository->save($projet, true);

            return $this->redirectToRoute('app_projets_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('projets/new.html.twig', [
            'projet' => $projet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_projets_show', methods: ['GET'])]
   
    public function show(Projets $projet): Response
    {

        $this->denyAccessUnlessGranted('POST_VIEW', $projet);
        return $this->render('projets/show.html.twig', [
            'projet' => $projet,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_projets_edit', methods: ['GET', 'POST'])]
    
    public function edit(Request $request, Projets $projet, ProjetsRepository $projetsRepository): Response
    {
        $this->denyAccessUnlessGranted('POST_EDIT', $projet);
        $form = $this->createForm(ProjetsType::class, $projet);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $projetsRepository->save($projet, true);

            return $this->redirectToRoute('app_projets_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('projets/edit.html.twig', [
            'projet' => $projet,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_projets_delete', methods: ['POST'])]
    public function delete(Request $request, Projets $projet, ProjetsRepository $projetsRepository): Response
    {
        $this->denyAccessUnlessGranted('POST_DELETE', $projet);
        if ($this->isCsrfTokenValid('delete'.$projet->getId(), $request->request->get('_token'))) {
            $projetsRepository->remove($projet, true);
        }

        return $this->redirectToRoute('app_projets_index', [], Response::HTTP_SEE_OTHER);
    }

    
// // to find all releted tasks
//  /**
//      * @Route("/tasks/{id}", name="projets_tasks", methods={"GET"})
//      */
//     public function tasksindex(int $id,TasksRepository $tasksRepository): Response
//     {
//         return $this->render('tasks/index.html.twig', [
//             'projectId' => $id,
//             'tasks' => $tasksRepository->findTasksByProjects($id),
//             'tasksinprogress' => $tasksRepository->findTasksByProgress($id),
//             'tasksDone' => $tasksRepository->findTasksByDone($id),

//         ]);
//     }

   



}
