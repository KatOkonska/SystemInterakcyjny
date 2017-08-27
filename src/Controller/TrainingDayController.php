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


use Form\TrainingType;
use Form\TrainingDayType;
use Repository\TrainingRepository;
use Repository\TrainingDayRepository;
use Repository\UserRepository;
use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Repository\SportNameRepository;

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
        $controller->match('show_all', [$this, 'showAllTrainingDayAction'])
            ->method('POST|GET')
            ->bind('show_all_training_day');
//        $controller->match('edit/{id}', [$this, 'editTrainingDayAction'])
//            ->method('POST|GET')
//            ->bind('edit');


        return $controller;
    }

    /**
     * Login action.
     *
     * @param \Silex\Application                        $app     Silex application
     * @param \Symfony\Component\HttpFoundation\Request $request HTTP Request
     *
     * @return \Symfony\Component\HttpFoundation\Response HTTP Response
     */

    public function addTrainingDayAction(Application $app, Request $request)
    {

        $UserRepository = new UserRepository($app['db']);
        $user = $UserRepository->getUserByLogin($app['user']->getUsername());

        $form = $app['form.factory']->createBuilder(TrainingDayType::class)->getForm();
        $form->handleRequest($request);


        $errors ='';

        if ($form->isSubmitted()) {

            if ($form->isValid()) {
                $trainingDayRepository = new TrainingDayRepository($app['db']);
                $addTraining = $trainingDayRepository->addTrainingDay($form, $user['User_ID']);

                echo 'Wyslano do bazy';

            } else{
                $errors = $form->getErrors();
            }
        }

        return $app['twig']->render(
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

        $UserRepository = new UserRepository($app['db']);
        $user = $UserRepository->getUserByLogin($app['user']->getUsername());

        $trainingDayRepository = new TrainingDayRepository($app['db']);
        $table = $trainingDayRepository->showAllTrainingDay($user['User_ID']);

        return $app['twig']->render(
            'training_day/training_day_show_all.html.twig',
            ['table' => $table]

        );
    }
//
//    public function showWeekTrainingAction(Application $app)
//    {
//        $table =[];
//
//        $TrainingRepository = new TrainingRepository($app['db']);
//        $table = $TrainingRepository->showWeekTraining();
//
//        return $app['twig']->render(
//            'training/training_show_week.html.twig',
//            ['table' => $table]
//
//        );
//    }
//
//    public function editTrainingAction(Application $app, $id, Request $request)
//    {
//
//        $UserRepository = new UserRepository($app['db']);
//        $user = $UserRepository->getUserByLogin($app['user']->getUsername());
//
//
//        $sportNameRepository = new SportNameRepository($app['db']);
//        $choice = $sportNameRepository->showAllSportName();
//
//        $TrainingRepository = new TrainingRepository($app['db']);
//        $one_training = $TrainingRepository->findOneTrainingById($id);
//
//        $one_training['choice'] = $choice;
//
//        $form = $app['form.factory']->createBuilder(TrainingType::class, $one_training, array())->getForm();
//
//        $form->handleRequest($request);
//
//        $errors ='';
//
//        if ($form->isSubmitted()) {
//
//            if ($form->isValid()) {
//                $TrainingRepository = new TrainingRepository($app['db']);
//                $editTraining = $TrainingRepository->editTraining($id, $form, $user['User_ID']);
//
//                echo 'Wyslano do bazy';
//
//            } else{
//                $errors = $form->getErrors();
//            }
//        }
//
//        return $app['twig']->render(
//            'training/training_edit.html.twig',
//            [
//                'form' => $form->createView(),
//                'error' => $errors,
//                'id' => $id
//            ]
//        );
//    }

}