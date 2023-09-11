<?php

namespace App\Controller;

use App\Entity\Projets;
use App\Entity\Tasks;
use App\Form\TasksType;
use App\Repository\ProjetsRepository;
use App\Repository\TasksRepository;
use Doctrine\ORM\EntityManagerInterface;
use Exception;
use Proxies\__CG__\App\Entity\Projets as EntityProjets;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Attribute\IsGranted;

#[Route('/tasks')]
class TasksController extends AbstractController
{
    #[Route('/{id}', name: 'app_tasks_index', methods: ['GET'])]
    public function index(int $id,TasksRepository $tasksRepository,ProjetsRepository $projetsRepository): Response
    {
       // $projet1 = new Projets;
         $projet = $tasksRepository->findTasksByProjects($id);
         foreach($projet as  $pt ){
           $toll =  $pt->getProject();
         }
         //var_dump($toll);die;
         if (!isset($toll )){
            throw new Exception("No Projects and Tasks were found", 1);
            
         }
         $this->denyAccessUnlessGranted('POST_VIEW',  $toll);


        return $this->render('tasks/index.html.twig', [
            'projectId' => $id,
            'tasks' => $tasksRepository->findTasksByTodo($id),
            'tasksinprogress' => $tasksRepository->findTasksByProgress($id),
            'tasksDone' => $tasksRepository->findTasksByDone($id),
        ]);
    }
    #[Route('/done/{id}', name: 'app_tasks_indexDone', methods: ['GET'])]
    public function indexDone(int $id,TasksRepository $tasksRepository): Response
    {
        


        return $this->render('tasks/done.html.twig', [
            'projectId' => $id,
            
            'tasksDone' => $tasksRepository->findTasksByDone($id),
        ]);
    }

    #[Route('/new/{id}', name: 'app_tasks_new', methods: ['GET', 'POST'])]
    public function new(int $id,Request $request, TasksRepository $tasksRepository,ProjetsRepository $projetsRepository ): Response
    {
        
        
       
        $task = new Tasks();
        
        $form = $this->createForm(TasksType::class, $task);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $projet = $projetsRepository->findAllById($id);
            foreach($projet as  $pt ){
              $toll =  $pt;
            }

           $task->setProject($toll);
          $task->setStatus('1');
            $tasksRepository->save($task, true);

            return $this->redirectToRoute('app_tasks_index', ['id'=> $id], Response::HTTP_SEE_OTHER);
        }
       
        return $this->renderForm('tasks/new.html.twig', [
            'task' => $task,
            'projectId' => $id,
            'form' => $form,
        ]);
    }

    #[Route('/{id}/show', name: 'app_tasks_show', methods: ['GET'])]
    public function show(Tasks $task): Response
    {
        $toll =  $task->getProject();
        if (!isset($toll )){
            throw new Exception("No Projects and Tasks were found", 1);
            
         }
         $this->denyAccessUnlessGranted('POST_VIEW',  $toll);

        $project = $task->getProject()->getId();

        return $this->render('tasks/show.html.twig', [
            'task' => $task,
            'projectId'=> $project
        ]);
    }

    #[Route('/{id}/edit', name: 'app_tasks_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Tasks $task, TasksRepository $tasksRepository): Response
    {
       // $project = $task->getProject()->getId();
       $toll = $task->getProject();
        if (!isset($toll )){
            throw new Exception("No Projects and Tasks were found", 1);
            
         }
         $this->denyAccessUnlessGranted('POST_EDIT',  $toll);

        $form = $this->createForm(TasksType::class, $task);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $tasksRepository->save($task, true);
            
            return $this->redirectToRoute('app_tasks_index', ['id'=> $task->getProject()->getId()], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('tasks/edit.html.twig', [
            'form' => $form,
            'task' => $task,
           //'projectId' => $task->getProject()->getId(),
            
        ]);
    }

    #[Route('/{id}', name: 'app_tasks_delete', methods: ['POST'])]
    public function delete(Request $request, Tasks $task, TasksRepository $tasksRepository): Response
    {
        $project = $task->getProject()->getId();
        if ($this->isCsrfTokenValid('delete'.$task->getId(), $request->request->get('_token'))) {
            $tasksRepository->remove($task, true);
        }

        return $this->redirectToRoute('app_tasks_index', ['id'=> $project], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/inprogress/', name: 'app_tasks_inprogress', methods:  ['GET', 'POST'])]
    public function inProgress(Request $request, Tasks $task, TasksRepository $tasksRepository): Response
    {
      
        $task->setStatus('2');
        $tasksRepository->save($task,true);
       // $tasksRepository->save($task, true);
       $project = $task->getProject()->getId();

        return $this->redirectToRoute('app_tasks_index', ['id'=> $project], Response::HTTP_SEE_OTHER);
    }

    #[Route('/{id}/done', name: 'app_tasks_done', methods:  ['GET', 'POST'])]
    public function done(Request $request, Tasks $task, TasksRepository $tasksRepository): Response
    {
        
        $task->setStatus('3');
        $tasksRepository->save($task,true);
       // $tasksRepository->save($task, true);
       $project = $task->getProject()->getId();

        return $this->redirectToRoute('app_tasks_index', ['id'=> $project], Response::HTTP_SEE_OTHER);
    }

}
