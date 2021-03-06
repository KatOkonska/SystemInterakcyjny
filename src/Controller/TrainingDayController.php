<?php
/**
 * Created by PhpStorm.
 * User: kasia
 * Date: 15.08.17
 * Time: 21:54
 */

/**
 * TrainingController.
 *
 */
namespace Controller;


use Form\DeleteTrainingDayType;
use Form\EditTrainingDayType;
use Form\TrainingDayType;
use Repository\TrainingDayRepository;
use Repository\UserRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class TrainingDayController
 *
 * @package Controller
 */
class TrainingDayController implements ControllerProviderInterface
{
    /**
     * {@inheritdoc}
     */
    public function connect(Application $app)
    {
        $controller = $app['controllers_factory'];
        $controller->match('add', [$this, 'addTrainingDayAction'])
            ->method('POST|GET')
            ->bind('add_training_day');
//        $controller->match('show_all', [$this, 'showAllTrainingDayAction'])
//            ->method('POST|GET')
//            ->bind('show_all_training_day');
        $controller->get('show_all/{page}', [$this, 'indexAction'])
            ->value('page', 1)
            ->bind('show_all_training_day');
        $controller->match('delete_training_day/{id}', [$this, 'deleteTrainingDayAction'])
            ->method('GET|POST')
            ->bind('delete_training_day');
        $controller->match('edit_training_day/{id}', [$this, 'editTrainingDayAction'])
            ->method('POST|GET')
            ->bind('edit_training_day');


        return $controller;
    }

    public function indexAction(Application $app, $page = 1)
    {
        $userRepository = new UserRepository($app['db']);
        $user = $userRepository->getUserByLogin($app['user']->getUsername());

        $trainingDayRepository = new TrainingDayRepository($app['db']);

        return $app['twig']->render
        (
            'training_day/training_day_show_all.html.twig',
            ['paginator' => $trainingDayRepository->findAllPaginated($page, $user['User_ID'])]

        );
    }

    public function addTrainingDayAction(Application $app, Request $request)
    {

        $userRepository = new UserRepository($app['db']);
        $user = $userRepository->getUserByLogin($app['user']->getUsername());

        $form = $app['form.factory']->createBuilder(TrainingDayType::class)->getForm();
        $form->handleRequest($request);


        $errors ='';


        if ($form->isSubmitted())
        {

            if ($form->isValid())
            {
                $trainingDayRepository = new TrainingDayRepository($app['db']);
                $addTraining = $trainingDayRepository->addTrainingDay($form, $user['User_ID']);
                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'success',
                        'message' => 'message.added',
                    ]
                );

                return $app->redirect($app['url_generator']->generate('show_all_training_day'), 301);


            }
            else
            {
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render
        (
            'training_day/training_day_add.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
            ]
        );
    }


    public function showAllTrainingDayAction(Application $app)
    {
        $table =[];

        $userRepository = new UserRepository($app['db']);
        $user = $userRepository->getUserByLogin($app['user']->getUsername());

        $trainingDayRepository = new TrainingDayRepository($app['db']);
        $table = $trainingDayRepository->showAllTrainingDay($user['User_ID']);

        return $app['twig']->render
        (
            'training_day/training_day_show_all.html.twig',
            ['table' => $table]

        );
    }

    public function editTrainingDayAction(Application $app, $id, Request $request  )
    {
        $userRepository = new UserRepository($app['db']);
        $user = $userRepository->getUserByLogin($app['user']->getUsername());

        $trainingDayRepository = new TrainingDayRepository($app['db']);
        $trainingDay = $trainingDayRepository->findOneTrainingDayByIdAndUser($id, $user['User_ID']);

        if(!in_array('ROLE_ADMIN', $userRepository->getUserRoles($user['User_ID'])) )
        {
            if (!$trainingDay) {
                return $app->abort('404', 'message.cant_edit_it');
            }
        }

        $form = $app['form.factory']->createBuilder(TrainingDayType::class, $trainingDay)->getForm();
        $form->handleRequest($request);

        $errors ='';

        if ($form->isSubmitted())
        {
            if ($form->isValid())
            {
                  $editSportName = $trainingDayRepository->editTrainingDay($id, $form);
                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'success',
                        'message' => 'message.edited',
                    ]
                );


                return $app->redirect($app['url_generator']->generate('show_all_training_day'), 301);


            }
            else
            {
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render
        (
            'training_day/training_day_edit.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }


    /**
     * @param Application $app
     * @param $id
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function deleteTrainingDayAction(Application $app, $id, Request $request)
    {
        $userRepository = new UserRepository($app['db']);
        $user = $userRepository->getUserByLogin($app['user']->getUsername());

        $trainingDayRepository = new TrainingDayRepository($app['db']);
        $trainingDay = $trainingDayRepository->findOneTrainingDayByIdAndUser($id, $user['User_ID']);

        if(!in_array('ROLE_ADMIN', $userRepository->getUserRoles($user['User_ID'])) )

        {
            if (!$trainingDay)
            {
                return $app->abort('404', 'message.cant_delete_it');
            }
        }


        $form = $app['form.factory']->createBuilder(DeleteTrainingDayType::class)->getForm();
        $form->handleRequest($request);

        $errors ='';


        if ($form->isSubmitted())
        {

            if ($form->isValid())
            {
                $trainingDayRepository = new TrainingDayRepository($app['db']);
                $deleteTrainingDay = $trainingDayRepository->deleteTrainingDay($id);

                $app['session']->getFlashBag()->add(
                    'messages',
                    [
                        'type' => 'info',
                        'message' => 'message.deleted',
                    ]
                );

                return $app->redirect($app['url_generator']->generate('show_all_training_day'), 301);

            }
            else
            {
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render
        (
            'training_day/training_day_delete.html.twig',
            [
                'form' => $form->createView(),
                'error' => $errors,
                'id' => $id
            ]
        );
    }

}